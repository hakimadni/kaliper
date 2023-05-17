<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use DB;
class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();

    $categories = Category::all();
    $productsByCategory = Product::with('category')
        ->orderBy('category_id')
        ->get()
        ->groupBy('category_id');

        $totalItem = Cart::where('user_id', auth()->id())
        ->groupBy('user_id')->count();

        $totalPrice = Cart::where('user_id', $user->id) // filter cart items by user ID
        ->join('products', 'carts.product_id', '=', 'products.id') // join the products table
        ->sum(DB::raw('products.harga * carts.qty')); // calculate the total price\

    return view('user.Menu.index', compact('categories', 'productsByCategory', 'totalPrice','totalItem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('user.Menu.show', ['product' => $product]);
}


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
