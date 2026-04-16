<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\ProdutoController;

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth')->group(function () {

    Route::resource('categorias', CategoriaController::class);
    Route::resource('produtos', ProdutoController::class);

    Route::get('/dashboard', function(){ 
        return view('dashboard'); 
    });
    
    Route::post('/logout', [AuthController::class, 'logout']);
});


