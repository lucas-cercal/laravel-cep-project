<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnderecoController;

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

Route::get('/', [EnderecoController::class, 'index']) -> name('home');
Route::get('/adicionar', [EnderecoController::class, 'adicionar']) -> name('adicionar');
Route::get('/buscar', [EnderecoController::class, 'buscar']) -> name('buscar');
Route::post('/salvar', [EnderecoController::class, 'salvar']) -> name('salvar');



