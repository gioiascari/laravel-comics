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

    return view('home', ["comics" => $comics]);
});

//Route per visualizzare singola card di comics sulla home
Route::get('/single', function () {
    $comic = config('comics');
    return view('single', ["comic" => $comic[0]]);
});
