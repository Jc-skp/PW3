<?php

use App\Http\Controllers\OperacaoContasController;
use App\Http\Controllers\NomeController;
use App\Http\Controllers\IdadeController;

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

Route::get('/nome/{name}',[NomeController::class, "name"])
->where('name', '[A-Z][a-z]{2,}');



Route::get('/soma/{number1}/{number2}',[OperacaoContasController::class, "soma"]); 
Route::get('/subtracao/{number1}/{number2}',[OperacaoContasController::class, "subtracao"]); 
Route::get('/multiplicacao/{number1}/{number2}',[OperacaoContasController::class, "multiplicacao"]); 
Route::get('/divisao/{number1}/{number2}',[OperacaoContasController::class, "divisao"]); 
Route::get('/todas/{number1}/{number2}',[OperacaoContasController::class, "todas"])
->where('number1', '[0-9]+' )
->where('number2', '[0-9]+' ); 

Route::get('/idade/{ano}/{mes}/{dia}', [IdadeController::class, 'idade'])
->where('ano', '[0-9]{4}')
->where('mes', '[0-9]{1,2}?')
->where('dia', '[0-9]{1,2}?');
// 
