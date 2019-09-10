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

Route::get('productos/{producto}', function ($producto) {
    // $valores = App\productos::where('categoria', $producto)->get();
    // return view('productos')->with('valores', $valores);

    if ($producto != 'Articulos-Promocionales') {
        $valores = App\productos::where('categoria', $producto)->get();
        return view('productos')->with('valores', $valores);
    } else {
        $valores = App\productos::where('categoria', $producto)->get();
        $combo = App\combos::all();
        $arregloArticulos = array(
            'valores' => $valores,
            'combos' => $combo
        );
        return view('productos')->with('valores', $arregloArticulos);
    }
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
