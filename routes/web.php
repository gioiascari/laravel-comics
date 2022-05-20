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

//Route per visualizzare array di comics sulla home
Route::get('/', function () {

    $comics = config('comics');
    $navigation = config('nav');
    return view('home', ["comics" => $comics, "navigation" => $navigation]);

});




Route::get('/single/{i}', function ($i) {


    $comics = config('comics');
    $navigation = config('nav');
    return view('partials.single', ["comic" => $comics[$i], "navigation" => $navigation ]);
  });
