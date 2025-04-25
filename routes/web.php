<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/series', [SeriesController::class, 'index']);
Route::get('/series/criar', [SeriesController::class, 'create']);
Route::post('/series/salvar', [SeriesController::class, 'store']);

Route::get('/ola', function () {
    echo "Today is " . date("Y/m/d") . "<br>";
    echo "Today is " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l") . "<br>";
    echo "The time is " . date("h:i:sa") . "<br>";
});


Route::get('/saymon', function () {
    echo '<h1>Olá, meu nome é: Saymon Lee Furtado Rodrigues</h1>';
    echo "A hora atual é: " . date("h:i:sa") . "<br>";
    echo '<h1>O nome da minha esposa é: Mirla 💓</h1>';
});

Route::get('/anything', function () {
    echo 'Qualquer coisa';
});