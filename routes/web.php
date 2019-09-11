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

use Illuminate\Support\Facades\App;

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

Route::get('shop/{categoria}', function ($categoria) {
    $url = '';
    $header = $categoria;

    if ($categoria == 'Articulos-Promocionales') {
        $productos = App\productos::where('categoria', $categoria)->get();
        $combos = App\combos::all();
        return view('shop')->with('url', $url)->with('header', $header)->with('productos', $productos)->with('combos', $combos);
    } else {
        $productos = App\productos::where('categoria', $categoria)->get();
        return view('shop')->with('url', $url)->with('header', $header)->with('productos', $productos);
    }
});

Route::get('shop', function () {
    $url = '';
    $header = 'Productos';
    $productos = App\productos::inRandomOrder()->take(6)->get();
    return view('shop')->with('url', $url)->with('header', $header)->with('productos', $productos);
});

Route::get('product-detail/{id}/{nombre}', function ($id, $nombre) {
    $url = '';
    $header = $nombre;
    $producto = App\productos::where('id', $id)->get();
    return view('product-detail')->with('url', $url)->with('header', $header)->with('producto', $producto);
});

Route::get('order-complete', function () {
    $url = '';
    $header = 'Pedido';
    return view('order-complete')->with('url', $url)->with('header', $header);
});

Route::get('contact', function () {
    $url = '';
    $header = 'Contacto';
    return view('contact')->with('url', $url)->with('header', $header);
});

Route::get('checkout', function () {
    $url = '';
    $header = 'Pedido';
    return view('checkout')->with('url', $url)->with('header', $header);
});

Route::get('cart', function () {
    $url = '';
    $header = 'Pedido';
    return view('cart')->with('url', $url)->with('header', $header);
});


Route::get('about', function () {
    $url = '';
    $header = 'Sobre nosotros';
    return view('about')->with('url', $url)->with('header', $header);
});

function randomProductos($array, $numeroObjetos)
{
    $arreglo = (array) $array;
    $resultado = array();
    shuffle($array);
    for ($i = 0; $i < $numeroObjetos; $i++) {
        array_push($resultado, $arreglo[$i]);
    }
    return $resultado;
}
