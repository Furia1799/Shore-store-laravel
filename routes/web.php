<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
/*
Route::get('/', function () {
    return view('welcome');
});*/

//RUTAS CON VIEW
/*
Route::view('/', 'index');
Route::view('/administrar_productos', 'administrador.administrar_productos.administrar_productos');
Route::view('/login', 'login.login');
Route::view('/registro', 'login.registro');
Route::view('/hombres', 'principal.hombres');
Route::view('/mujeres', 'principal.mujeres');
Route::view('/producto', 'principal.producto');
Route::view('/producto/carrito', 'cliente.carrito');

Route::view('/administracion', 'cliente.carrito');
Route::view('/administracion/prodcutos', 'administrador.administrar_productos.administrar_productos');

Route::view('/administracion/marcas', 'administrador.administrar_productos.administrar_productos');

Route::view('/administracion/ordenes', 'administrador.administrar_productos.administrar_productos');

Route::view('/administracion/categorias', 'administrador.administrar_categorias.administrar_categorias');
Route::view('/administracion/categorias/agregar', 'administrador.administrar_categorias.crud.modal_add');
*/

//RUTAS CON FUNCION
Route::get('/', function(){
    return view('index');
});

Route::get('/master', function(){
    if(View::exists('base.master')){
        return view('base.master');
    }else{
        return "la ruta del arhivo no corresponde o el archivp no existe";
    }
});

Route::get('/login', function(){
    return view('login.login');
});

Route::get('/registro', function(){
    return view('login.registro');
});

Route::get('/novedades', function(){
    return view('base.novedades');
});


Route::get('/hombres', function(){
    return view('principal.hombres');
});

Route::get('/mujeres', function(){
    return view('principal.mujeres');
});

Route::get('/carrito', function(){
    return view('cliente.carrito');
});


