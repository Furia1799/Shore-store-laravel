<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Direction;
use App\Models\Order;

use Illuminate\Http\Request;
use Auth;

class OrderClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mostrar todos las ordenes
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        if($user = Auth::user()){
            $cart_id = $user->cart_id;
            $user_id = $user->id;
        }

        $cart = Cart::find($cart_id);

        $product_number = 0;
        $shipping_price = 0;
        $total_price = 0;

        foreach($cart->products as $product){
            $total_price += $product->price;
            $product_number++;
        }

        $directions = Direction::where('user_id',$user_id)->get();

        //dd($product_number,$shipping_price,$total_price);

        return view('cliente.order.create')
            ->with('product_number',$product_number)
            ->with('shipping_price', $shipping_price)
            ->with('total_price',$total_price)
            ->with('directions',$directions)
            ->with('user',$user);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $order = new Order();
        $order->user_id = $request->get('user_id');
        $order->direction_id = $request->get('direction_id');
        $order->cost = $request->get('cost');
        $order->status = 'En Proceso';
        //$order->date = date("d-m-Y");
        $order->date = date("Y-m-d");

        $order->save();

        return redirect('/novedades');

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
