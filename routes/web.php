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

Route::get('/',function(){

    $saluto = "Buongiorno!";
    $utente = "Ugo!";
    $stampa_paragrafo = false;
    $colori = ['giallo','rosso','blu','verde','viola'];

    return view('home', compact('saluto', 'utente', 'stampa_paragrafo', 'colori'));
})->name('home');

Route::get('/chi-siamo',function(){
    $saluto = "Buongiorno pagina chi siamo";
    $utente = "Ugo";

    $data = [
        'saluto'=>$saluto,
        'utente' => $utente
    ];

    return view('about', $data);
})->name('about');

Route::get('/contatti',function(){

    return view('contacts');
})->name('contacts');
