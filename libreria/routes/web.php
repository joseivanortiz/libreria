<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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


Route::get('/', [App\Http\Controllers\ColaboradorController::class, 'index']);

 Route::get('/index', [App\Http\Controllers\ColaboradorController::class, 'index']);

Route::get('/servi', [App\Http\Controllers\ServiController::class, 'index']);

Route::get('/even', [App\Http\Controllers\EvenController::class, 'index']);

Route::get('/nosotros', [App\Http\Controllers\PubliController::class, 'index']);



Route::get('/login', function () {
    return view('auth.login');
});

/* Route::get('/index', 'ColaboradoreController@index');
Route::get('/index', function () {
    return view('welcome');
}); */




Route::get('/contact', function () {
    return view('contact');
});




Route::get('welcome',[App\Http\Controllers\ColaboradorController::class, 'index'])->name('home'); 


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('libros',App\Http\Controllers\LibroController::class);

Route::resource('colaboradores',App\Http\Controllers\ColaboradoreController::class)->middleware('auth');

Route::resource('publicacions',App\Http\Controllers\PublicacionController::class)->middleware('auth');

Route::resource('servicios',App\Http\Controllers\ServicioController::class)->middleware('auth');

Route::resource('eventos',App\Http\Controllers\EventoController::class)->middleware('auth');




