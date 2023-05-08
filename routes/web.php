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

// rotta della homepage
Route::get('/', function () {
    // possiamo passare delle variabili alle nostre view

    // primo metodo per passare delle variabili alla view: array associativo
    $nomi = [
        'Pippo',
        'Pluto',
        'Paperino',
        'Topolino'
    ];

    $controllo = true;

    return view('home', compact('nomi', 'controllo'));
});


Route::get('/christian', function() {

    $nomi = ['Pinco', "pallino"];

    $controllo = false;
    
    // secondo metodo: variabili
    $nome = "Christian";
    $cognome = "Arca";

    // nella chiamata della view poi dobbiamo utilizzare la funzione compact() e inserirci come stringa i nomi delle variabili
    return view('home', compact('nome', 'cognome', "nomi", "controllo"));
});


Route::get('/prova', function () {
    return view('prova');
});

Route::get('/home', function() {
    return view("home");
});



Route::get('/edoardo', function() {

    $nome = "Edoardo";

    return view('edo', compact("nome"));
});