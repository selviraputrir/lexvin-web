<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\Admin\DashboardController; 
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;


Route::get('/artikel', function () { return view('detail/artikel'); });


Route::delete('/contact/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');

Route::post('/contact', [ContactController::class, 'store'])->name('contact');


Route::get('/messages', [ContactController::class, 'index'])->name('messages.index');



Route::get('/', function () {
    return view('welcome'); // atau view lain yang ingin kamu tampilkan
});
Route::get('/', [HomeController::class, 'index']);

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

   // Route untuk Legal Consultant
Route::get('/detail/legal-consultant', function () {
    return view('detail.legalconsultant');
})->name('detail.legalconsultant');

// Route untuk Corporate Legal Retainer
Route::get('/detail/Dispute-Resolution', function () {
    return view('detail.DisputeResolution');
})->name('detail.DisputeResolution');

// Route untuk Corporate Actions
Route::get('/detail/corporate-actions', function () {
    return view('detail.corporateactions');
})->name('detail.corporateactions');


Route::get('/detail/artikel', function () {
    return view('detail/artikel'); // Gunakan titik (.) sebagai pengganti slash (/)
})->name('detail.artikel');