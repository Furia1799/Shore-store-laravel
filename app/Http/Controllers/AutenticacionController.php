<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

use Illuminate\Support\Facades\Hash;



class AutenticacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

    public function show_login(){
        return view('login.login');
    }

    public function login(Request $request){

        /*//$password = Hash::make($request->get('password'));
        $credentials = request()->only('email', 'password');

        if(Auth::attempt($credentials)){
            return 'logeado';

        }
        return 'No logeado';*/

        /*$user = User::where('email', $request->email)->first();

        if($user){
            if(Hash::check($request->password, $user->password)) {
                Auth::login($user);
                //request()->session()->regenerate();//no robar session
               //Auth::user()
                //$id = Auth::user()->id;
                //return redirect('/users/perfil/'.$id);
                return redirect('/users');
            }else{
                return 'contraseña incorrecta :(';
            }
        }else{
            return redirect('/login')->with('mensaje','Correo no encontrado :(');
        }*/

        //return request();


       /* $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = User::where('email', $request->email)->first();
            Auth::login($user);
            $request->session()->regenerate();

            return redirect('/users');

        }

        return Redirect('/login')->with('mensaje', 'No autentificado');*/

        $data = request()->only('email', 'password');

        $credentials = ['email' => $data['email'], 'password' => $data['password']];

        if(Auth::attempt($credentials))
        {
            return Redirect('/novedades');
            //return Redirect('/');
        }

        return redirect('/login')->with('mensaje','Error al iniciar session');

    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/novedades');
    }


}
