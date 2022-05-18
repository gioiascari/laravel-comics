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
    return view('home');
    return '<p>Ciao Larvarel</p>';
});
Route::get('/partials.comics', function () {
    return view('partials.comics', 'title');
   
});

Route::get('/contatti', function () {
    $data = [
        [
            "nome"=>"Gioia",
            "Cognome"=>"Lol"
            
        ],
        [
            "nome"=>"Virginia",
            "Cognome"=>"olo"
            
        ],
    ];
    $pippo = 'LOL';
    return view('contatti', ["personale"=>$data, "frase" => $pippo]);
    // return '<p>Contatti</p>';
});
