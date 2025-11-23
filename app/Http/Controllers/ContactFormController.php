<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;
use App\Models\ContactMessage;
use App\Mail\NewContactMessage;
use App\Mail\ContactAutoReply; // <-- DITAMBAHKAN

class ContactFormController extends Controller
{
    /**
     * Menampilkan halaman formulir kontak.
     */
    public function create()
    {
        return view('partials.contact');
    }

    /**
     * Memproses data yang dikirim dari formulir dan mengirim notifikasi email.
     */
    public function store(Request $request)
    {
        // 1. Validasi data yang masuk
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:5',
        ]);

        // 2. SIMPAN KE DATABASE
        $message = ContactMessage::create($validatedData);

        // 3. KIRIM NOTIFIKASI EMAIL (KEPADA ADMIN DAN KONSUMEN)
        try {
            // A. Kirim ke Admin
            Mail::to('putriselvira902@gmail.com')->send(new NewContactMessage($message));
            
            // B. Kirim Balasan Otomatis ke Konsumen (MENGGUNAKAN EMAIL YANG MEREKA INPUT)
            Mail::to($message->email)->send(new ContactAutoReply($message));

        } catch (\Exception $e) {
            Log::error('Gagal mengirim notifikasi email: ' . $e->getMessage());
        }
        
        // 4. Redirect kembali dengan pesan sukses
        return redirect()->route('contact.create')
                             ->with('success', 'Pesan Anda telah terkirim! Silakan cek email Anda untuk konfirmasi.');
    }
}