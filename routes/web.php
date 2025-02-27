<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/',[FrontController::class,'welcome']);


Route::get('/home_page',[FrontController::class,'homepage']);


Route::get('/lista_articoli',[FrontController::class,'lista_articoli']);


//Rotta parametrica qunado clicclo sul link delle card mi porta ai dettagli dell'articolo
Route::get('/dettagli/{articlo}',[FrontController::class,'article'] );