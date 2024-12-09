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

    public function processPayment(Request $request)
    {
        try {
            // Step 1: Validate the incoming request data
            $validated = $this->validatePayment($request);

            // Step 2: Check if the user exists
            $user = $this->getUserByEmail($request->email);

            if (!$user) {
                // If the user does not exist, throw an exception
                throw new Exception("User not found with email: {$request->email}", 404);
            }

            // Step 3: Store payment information in the database
            $payment = $this->createPaymentRecord($user, $request);

            // Optionally, you can call a payment API to process the payment here
            // $paymentApiResponse = $this->processWithPaymentGateway($payment);

            // If the payment gateway call is successful, proceed
            // For now, we assume the payment process is successful

            // Step 4: Return success response
            return response()->json([
                'success' => true,
                'message' => 'Payment successfully processed.',
                'payment_id' => $payment->id,
            ], 200);

        } catch (ValidationException $e) {
            // If validation fails, return a detailed response
            return response()->json([
                'error' => 'Validation failed',
                'messages' => $e->errors(),
            ], 422);
        } catch (Exception $e) {
            // Catch general exceptions and log them for debugging
            Log::error("Payment processing failed: {$e->getMessage()}", [
                'request' => $request->all(),
                'exception' => $e,
            ]);

            // Return a user-friendly error response
            return response()->json([
                'error' => 'Payment processing failed.',
                'message' => $e->getMessage(),
            ], $e->getCode() ?: 500);
        }
    }

    /**
     * Validate the payment request data.
     *
     * @param \Illuminate\Http\Request $request
     * @return array
     */
    private function validatePayment(Request $request)
    {
        return $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|email|max:255',
            'card_number' => 'required|string|regex:/^[0-9]{16}$/',  // Ensure card number is exactly 16 digits
            'expiry_date' => 'required|string|regex:/^(0[1-9]|1[0-2])\/([0-9]{2})$/',  // MM/YY format
            'cvv'         => 'required|string|regex:/^[0-9]{3,4}$/',  // CVV is 3 or 4 digits
            'amount'      => 'required|numeric|min:1',  // Amount should be numeric and at least 1
        ]);
    }

    /**
     * Retrieve the user by email.
     *
     * @param string $email
     * @return \App\Models\User|null
     */
    private function getUserByEmail($email)
    {
        return User::where('email', $email)->first();
    }

    /**
     * Create a new payment record in the database.
     *
     * @param \App\Models\User $user
     * @param \Illuminate\Http\Request $request
     * @return \App\Models\Payment
     */
    private function createPaymentRecord(User $user, Request $request)
    {
        DB::beginTransaction();

        try {
            $payment = Payment::create([
                'user_id'     => $user->id,
                'card_number' => $request->card_number,
                'expiry_date' => $request->expiry_date,
                'cvv'         => $request->cvv,
                'amount'      => $request->amount,
            ]);

            // If payment creation is successful, commit the transaction
            DB::commit();

            return $payment;
        } catch (Exception $e) {
            // In case of an error, rollback the transaction
            DB::rollBack();

            throw new Exception('Error saving payment data: ' . $e->getMessage(), 500);
        }
    }

    /**
     * Optionally handle payment processing with a third-party payment gateway.
     *
     * @param \App\Models\Payment $payment
     * @return mixed
     */
    private function processWithPaymentGateway(Payment $payment)
    {
        // Integrate with external payment API (e.g., Stripe, PayPal)
        // Example:
        // $gateway = new PaymentGateway();
        // return $gateway->processPayment($payment);
    }
}
