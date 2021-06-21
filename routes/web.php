<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AutenticacionController;




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
Route::view('/products', 'administrador.products.products');
Route::view('/login', 'login.login');
Route::view('/registro', 'login.registro');
Route::view('/hombres', 'principal.hombres');
Route::view('/mujeres', 'principal.mujeres');
Route::view('/producto', 'principal.producto');
Route::view('/producto/carrito', 'cliente.carrito');

Route::view('/administracion', 'cliente.carrito');
Route::view('/administracion/prodcutos', 'administrador.products.products');

Route::view('/administracion/brands', 'administrador.products.products');

Route::view('/administracion/ordenes', 'administrador.products.products');

Route::view('/administracion/categories', 'administrador.categories.categories');
Route::view('/administracion/categories/agregar', 'administrador.categories.crud.modal_add');
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

Route::get('/producto', function(){
    return view('principal.producto');
});

Route::get('/carrito', function(){
    return view('cliente.carrito');
});
/*
Route::get('/administrador', function (){
    return view('administrador.base.master');
});
*/
Route::get('/administrador', function (){
    return view('administrador.base.tipo_administrar');
});

//Product 1
/*
Route::get('/products', function (){
    return view('administrador.products.index');
});

Route::get('/prodcut/create', function (){
    return view('administrador.products.create');
});
*/


/**
 * Controlador login
 */

//Route::resource('/login', AutenticacionController::class);
Route::get('/login', [AutenticacionController::class,'show_login'])->name('login');
Route::post('/log_in', [AutenticacionController::class,'login']);
Route::get('/logout', [AutenticacionController::class,'logout']);

//Controlador de Product 2
Route::resource('/products', ProductController::class);

//controlador de User
Route::resource('/users', UserController::class);
Route::get('users/perfil/{index}', [UserController::class,'index_one']);

/**
 * Controlador de Brand
 */
Route::resource('/brands',BrandController::class);

/**
 * Controlador de Category
 */
Route::resource('/categories',CategoryController::class);

Route::get('/muestra_user', function(){
    return view('cliente.users.index');
});

