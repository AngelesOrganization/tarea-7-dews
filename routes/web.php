<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorAutores;
use App\Http\Controllers\ControladorLibros;

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

Route::post('/autores', [ControladorAutores::class, 'store']);
Route::get('/autores', [ControladorAutores::class, 'index']);
Route::get('/autores/{id}', [ControladorAutores::class, 'show']);
Route::delete('/autores/{id}', [ControladorAutores::class, 'destroy']);

Route::post('/libros', [ControladorLibros::class, 'store']);
Route::get('/libros', [ControladorLibros::class, 'index']);
Route::get('/libros/{id}', [ControladorLibros::class, 'show']);
Route::delete('/libros/{id}', [ControladorLibros::class, 'destroy']);
