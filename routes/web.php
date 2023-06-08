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

Route::get('/', function () {
    /*     Nos muestra la paguina principal de Laravel 
    nos permite verificar si esta bien creado el proyecto 
    en el que vamos a trabajar */
    return view('principal');
    //  return "Bienvenido a la Paguina Principal";
});


Route::get('/about', function () {
    return view('about');
});
