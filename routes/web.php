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
    return view('front.home');
});

Route::get('/about', function () {
    return view('front.about');
});

Route::get('/contact', function () {
    return view('front.contact');
});

Route::get('/shop', function () {
    return view('front.shop');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home', 'HomeController@contact')->name('contactus');

Route::group(['prefix' => 'admin', 'mmiddleware' => ['auth', 'admin']], function () {
    Route::get('/', function () {
        return view('admin.index');
    })->name('admin.index');

    Route::resource('product', 'ProductsController');
});
