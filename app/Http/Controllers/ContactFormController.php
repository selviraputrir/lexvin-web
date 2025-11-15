<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\ContactMessage; // ✅ PERBAIKAN: Tambahkan baris ini

class ContactFormController extends Controller
{
    /**
     * Menampilkan halaman formulir kontak.
     * Ini adalah method GET.
     */
    public function create()
    {
        // Akan memuat file di: resources/views/pages/contact.blade.php
        return view('partials.contact');
    }

    /**
     * Memproses data yang dikirim dari formulir.
     * Ini adalah method POST.
     */
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:5', // Sesuai permintaan Anda
        ]);

        // 2. ✅ SIMPAN KE DATABASE
        // Logika 'Log::info(...)' sebelumnya diganti dengan ini:
        ContactMessage::create($validatedData);

        // 3. Redirect kembali dengan pesan sukses (masih sama)
        return redirect()->route('contact.create')
                         ->with('success', 'Pesan Anda telah terkirim! Kami akan segera menghubungi Anda.');
    }
}

