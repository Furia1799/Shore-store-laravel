<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($user = Auth::user()){
            $cart_id = $user->cart_id;
        }

        $cart = Cart::find($cart_id);

        $product_number = 0;
        $shipping_price = 0;
        $total_price = 0;

        foreach($cart->products as $product){
           $total_price += $product->price;
           $product_number++;
        }

        //dd($product_number,$shipping_price,$total_price);

        return view('cliente.cart.carrito')
            ->with('cart',$cart)
            ->with('product_number',$product_number)
            ->with('shipping_price', $shipping_price)
            ->with('total_price',$total_price);
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
        //añaddir producto a carrito
        if($user = Auth::user()){
            $cart_id = $user->cart_id;
        }

        $cart = Cart::find($cart_id);
        $product_id = $request->get('product_id');
        $cart->attachProducts($product_id);

        return redirect()->route('carts.index')->with('estado','agregado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
