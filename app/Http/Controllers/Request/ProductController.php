<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$product = Product::find(1);
        //dd(route("products.edit",["product" => $product->id]));
        //Mostrar todos los productos
        //$products = Product::all(); //select * from Producto
        /*$products = Product::select('products.id','brands.id as id_brand','brands.name as brand_name','products.name'
            ,'products.description','products.price','products.stock','products.image')
            ->join('brands','brands.id', '=' ,'products.id_brand')->get();*/

        $products = Product::with('brand');
        //dd($products);
        //$products = Product::query();
        //dd($products);
        if(request()->ajax() or request()->expectsJson()){
            return DataTables::of($products)
                ->addColumn('editar', function( $product) {
                    $route = route('products.edit',['product' => $product->id]);
                    return "<a href='{$route}'>Editar</a>";
                })
                ->addColumn('eliminar', function( $product) {
                    $route = route('products.destroy',['product' => $product->id]);
                    return "<a href='{$route}'>Eliminar</a>";
                })
                ->editColumn('price', function($product){
                    return "$" . $product->price . "MXN";
                })
                ->editColumn('image', function( $product) {
                    return "<img src='https://vermutas.com/wp-content/uploads/2020/05/WINGS-Shorts-Blue-front.jpg' width='100px' height='100px'>";
                })
                ->rawColumns(["editar", "eliminar", "image"])
                ->make();

            https://vermutas.com/wp-content/uploads/2020/05/WINGS-Shorts-Blue-front.jpg
        }

        return view('administrador.products.index')->with('products', $products); //vista a mandar

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Mostrar formulario Product
        $brands = $this->BrandsAll();

        return redirect()->route('products.index')
            ->with('brands',$brands)
            ->with('accion','crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //guardar producto POST
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

        return redirect()->route('products.index')->with('estado', 'Creado'); //ir de nuevo al controlador index
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
        $brand_name = $this->brandName($id);

        return redirect()->route('products.index')->with('product',$product)
            ->with('brand_name',$brand_name)
            ->with('accion','eliminar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // mostrar modal edit
        $product = Product::find($id);

        $brands = $this->brandsAll();

        return redirect()->route('products.index')->with('product',$product)
            ->with('brands',$brands)
            ->with('accion','editar');
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

        return redirect()->route('products.index')->with('estado','Actualizado');
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

        return redirect()->route('products.index')->with('estado','Eliminado');

    }

    //obtener todas las marcas
    public function brandsAll(){
        $brands = Brand::all();

        return $brands;
    }

    //obtener nombre de la marca
    public function BrandName($id){
        $brand_name = '';

        $brand_name = $brand_name = Product::select('brands.name as brand_name')
            ->join('brands','brands.id', '=', 'products.id_brand')
            ->where('products.id',$id)->get();

        return $brand_name;
    }
}
