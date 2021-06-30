<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Category;


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
        //$products = Product::with('categories')
        //    ->where('categories.name','novedades')->get();

        //$categorias = Category::with('products')
          //  ->where('name','Hombre')->get();

        //$product = $products[0]->products[0]->names;
        //dd($products, $product);
       // ['product' => $product->id];
        $categories = Category::where('name','Novedades')->get();
        foreach($categories as $category){
            $category_id = $category->id;
        }

        $products = Category::find($category_id)->products()->get();
        //dd($products);
       /* foreach (categorias as $product){
             //$nombre = $product->categories->first()->name;
            $product;
            dd($product);
        }*/

        return view('principal.novedades')->with('products',$products);
    }

    public function productsWoman(){
        //$products = Product::orderByDesc('id')->get();
        $categories = Category::where('name','Mujer')->get();
        foreach($categories as $category){
            $category_id = $category->id;
        }

        $products = Category::find($category_id)->products()->get();

        return view('principal.mujeres')->with('products',$products);
    }

    public function productsMan(){
        //$products = Product::orderByDesc('id')->get();
        $categories = Category::where('name','Hombre')->get();
        foreach($categories as $category){
            $category_id = $category->id;
        }

        $products = Category::find($category_id)->products()->get();

        return view('principal.hombres')->with('products',$products);
    }

    public function carrito(){
        return view('cliente.carrito');
    }

}
