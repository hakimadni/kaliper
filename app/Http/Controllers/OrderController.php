<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Order;
use App\Models\CartOrder;
use App\Models\Transaction;
use App\Models\Cart;
use Illuminate\Support\Carbon;
use DB;

class OrderController extends Controller
{
    public function index()
    {
        if(auth()->user()->role_id==1){
            $user_id = Auth::id();
            $order = Order::get();
        }else{
            $user_id = Auth::id();
            $order = Order::where('user_id', $user_id)->get();
        }
        
        return view('user.order.index', compact('order'));
    }

    public function show($id)
    {
        $order = Order::find($id);
        return view('user.order.show', compact('order'));
    }

    
    public function updateStatus(Request $request)
    {
        $order = $request->input('orderId');
        
        $order = Order::find($order);
        $order->status = 1;
        $order->updated_at = Carbon::now();
        $order->save();

        return response()->json(['success' => true]);
    }
}
