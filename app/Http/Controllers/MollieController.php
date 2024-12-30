<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Payment;

class MollieController extends Controller
{
    public function mollie(Request $request){

        try {
            $discountedPrice = str_replace(',', '', $request->discounted_price);

            $payment = Mollie::api()->payments->create([
                "amount" => [
                    "currency" => $request->currency,
                    // "currency" => "GBP",
                   "value"    => number_format((float)$discountedPrice, 2, '.', '')
                    // "value"    => "10.00"
                ],
                "description" => $request->description,
                // "description" => "lastik",
                "redirectUrl" => route('success'),
                "metadata"    => [
                    "order_id" => time(),
                ],
            ]);
        } catch (\Mollie\Api\Exceptions\ApiException $e) {
            logger()->error('Mollie error: ' . $e->getMessage());
            return back()->withErrors(['error' => 'Ödeme işlemi başlatılamadı. Hata: ' . $e->getMessage()]);
        }


        session()->put('paymentId', $payment->id);
        session()->put('quantity', $request->quantity);
        session()->put('quantity', 1);

        return redirect($payment->getCheckoutUrl(),303);

    }//End

    public function success(Request $request){

        $paymentId = session()->get('paymentId');

        $payment = Mollie::api()->payments->get($paymentId);

        if($payment->isPaid()){

            $obj = new Payment();
            $obj->payment_id     = $paymentId;
            $obj->product_name   = $payment->description;
            $obj->quantity       = session()->get('quantity');
            $obj->amount         = $payment->amount->value;
            $obj->currency       = $payment->amount->currency;
            $obj->payment_status = "Completed";
            $obj->payment_method = "Mollie";

            $obj->save();

            session()->forget('paymentId');
            session()->forget('quantity');

            echo "Payment is successfull.";
        }else{
            return redirect()->route('cancel');
        }
    }//End

    public function cancel(){
        echo "Payment is cancelled.";
    }
}
