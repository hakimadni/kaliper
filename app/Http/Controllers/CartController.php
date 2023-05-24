<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\User;
use DB;


class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = Auth::id();
        $cartItems = Cart::where('user_id', $user_id)->get();
        $totalPrice = 0;
        $totalPrice = Cart::where('user_id', $user_id) // filter cart items by user ID
        ->join('products', 'carts.product_id', '=', 'products.id') // join the products table
        ->sum(DB::raw('products.harga * carts.qty')); // calculate the total price\
        return view('user.cart.index', compact('cartItems', 'totalPrice'));
    }

    // Add item to cart
    public function addToCart(Request $request)
    {
        try{
            $user = Auth::user();
            // Validate the request data
            $validatedData = $request->validate([
                'product_id' => 'required|integer',
                'quantity' => 'required|integer|min:1',
                'iced' => 'nullable|integer',
                'sugar' => 'nullable|integer',
            ]);
    
            $productId = $validatedData['product_id'];
            $quantity = $validatedData['quantity'];
            $iced = $validatedData['iced'];
            $sugar = $validatedData['sugar'];
    
            // Check if the item already exists in cart
            $cartItem = Cart::where('user_id', $user->id)
                            ->where('product_id', $productId)
                            ->first();
    
            if ($cartItem) {
                // If item exists, update the quantity
                $cartItem->qty = $quantity;
                $cartItem->iced = $iced;
                $cartItem->sugar_level = $sugar;
                $cartItem->save();
            } else {
                // If item does not exist, add it to cart
                $cartItem = Cart::create([
                    'user_id' => $user->id,
                    'product_id' => $productId,
                    'qty' => $quantity,
                    'iced' => $iced,
                    'sugar_level' => $sugar,
                ]);
                $cartItem->save();
                
            }


            //return response
            return response()->json([
                'success' => true,
                'message' =>' Data Berhasil Disimpan!',
                'data'    => $cartItem->product->name
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'success' => false,
                'message' => $e
            ]);

        }
        
    }

    public function update(Request $request)
    {
        $user_id = Auth::user()->id;


        $data = $request->validate([
            'qty' => 'required|integer|min:1',
            'cartItemId' => 'integer',
        ]);
        $qty = $data['qty'];
        $cartItem = Cart::find($data['cartItemId']);
        $cartItem->qty = $qty;
        $cartItem->save();
        
        $subtotal = $cartItem->qty * $cartItem->product->harga;
        $total = Cart::where('user_id', $user_id) // filter cart items by user ID
        ->join('products', 'carts.product_id', '=', 'products.id') // join the products table
        ->sum(DB::raw('products.harga * carts.qty')); // calculate the total price\
        if($cartItem->qty != $qty){
            return response()->json([
                'success'       => false,
                'message'       => $cartItem->product->name,
                'subtotal'      => $subtotal,
                'total'      => $total,

            ]);
        }else{
            return response()->json([
                'success'       => true,
                'message'       =>$cartItem->product->name,
                'subtotal'      => $subtotal,
                'total'      => $total,

            ]);
        }
    }
    
    public function deleteCartItem(Request $request)
    {
        $itemId = $request->input('itemId');

        // Perform the deletion logic here
        // Assuming you have a CartItem model and a 'id' field to identify the item
        
        try {
            $cartItem = Cart::findOrFail($itemId);
            $cartItem->delete();

            return response()->json([
                'success' => true,
                'message' =>' Cart item deleted successfully!',
                'data'    => $cartItem->product->name
            ]);
        } catch (\Exception $e) {
            // Return an error response
            return response()->json([
                'success' => false,
                'message' => $e
            ]);
        }
    }
}
