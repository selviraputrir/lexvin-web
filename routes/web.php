<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\HomeController; 
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\LayananController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

// --- HALAMAN PUBLIK (Bisa diakses siapa saja) ---
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail');


Route::get('/hubungi-kami', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('/hubungi-kami', [ContactFormController::class, 'store'])->name('contact.store');


// --- HALAMAN AUTH (Hanya untuk yang BELUM login) ---
Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});


// --- HALAMAN ADMIN (Hanya untuk yang SUDAH login) ---
// Kita tambahkan middleware 'auth' di sini untuk keamanan
Route::middleware('auth')->prefix('admin')->group(function () {
    
    // Redirect /admin ke /admin/dashboard atau /admin/messages
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    // Dashboard Utama (Bisa diarahkan ke index pesan atau halaman dashboard terpisah)
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    // Manajemen Pesan
    Route::get('/messages', [DashboardController::class, 'index'])->name('admin.messages.index'); 
    Route::delete('/messages/{id}', [DashboardController::class, 'destroy'])->name('admin.message.destroy');
    Route::patch('/messages/{id}/read', [DashboardController::class, 'markAsRead'])->name('admin.message.read');

    // Logout
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

});

