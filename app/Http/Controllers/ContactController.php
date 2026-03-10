<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // JANGAN LUPA BARIS INI

class ContactController extends Controller
{


public function index()
{
    // Mengambil semua data dari tabel contacts
    $contacts = \App\Models\Contact::all(); 
    
    // Pastikan 'contacts' (dengan 's') dikirim ke view
    return view('admin.messages', compact('contacts'));
}


    public function store(Request $request)
    {
        // 1. Validasi Input
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required', // Harus sama dengan name di HTML
            'message' => 'required'
        ]);

        // 2. Simpan ke Database
        Contact::create($validated);

        // 3. Balik ke halaman contact dengan pesan sukses
        return back()->with('success', 'Message sent successfully!');
    }

 public function destroy($id)
{
    $contact = \App\Models\Contact::findOrFail($id);
    $contact->delete();

    return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
}
}

