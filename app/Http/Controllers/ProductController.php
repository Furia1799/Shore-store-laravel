<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Brand;
use App\Models\Category;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ProductsRequest;

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

        $products = Product::with('brand','categories')->orderByDesc('id');
        //$products = Product::with('brand','categories')->get();//relacion con brand

        //dd($products);
        //$products = Product::query();
        /*foreach($products as $product){
            //dd($product->brand->name, $product->categories->first()->name);
            //dd($product->brand->name, $product->categories[0]->name);
        }*/

        if(request()->ajax() or request()->expectsJson()){ //verifico que venga en ajax o json
            return DataTables::of($products)
                ->addColumn('editar', function($product) {
                    $route = route('products.edit',['product' => $product->id]); //añadir la ruta
                    //return "<a href='{$route}'>Editar</a>";
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-warning'>
                                    <i id='pencil' class='bi bi-pencil-fill'></i>
                                </button>
                            </a>";
                })
                ->addColumn('eliminar', function($product) {
                    $route = route('products.destroy',['product' => $product->id]);
                    //return "<a href='{$route}'>Eliminar</a>";
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-danger'>
                                    <i id='tacha' class='bi bi-x'></i>
                                </button>
                            </a>";
                })
                ->editColumn('price', function($product){
                    return "$" . $product->price . " MXN";
                })
                ->editColumn('image', function( $product) {
                    //$ruta_image = route('public/',$product->image);

                    return "<img src='{$product->image}' width='100px' height='100px'>"; //edite
                })
                ->rawColumns(["editar", "eliminar", "image"]) //renderizar
                ->make();

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
        //$brands = $this->BrandsAll();
        $brands = Brand::all();
        $categories = Category::all();

        return redirect()->route('products.index')
            ->with('brands',$brands)
            ->with('categories',$categories)
            ->with('accion','crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProductsRequest $request)
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
        $imagen->move('images/products', $nombre);
        $products->image = $request->file('image');*/
        $imagen = $request->file('image');
        $nombre_image = time(). '_' . $imagen->getClientOriginalName();
        $url_image = 'images/products';
        $destino = public_path($url_image);
        $imagen->move($destino,$nombre_image);
        $products->image = $url_image. '/' .$nombre_image; //GUARDAR URL
        $products->save();
        //dd($products);

        //guardar en tabla pivot
        $category_id = $request->get('category_id');
        $products->attachCategories($category_id);


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
        //$product = Product::find($id);
        /*$product = Product::join('brand', 'product.id_brand', '=', 'brand.id')
        ->where('product.id', $id)->get();*/
        $product = Product::find($id);
        $brand_name = $product->brand->name; //relacion de join con eloquet


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

        //$brands = $this->brandsAll();
        $brands = Brand::all();

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
        }
        //$product->image = $request->file('image');
        $product->image = $request->input('image');*/

        $imagen = $request->file('image');
        $nombre_image = time(). '_' . $imagen->getClientOriginalName();
        $url_image = 'images/products';
        $destino = public_path($url_image);
        $imagen->move($destino,$nombre_image);
        $product->image = $url_image. '/' .$nombre_image;

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

   /* //obtener todas las brands
    public function brandsAll(){
        $brands = Brand::all();

        return $brands;
    }*/

    //obtener nombre de la marca
    /*public function BrandName($id){
        $brand_name = '';

        $brand_name = $brand_name = Product::select('brands.name as brand_name')
            ->join('brands','brands.id', '=', 'products.id_brand')
            ->where('products.id',$id)->get();

        return $brand_name;
    }*/
}
