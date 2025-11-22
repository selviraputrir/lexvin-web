<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LayananController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail');

// Rute Formulir Kontak
Route::get('/hubungi-kami', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('/hubungi-kami', [ContactFormController::class, 'store'])->name('contact.store');


// --- RUTE ADMIN (TANPA PENGAMAN LOGIN) ---
// Rute ini sekarang bisa diakses siapa saja
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::delete('/admin/messages/{id}', [DashboardController::class, 'destroy'])->name('admin.message.destroy');
Route::patch('/admin/messages/{id}/read', [DashboardController::class, 'markAsRead'])->name('admin.message.read');

