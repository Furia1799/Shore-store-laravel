<?php

namespace App\Http\Controllers;

use App\Models\Direction;
use App\Models\User;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Http\Requests\ProductsRequest;
use Auth;

class DirectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if($user = Auth::user()){
            $user_id = $user->id;
        }
        $directions = Direction::where('user_id', $user_id)->get();
        //dd($directions);

        if(request()->ajax() or request()->expectsJson()){
            return DataTables::of($directions)
                ->addColumn('editar', function($direction) {
                    $route = route('directions.edit',['direction' => $direction->id]); //añadir la ruta
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-warning'>
                                    <i id='pencil' class='bi bi-pencil-fill'></i>
                                </button>
                            </a>";
                })
                ->addColumn('eliminar', function($direction) {
                    $route = route('directions.destroy',['direction' => $direction->id]);
                    //return "<a href='{$route}'>Eliminar</a>";
                    return "<a href='{$route}'>
                                <button type='button' class='btn btn-danger'>
                                    <i id='tacha' class='bi bi-x'></i>
                                </button>
                            </a>";
                })
                ->rawColumns(["editar", "eliminar"]) //renderizar
                ->make();
        }

        return view('cliente.directions.index')->with('directions', $directions);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $user = User::find(1);

        return redirect()->route('directions.index')
            ->with('accion','crear')
            ->with('user', $user);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $direction = new Direction();
        $direction->user_id = $request->get('user_id');
        $direction->country = $request->get('country');
        $direction->provincia = $request->get('provincia');
        $direction->city = $request->get('city');
        $direction->address = $request->get('address');
        $direction->save();

        return redirect()->route('directions.index')->with('estado','Creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $direction = Direction::find($id);

        return redirect()->route('directions.index')
            ->with('direction', $direction)
            ->with('accion', 'eliminar');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $direction = Direction::find($id);

        return redirect()->route('directions.index')
            ->with('direction',$direction)
            ->with('accion', 'editar');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $direction = Direction::find($id);

        $direction->country = $request->get('country');
        $direction->provincia = $request->get('provincia');
        $direction->city = $request->get('city');
        $direction->address = $request->get('address');
        $direction->save();

        return redirect()->route('directions.index')
            ->with('estado','Actualizado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Direction  $direction
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $direction = Direction::find($id);

        $direction->delete();

        return redirect()->route('directions.index')
            ->with('estado','Eliminado');
    }
}
