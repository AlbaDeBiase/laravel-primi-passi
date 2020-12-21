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
    $data = [
        'nome_negozio'=>'Tutto per la casa',
        'descrizione'=>'Rifornimenti per la casa',
        'lista_accessori'=>[
            'piatti',
            'bicchieri',
            'tovaglioli',
            'posate'
        ],
    ];
    return view('home',$data);
});

Route::get('/cosa-facciamo', function () {
    return view('do');
});

Route::get('/contatti', function () {
    return view('contacts');
});
