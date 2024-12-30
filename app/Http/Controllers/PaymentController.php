<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use App\Models\User;
use Illuminate\Validation\ValidationException;
use Exception;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{
    public function paymentForm(){
        return view('pay_form');
    }//End

    public function productListPage(){
        return view('product_list');
    }//End

    public function productDetail(){
        return view('product_detail');
    }//End

    public function add(Request $request)
    {
        $cart = session()->get('cart', []);

        $title = $request->input('title');
        $description = $request->input('description');
        $image = $request->input('image');
        $price = $request->input('price');
        $quantity = $request->input('quantity', 1);

        if (isset($cart[$title])) {
            $cart[$title]['quantity'] += $quantity;
        } else {
            $cart[$title] = [
                'description' => $description,
                'image' => $image,
                'price' => $price,
                'quantity' => $quantity,
            ];
        }

        session()->put('cart', $cart);

        return response()->json([
            'success' => true,
            'message' => 'Ürün sepete eklendi!',
            'cart' => $cart
        ]);
    }

}
