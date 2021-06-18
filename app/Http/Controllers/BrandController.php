<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;
use Yajra\DataTables\Contracts\DataTable;
use Yajra\DataTables\Facades\DataTables;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::orderByDesc('id');

        if(request()->ajax() or request()->expectsJson()){
            return DataTables::of($brands)
                ->addColumn('editar', function($brand){
                    $route = route('brands.edit',['brand' => $brand->id]);
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-warning'>
                                    <i id='pencil' class='bi bi-pencil-fill'></i>
                                </button>
                            </a>";})
                ->addColumn('eliminar', function($brand) {
                    $route = route('brands.destroy',['brand' => $brand->id]);
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-danger'>
                                    <i id='tacha' class='bi bi-x'></i>
                                </button>
                            </a>";})
                ->rawColumns(["editar","eliminar"])
                ->make();
        }

        return view('administrador.brands.index')->with('brands', $brands);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('brands.index')->with('accion','crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $brands = new Brand();
        $brands->name = $request->get('name');
        $brands->save();

        return redirect()->route('brands.index')->with('estado','Creado');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $brand = Brand::find($id);
        return redirect()->route('brands.index')->with('brand',$brand)->with('accion','eliminar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brand = Brand::find($id);
        return redirect()->route('brands.index')->with('brand',$brand)->with('accion','editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $brand = Brand::find($id);
        $brand->name = $request->get('name');
        $brand->save();

        return redirect()->route('brands.index')->with('estado','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brand = Brand::find($id);
        $brand->delete();

        return redirect()->route('brands.index')->with('estado','Eliminado');
    }
}
