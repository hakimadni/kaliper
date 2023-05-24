<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaction;
use Illuminate\Support\Carbon;

class WebhookController extends Controller
{
    public function handler(Request $request)
    {
        \Midtrans\Config::$isProduction = (bool) env('MIDTRANS_IS_PRODUCTION');
        \Midtrans\Config::$serverKey =  env('MIDTRANS_SERVER_KEY');
        $notif = new \Midtrans\Notification();

        $transactionStatus = $notif->transaction_status;
        $transactionCode = $notif->order_id;
        $fraudStatus = $notif->fraud_status;
        $payment = $notif->payment_type;

        $status = '';

        if ($transactionStatus == 'capture'){
            if ($fraudStatus == 'challenge'){
                $status = 'challenge';
            } else if ($fraudStatus == 'accept'){
                $status = 'success';
            }
        } else if ($transactionStatus == 'settlement'){
            $status = 'success';
        } else if ($transactionStatus == 'cancel' ||
          $transactionStatus == 'deny' ||
          $transactionStatus == 'expire'){
          $status = 'failure';
        } else if ($transactionStatus == 'pending'){
          $status = 'pending';
        }

        $transaction = Transaction::where('trx_code', $transactionCode)
            ->first();

        $currentDateTime = Carbon::now();


        if ($status === 'success') {
            
            if($transaction) {
                $transaction->update([
                    'status_id' => 1,
                    'payment_method' => $payment,
                    'updated_at' => $currentDateTime
                ]);
            }

            // create a new order
            $order = new Order;
            $order->user_id = $transaction->user_id;
            $order->transaction_id = $transaction->id;
            $order->save();

            $cartItems = Cart::where('user_id', $customer->id)->get();

            foreach ($cartItems as $cartItem) {
                $cartOrder = new CartOrder();
                $cartOrder->order_id = $order->id;
                $cartOrder->product_id = $cartItem->product_id;
                $cartOrder->qty = $cartItem->qty;
                $cartOrder->sugar_level = $cartItem->sugar_level;
                $cartOrder->iced = $cartItem->iced;
                $cartOrder->save();
                
                $cartItem->delete();
            }
            
        }else if($status === 'failure'){
            if($transaction) {
                $transaction->update([
                    'status_id' => 2,
                    'payment_method' => $payment,
                    'updated_at' => $currentDateTime
                ]);
            }
        }else if($status === 'pending'){
            if($transaction) {
                $transaction->update([
                    'status_id' => 3,
                    'payment_method' => $payment,
                    'updated_at' => $currentDateTime
                ]);
            }
        }

    }
}
