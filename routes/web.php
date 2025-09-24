<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; // <-- Import HomeController

// Route ini sekarang akan memanggil method 'index' di HomeController
Route::get('/', [HomeController::class, 'index']);