<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        //
       // $user = User::find($id);
       // return view('cliente.users.index')->with('user',$user);
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
        //guardar bd
        $users = new User();
        $users->name = $request->get('name');
        $users->last_name = $request->get('last_name');
        $users->email = $request->get('email');
        $users->password = $request->get('password');
        $users->rol = 'Cliente';

        $users->save();

       return redirect()->route('users.index')->with('estado','creado');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        //return redirect()->route('users.index')->with('user',$user)->with('id',$id);
        return view('cliente.users.index')->with('user',$user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mostrar modal de editar
        $user = User::find($id);
        return redirect()->route('users.index')->with('users',$user)->with('accion','editar');
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
        $user = User::find($id);

        $user->name = $request->get('name');
        $user->last_name = $request->get('last_name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');

        $user->save();
        return redirect()->route('users.index')->with('estado','actualizado');

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

    //mostrar un solo usuario
    public function index_one($id)
    {
        // mostrar modal
        $product = Product::find($id);
        return redirect()->route('products.index')->with('product',$product)->with('accion', 'editar');
    }

}
