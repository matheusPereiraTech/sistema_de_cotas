<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CotasControllador;
use App\Http\Controllers\CadastroControllador;
use App\resources\views\inicio;
use App\Http\Controllers\HomeController;

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
    return view('inicio');
});

Auth::routes();

// Rota cadastro de aluno
Route::resource('/alunos', CadastroControllador::class)->middleware('auth');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/inicio', [HomeController::class, 'index'])->name('inicio');
