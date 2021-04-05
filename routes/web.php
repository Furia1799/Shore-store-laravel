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
Route::view('/', 'index');
Route::view('/login', 'php.login');
Route::view('/hombres', 'php.hombres');
Route::view('/mujeres', 'php.mujeres');
Route::view('/registro', 'php.registro');
Route::view('/producto', 'php.producto');
Route::view('/administrar_productos', 'php.administrar_productos.administrar_productos');

