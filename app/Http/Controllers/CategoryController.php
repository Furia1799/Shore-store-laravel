<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();

        if(request()->ajax() or request()->expectsJson()){
            return DataTables::of($categories)
                ->addColumn('editar', function($category){
                    $route = route('categories.edit',['category' => $category->id]);
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-warning'>
                                    <i id='pencil' class='bi bi-pencil-fill'></i>
                                </button>
                            </a>";})
                ->addColumn('eliminar', function($category) {
                    $route = route('categories.destroy',['category' => $category->id]);
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-danger'>
                                    <i id='tacha' class='bi bi-x'></i>
                                </button>
                            </a>";})
                ->rawColumns(["editar","eliminar"])
                ->make();
        }

        return view('administrador.categories.index')->with('categories',$categories);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect()->route('categories.index')->with('accion','crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $categories->save();

        return redirect()->route('categories.index')->with('estado','Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = Category::find($id);
        return redirect()->route('categories.index')->with('category', $category)->with('accion','eliminar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return redirect()->route('categories.index')->with('category', $category)->with('accion','editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = Category::find($id);
        $category->name = $request->get('name');
        $category->save();

        return redirect()->route('categories.index')->with('estado', 'Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()->route('categories.index')->with('estado','Eliminado');
    }
}
