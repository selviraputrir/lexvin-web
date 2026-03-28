<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Models\Pos;
use App\Models\Testimonial;
use App\Http\Controllers\ContactFormController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;

/*
|--------------------------------------------------------------------------
| 1. HALAMAN DEPAN (PUBLIC)
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    $berita_terbaru = Pos::orderBy('id', 'desc')->take(4)->get();
    $testimonials = Testimonial::orderBy('id', 'desc')->get();
    return view('home', compact('berita_terbaru', 'testimonials'));
});

Route::get('/artikel', function () {
    $semua_pos = Pos::orderBy('id', 'desc')->get();
    return view('detail.artikel', compact('semua_pos'));
})->name('detail.artikel');

Route::get('/artikel/{id}', function ($id) {
    $pos = Pos::findOrFail($id);
    return view('detail.show', compact('pos'));
})->name('artikel.show');

Route::get('/detail/legal-consultant', function () { return view('detail.legalconsultant'); })->name('detail.legalconsultant');
Route::get('/detail/Dispute-Resolution', function () { return view('detail.DisputeResolution'); })->name('detail.DisputeResolution');
Route::get('/detail/corporate-actions', function () { return view('detail.corporateactions'); })->name('detail.corporateactions');

Route::get('/hubungi-kami', [ContactFormController::class, 'create'])->name('contact.create');
Route::post('/hubungi-kami', [ContactFormController::class, 'store'])->name('contact.store');
Route::post('/contact', [ContactController::class, 'store'])->name('contact');

/*
|--------------------------------------------------------------------------
| 2. LOGIN ADMIN
|--------------------------------------------------------------------------
*/

Route::middleware('guest')->group(function () {
    Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    Route::post('/admin/login', [AdminAuthController::class, 'login'])->name('admin.login.submit');
});

/*
|--------------------------------------------------------------------------
| 3. AREA ADMIN (WAJIB LOGIN) - SATU GRUP SAJA
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->prefix('admin')->group(function () {

    // Dashboard & Logout
    Route::get('/', function () { return redirect()->route('admin.dashboard'); });
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::post('/logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

    // Manajemen Pesan Masuk
    Route::get('/messages', [DashboardController::class, 'index'])->name('admin.messages.index');
    Route::delete('/messages/{id}', [DashboardController::class, 'destroy'])->name('admin.message.destroy');
    Route::patch('/messages/{id}/read', [DashboardController::class, 'read'])->name('admin.message.read');

    // FITUR POS (BLOG/NEWS)
    Route::get('/pos', function () {
        $semua_pos = Pos::orderBy('id', 'desc')->get();
        return view('admin.pos.index', compact('semua_pos'));
    })->name('admin.pos.index');

    Route::get('/pos/create', function () { return view('admin.pos.create'); })->name('admin.pos.create');

    Route::post('/pos', function (Request $request) {
        $nama_foto = null;
        if ($request->hasFile('foto')) {
            $nama_foto = time() . '.' . $request->foto->extension();
            $request->foto->move(public_path('uploads'), $nama_foto);
        }
        Pos::create([
            'judul' => $request->judul,
            'isi_pos' => $request->isi_pos,
            'foto' => $nama_foto
        ]);
        return redirect()->route('admin.pos.index');
    })->name('admin.pos.store');

    // FITUR TESTIMONIAL
    Route::get('/testimonial', function () {
        $testimonials = \App\Models\Testimonial::orderBy('id', 'desc')->get();
        return view('admin.testimonial.index', compact('testimonials'));
    })->name('admin.testimonial.index');

    Route::get('/testimonial/create', function () {
        return view('admin.testimonial.create');
    })->name('admin.testimonial.create');

    Route::post('/testimonial', function (Request $request) {
        $request->validate(['nama' => 'required', 'pesan' => 'required']);
        Testimonial::create([
            'nama' => $request->nama,
            'jabatan' => $request->jabatan,
            'pesan' => $request->pesan,
        ]);
        return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil ditambah!');
    })->name('admin.testimonial.store');

  Route::get('/testimonial/hapus/{id}', function ($id) {
    \App\Models\Testimonial::findOrFail($id)->delete();
    return redirect()->route('admin.testimonial.index');
})->name('admin.testimonial.destroy');

Route::get('/testimonial/edit/{id}', function ($id) {
    $testi = \App\Models\Testimonial::findOrFail($id);
    return view('admin.testimonial.edit', compact('testi'));
})->name('admin.testimonial.edit');

Route::post('/testimonial/update/{id}', function (Request $request, $id) {
    $testi = \App\Models\Testimonial::findOrFail($id);
    $testi->update([
        'nama' => $request->nama,
        'jabatan' => $request->jabatan,
        'pesan' => $request->pesan,
    ]);
    return redirect()->route('admin.testimonial.index')->with('success', 'Testimonial berhasil diupdate!');
})->name('admin.testimonial.update');
}); 
