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
    $ofertas = [
        ['nombre' => 'Vestido casual', 'precio' => 30.00, 'descuento' => 25, 'icono' => '👗'],
        ['nombre' => 'Jean clásico',   'precio' => 30.00, 'descuento' => 20, 'icono' => '👖'],
        ['nombre' => 'Camisa formal',  'precio' => 25.00, 'descuento' => 30, 'icono' => '👔'],
        ['nombre' => 'Bolso de mano',  'precio' => 30.00, 'descuento' => 15, 'icono' => '👜'],
    ];

    return view('principal', ['ofertas' => $ofertas]);
})->name('principal');

Route::get('/about', function () {
    return view('about');
})->name('about');
