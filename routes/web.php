<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController; 
<<<<<<< HEAD
use App\Http\Controllers\PageController; 
use App\Http\Controllers\LayananController;


Route::get('/', [HomeController::class, 'index']);

Route::get('/', function () {
  
    return view('home'); 
});



Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail');
=======
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Admin\DashboardController; // <-- Tambahkan ini

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Di sinilah Anda dapat mendaftarkan rute web untuk aplikasi Anda. Rute-rute
| ini dimuat oleh RouteServiceProvider dan semuanya akan
| ditugaskan ke grup middleware "web". Buat sesuatu yang hebat!
|
*/

// Rute Halaman Depan
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

>>>>>>> 53b6a817acee677e75e0d8096744b89ac1ee3109
