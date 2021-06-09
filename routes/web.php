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

    $comics_array = config('comics');

   $data = [
      'comics' => $comics_array
   ];

    //dd($data);

    return view('homepage', $data);

})->name('homepage');


Route::get('/product/{id}', function ($id) {

   $comics_array = config('comics');

   //dd($comics_array);

   $product = [];

   

    foreach ($comics_array as $item) {
        
        if( $item['id'] == $id ){
            $product = $item;
        }

    }

    //dd($product);

    return view('product',);

})->name('product');
