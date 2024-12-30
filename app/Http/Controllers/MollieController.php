<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mollie\Laravel\Facades\Mollie;
use App\Models\Payment;

use Mollie\Api\MollieApiClient;
use Illuminate\Support\Facades\Log;
use Exception;

class MollieController extends Controller
{
    public function mollie(Request $request){

        try {
            $discountedPrice = str_replace(',', '', $request->discounted_price);

            $payment = Mollie::api()->payments->create([
                "amount" => [
                    "currency" => $request->currency,
                   "value"    => number_format((float)$discountedPrice, 2, '.', '')
                ],
                "description" => $request->description,
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

    public function success(Request $request)
    {

        try {
            $paymentId = session()->get('paymentId');

            if (!$paymentId) {
                throw new Exception("Payment ID not found in session.");
            }


            $payment = Mollie::api()->payments->get($paymentId);

            if ($payment->isPaid()) {

                $paymentRecord = new Payment();
                $paymentRecord->payment_id = $payment->id;
                $paymentRecord->product_name = $payment->description;
                $paymentRecord->quantity = session()->get('quantity');
                $paymentRecord->amount = $payment->amount->value;
                $paymentRecord->currency = $payment->amount->currency;
                $paymentRecord->payment_status = "Completed";
                $paymentRecord->payment_method = "Mollie";

                $paymentRecord->save();

                session()->forget('paymentId');
                session()->forget('quantity');

                return response()->json([
                    'success' => true,
                    'message' => 'Payment is successful.'
                ]);
            } else {
                Log::warning("Payment with ID $paymentId is not successful.");
                return redirect()->route('cancel')->with('error', 'Payment was not successful.');
            }
        } catch (Exception $e) {
            Log::error("Error processing payment: " . $e->getMessage());
            return redirect()->route('cancel')->with('error', 'There was an error processing your payment.');
        }
    }

    public function cancel(){
        echo "Payment is cancelled.";
    }
}
