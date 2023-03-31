<?php

use App\Http\Controllers\OperacaoContas;

use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/soma/{number1}/{number2}',[OperacaoContas::class, "soma"]); 
Route::get('/subtracao/{number1}/{number2}',[OperacaoContas::class, "subtracao"]); 
Route::get('/multiplicacao/{number1}/{number2}',[OperacaoContas::class, "multiplicacao"]); 
Route::get('/divisao/{number1}/{number2}',[OperacaoContas::class, "divisao"]); 
Route::get('/todas/{number1}/{number2}',[OperacaoContas::class, "todas"]); 