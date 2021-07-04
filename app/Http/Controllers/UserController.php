<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Cart;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //$user = User::find($id)->get();
       return view('cliente.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return redirect('/novedades')->with('accion','crear');
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
        $users->password = Hash::make($request->get('password'));
        $users->role = 'Cliente';
        //$users->role = 'Admin';

        $cart = new Cart();
        $cart->save();

        $users->cart_id = $cart->id;

        $users->save();

        //logearse al mismo tiempo de agregar usuario

        return redirect('/login');
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
        return redirect()->route('users.index')->with('user',$user)->with('accion', 'eliminar');
        //return view('cliente.users.index')->with('user',$user);
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
        return redirect()->route('users.index')->with('user',$user)->with('accion','editar');
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
        $user->password = Hash::make($request->get('password'));

        $user->save();
        return redirect()->route('users.index')->with('user', $user)->with('estado','Actualizado');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();

        return view('index.php');
    }

    //mostrar un solo usuario
    public function index_one($id)
    {
        // mostrar modal
        $user = User::find($id);
        return redirect()->route('users.index')->with('user',$user);
    }

}
