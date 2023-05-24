<?php

namespace App\Http\Controllers;

use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Transaction;
use App\Models\CartOrder;
use App\Models\Order;
use App\Models\Cart;
use DB;
use Midtrans\Config;
use Midtrans\Snap;

class TrxController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_id==1){
            $user_id = Auth::id();
            $Trx = Transaction::get();
        }else{
            $user_id = Auth::id();
            $Trx = Transaction::where('user_id', $user_id)->get();
        }

        return view('user.trx.index', compact('Trx'));
    }

    public function store()
    {
        $customer = auth()->user();

        $totalAmount = Cart::where('user_id', $customer->id) // filter cart items by user ID
        ->join('products', 'carts.product_id', '=', 'products.id') // join the products table
        ->sum(DB::raw('products.harga * carts.qty')); // calculate the total price\

        $trx = Transaction::create([
            'user_id' => $customer->id,
            'amount' => $totalAmount,
            'trx_code' => strtoupper(Str::random(10)),
            'status_id' => 0
        ]);

        \Midtrans\Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        \Midtrans\Config::$isProduction = (bool) env('MIDTRANS_IS_PRODUCTION');
        \Midtrans\Config::$isSanitized = (bool) env('MIDTRANS_IS_SANITIZED');
        \Midtrans\Config::$is3ds = (bool) env('MIDTRANS_IS_3DS');
        
        $params = array(
            'transaction_details' => array(
                'order_id' => $trx->trx_code,
                'gross_amount' => $trx->amount,
            ),
            'customer_details' => array(
                'first_name' => $customer->name,
                'last_name' => $customer->name,
                'email' => $customer->email
            ),
        );

        $createMidtransTransaction  = \Midtrans\Snap::createTransaction($params);
        $midtransRedirectUrl = $createMidtransTransaction->redirect_url;

        return redirect($midtransRedirectUrl);
    }   

    public function storeagain($code)
    {
        $customer = auth()->user();
        $trx = Transaction::where('user_id', $customer->id)->where('trx_code', $code)->first();

        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = (bool) env('MIDTRANS_IS_PRODUCTION');
        Config::$isSanitized = (bool) env('MIDTRANS_IS_SANITIZED');
        Config::$is3ds = (bool) env('MIDTRANS_IS_3DS');

        $newtrx = strtoupper(Str::random(10));

        $transact = array(
            'transaction_details' => array(
                'order_id' => $newtrx,
                'gross_amount' => $trx->amount,
            ),
            'customer_details' => array(
                'first_name' => $customer->name,
                'last_name' => $customer->name,
                'email' => $customer->email
            ),
        );

        $trx->trx_code = $newtrx;
        $trx->save();

        $createMidtransTransaction = Snap::createTransaction($transact);
        $midtransRedirectUrl = $createMidtransTransaction->redirect_url;

        return redirect()->away($midtransRedirectUrl);
    }

    public function show($id)
    {
        $trx = Transaction::find($id);
        return view('user.trx.show', compact('trx'));
    }

}
