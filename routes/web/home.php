<?php

use Illuminate\Support\Facades\Route;


//Auth::routes();


Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/paso_2', [App\Http\Controllers\HomeController::class, 'index_paso2'])->name('paso2');

Route::post('/registro', [App\Http\Controllers\HomeController::class, 'store'])->name('home.store');
