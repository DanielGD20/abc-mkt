<?php

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
    return view('welcome');
});

Route::get('artes', function () {
    $valores = App\productos::where('categoria', 'Artes')->get();
    return view('artes')->with('valores', $valores);
});

Route::get('nosotros', function () {
    return view('nosotros');
});

Route::get('eventos', function () {
    return view('eventos');
});

Route::get('carrito', function () {
    return view('carrito');
});

Route::get('subtotal', function () {
    return view('subtotal');
});
