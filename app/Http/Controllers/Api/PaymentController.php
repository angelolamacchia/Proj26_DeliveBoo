<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Braintree\Gateway;
use Illuminate\Http\Request;
use App\Order;
use App\Payment;

class PaymentController extends Controller
{
    public function generate(Request $request) {
        $data = $request->all();



        $gateway = new Gateway([
             'environment' => 'sandbox',
             'merchantId' => 'qxq7k3229m8vmhzz',
             'publicKey' => 'qvk7brznmzk4pr2s',
             'privateKey' => '15a42e12c61a7f38629602e8cd0fe973'
         ]);
 
 
 
        $nonceFromTheClient = $data["payment_method_nonce"];
 
 
 
        $clientToken = $gateway->clientToken()->generate();
 
         
        $result = $gateway->transaction()->sale([
            'amount' => $data["amount"],
            'paymentMethodNonce' => $nonceFromTheClient,
            'options' => [
            'submitForSettlement' => true,
            ]
        ]);

           
            

        if($result->success){
            $payment = new Payment();
            $payment->order_id = Order::latest('created_at')->first()->id;
            $payment->status = 1;
            $payment->save();
            
            return redirect()->route('guest.order.paid');
        } else {
            return response()->json($result);
        }
    
    }

    public function index() {

        $gateway = new Gateway([
            'environment' => 'sandbox',
            'merchantId' => 'qxq7k3229m8vmhzz',
            'publicKey' => 'qvk7brznmzk4pr2s',
            'privateKey' => '15a42e12c61a7f38629602e8cd0fe973'
        ]);

        $clientToken = $gateway->clientToken()->generate();

        return view('guest.order.payment', compact('clientToken'));
    }



}