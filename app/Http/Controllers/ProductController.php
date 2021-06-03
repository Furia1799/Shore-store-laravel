<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Mostrar todos los productos
        $products = Product::all(); //select * from Producto
        return view('administrador.products.index')->with('products', $products); //vista a mandar
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Crear formulario Product
        //return view('products.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //POST //GUARDAR PRODUCT
        $products = new Product(); //Crear objeto de Product
        $products->id_brand = $request->get('id_brand');
        $products->name = $request->get('name');
        $products->description = $request->get('description');
        $products->price = $request->get('price');
        $products->stock = $request->get('stock');
        //imagen pendiente
        /*$imagen = $request->file('image');
        $nombre = $imagen->getClientOriginalName();
        $formato = $imagen->getClientOriginalExtension();
        $imagen->move('images/products', $nombre);*/
        $products->image = $request->file('image');

        $products->save();

        return redirect()->route('products.index')->with('estado', 'creado'); //ir de nuevo al controlador index
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //mostrar solo un producto
        $product = Product::find($id);
        return redirect()->route('products.index')->with('product',$product)->with('accion','eliminar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mostrar modal
        $product = Product::find($id);
        return redirect()->route('products.index')->with('product',$product)->with('accion', 'editar');
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
        //Actualizar
        $product = Product::find($id); //select * from products where id.producto = $id

        $product->id_brand = $request->get('id_brand');
        $product->name = $request->get('name');
        $product->description = $request->get('description');
        $product->price = $request->get('price');
        $product->stock = $request->get('stock');
        //imagen pendiente
        /*if($request->hasFile['image']){
            $imagen = $request->file('image');
            $nombre = $imagen->getClientOriginalName();
            $formato = $imagen->getClientOriginalExtension();
            $imagen->move('images/products', $nombre);
            $product->descripcion = $nombre; // no muy seguro
        }*/
        //$product->image = $request->file('image');
        $product->image = $request->input('image');
        $product->save(); //updtae

        return redirect()->route('products.index')->with('estado','actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Eliminar
        $product = Product::find($id);
        //imagen pendiente
        //File::delete('images/products/',$product->descripcion); // no muy seguro
        $product->delete(); //delete from product where id.productos = $id

        return redirect()->route('products.index')->with('estado','eliminado');

    }
}
