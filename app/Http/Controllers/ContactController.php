<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{


public function index()
{
    $contacts = \App\Models\Contact::all(); 
    
    return view('admin.messages', compact('contacts'));
}


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone_number' => 'required', 
            'message' => 'required'
        ]);

        Contact::create($validated);

        return back()->with('success', 'Message sent successfully!');
    }

 public function destroy($id)
{
    $contact = \App\Models\Contact::findOrFail($id);
    $contact->delete();

    return redirect()->back()->with('success', 'Pesan berhasil dihapus!');
}
}

