<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormularioController;




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
    return view('index');
})->name('home');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/single', function () {
    return view('single');
})->name('single');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Verifica que tienes algo similar a esto en tus rutas para archivos estáticos:
Route::get('assets/{path}', function ($path) {
        return response()->file(public_path('assets/' . $path));
    });
    

Route::get('/formulario', [FormularioController::class, 'mostrarFormulario']);
Route::post('/formulario', [FormularioController::class, 'procesarFormulario']);


    





