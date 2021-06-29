<?php

namespace App\Http\Controllers;
use App\Models\Product;


use Illuminate\Http\Request;

class ProductClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all()->orderByDesc('id');
        // return view('base.novedades');
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
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function productIndividual($id){
        $product = Product::find($id);

        //dd($product);
        return view('cliente.producto')->with('product', $product);
    }

    public function productsNovedades(){
        $products = Product::orderByDesc('id')->get();

        return view('principal.novedades')->with('products',$products);
    }

    public function productsWoman(){
        $products = Product::orderByDesc('id')->get();

        return view('principal.mujeres')->with('products',$products);
    }

    public function productsMan(){
        $products = Product::orderByDesc('id')->get();

        return view('principal.hombres')->with('products',$products);
    }

    public function carrito(){
        return view('cliente.carrito');
    }

}
