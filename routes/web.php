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
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/layanan/{id}', [LayananController::class, 'show'])->name('layanan.detail');

// File: routes/web.php

Route::get('/layanan-lengkap', function () {
    return view('layanan-detail'); // Pastikan nanti nama file view-nya 'layanan-detail.blade.php'
})->name('services.all');

Route::get('/hubungi-kami', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('/hubungi-kami', [ContactFormController::class, 'store'])->name('contact.store');

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});

Route::middleware('auth')->prefix('admin')->group(function () {
    
    Route::get('/', function () {
        return redirect()->route('admin.dashboard');
    });

    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    
    Route::get('/messages', [DashboardController::class, 'index'])->name('admin.messages.index'); 
    Route::delete('/messages/{id}', [DashboardController::class, 'destroy'])->name('admin.message.destroy');
    Route::patch('/messages/{id}/read', [DashboardController::class, 'markAsRead'])->name('admin.message.read');

    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

});

