<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\LayananController; 

Route::get('/layanan-detail/{slug}', function ($slug) {
    return view('layanan-detail', ['kategori' => $slug]);
})->name('layanan.detail');

Route::get('partials/layanan-detail1', [LayananController::class, 'detailKonsultasi'])->name('layanan.konsultasi.hukum');
Route::get('/', [HomeController::class, 'index'])->name('home');

// Rute Formulir Kontak
Route::get('/hubungi-kami', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('/hubungi-kami', [ContactFormController::class, 'store'])->name('contact.store');


// --- RUTE ADMIN (TANPA PENGAMAN LOGIN) ---
// Rute ini sekarang bisa diakses siapa saja
Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
Route::delete('/admin/messages/{id}', [DashboardController::class, 'destroy'])->name('admin.message.destroy');
Route::patch('/admin/messages/{id}/read', [DashboardController::class, 'markAsRead'])->name('admin.message.read');

// Catatan: Rute Breeze ('/login', '/register') telah dihapus jika Anda mengikuti langkah uninstall.

