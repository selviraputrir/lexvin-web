<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\PageController; 
use App\Http\Controllers\LayananController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
  
    return view('home'); 
});



Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail');
