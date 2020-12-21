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

// HOME

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
})->name('home');

// CHI SIAMO

Route::get('/Chi-siamo', function () {
    $data = [
        'mission'=> 'La nostra mission è fornire tutto il necessario per la casa, accontentare i nostri clienti in ogni piccola richiesta'

    ];
    return view('chi-siamo', $data);
})->name('who');

// COSA FACCIAMO

Route::get('/cosa-facciamo', function () {
    $data = [
        'what'=> 'Cosa Facciamo',
        'testo' => 'Con diversi negozi in tutta italia ci occupiamo di piccoli accessori e oggetti per la casa, disponibili sia nei nostri negozi fisici, che online'
    ];
    return view('cosa-facciamo',$data);
})->name('do');

// CONTATTI

Route::get('/contatti', function () {
    $data = [
        'email'=>'casa@gmail.com',
        'telefono'=> '09846363738',
    ];
    return view('contatti',$data);
})->name('contacts');
