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
    $url = 'inicio';
    return view('welcome')->with('url', $url);
});

// Route::get('productos/{producto}', function ($producto) {
//     // $valores = App\productos::where('categoria', $producto)->get();
//     // return view('productos')->with('valores', $valores);

//     if ($producto != 'Articulos-Promocionales') {
//         $valores = App\productos::where('categoria', $producto)->get();
//         return view('productos')->with('valores', $valores);
//     } else {
//         $valores = App\productos::where('categoria', $producto)->get();
//         $combo = App\combos::all();
//         $arregloArticulos = array(
//             'valores' => $valores,
//             'combos' => $combo
//         );
//         return view('productos')->with('valores', $arregloArticulos);
//     }
// });

Route::get('shop', function () {
    $url = '';
    return view('shop')->with('url', $url);
});

Route::get('product-detail', function () {
    $url = '';
    return view('product-detail')->with('url', $url);
});

Route::get('order-complete', function () {
    $url = '';
    return view('order-complete')->with('url', $url);
});

Route::get('contact', function () {
    $url = '';
    return view('contact')->with('url', $url);
});

Route::get('checkout', function () {
    $url = '';
    return view('checkout')->with('url', $url);
});

Route::get('cart', function () {
    $url = '';
    return view('cart')->with('url', $url);
});


Route::get('about', function () {
    $url = '';
    return view('about')->with('url', $url);
});
