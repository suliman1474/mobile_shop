<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    //

    function payment(){
        return view('payment');
    }

    function verify_payment(Request $request,$transaction_id){
        $request->session()->put('transaction_id',$transaction_id);
        return redirect('/complete_payment');

    }

    function complete_payment(Request $request){
        if($request->session()->has('order_id') && $request->session()->has('transaction_id') ){

            $transaction_id =$request->session()->get('transaction_id');
            $order_id = $request->session()->get('order_id');

            $order_status = "paid";

            $payment_date = date('Y-m-d h:i:s');
            $user_id = Auth::id();
            //change ordaer status to paid
            $affected =DB::table('orders') 
            ->where('id',$order_id)
            ->update(['status'=>$order_status]);

            //store payment information

            DB::table('payments')->insert([
                'order_id' => $order_id,
                'transaction_id'=>$transaction_id,
                'date'=>$payment_date,
                'user_id'=>$user_id,
            ]);

            //remove everything from the session 
            $request->session()->forget('order_id');
            $request->session()->forget('transaction_id');
            
            
            return redirect()->route('thank_you');

        }
        else{
            return redirect('/');
        }
    }

    function thank_you(){
        return view('thank_you');
    }
}
