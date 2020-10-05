<?php

use App\Http\Controllers\UsuarioController;
use Illuminate\Support\Facades\Auth;
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
    return view('welcome');
});

Route::get('/professores', function () {
    return view('professores-lista');
});

Route::get('/login', [UsuarioController::class, 'index']);

Route::post('/logar', [UsuarioController::class, 'login']);

Route::get('/cadastro', [UsuarioController::class, 'cadastro']);

Route::post('/registrar', [UsuarioController::class, 'store']);

Route::middleware(['auth:sanctum', 'verified'])->get('/area-restrita', function () {
    return view('index');
})->name('area-restrita');

Route::middleware(['auth:sanctum', 'verified'])->get('/logout',  [UsuarioController::class, 'logout']);
