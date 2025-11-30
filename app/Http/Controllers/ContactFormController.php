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
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'message' => 'required|string|min:5',
        ]);

        $message = ContactMessage::create($validatedData);

        try {
            Mail::to('lexvin38@gmail.com')->send(new NewContactMessage($message));
            Mail::to($message->email)->send(new ContactAutoReply($message));

        } catch (\Exception $e) {
            Log::error('Gagal mengirim notifikasi email: ' . $e->getMessage());
        }
        
        return redirect()->route('contact.create')
                             ->with('success', 'Pesan Anda telah terkirim! Silakan cek email Anda untuk konfirmasi.');
    }
}