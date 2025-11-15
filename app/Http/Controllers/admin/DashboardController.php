<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactMessage; // Model untuk mengambil data

class DashboardController extends Controller
{
    /**
     * Menampilkan dashboard admin dengan semua pesan.
     */
    public function index()
    {
        // Ambil semua pesan, urutkan dari yang terbaru
        $messages = ContactMessage::orderBy('created_at', 'desc')->get();

        // Tampilkan view dan kirim data $messages ke dalamnya
        return view('admin.dashboard', compact('messages'));
    }

    /**
     * Tandai pesan sebagai "sudah dibaca".
     */
    public function markAsRead($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->update(['is_read' => true]);

        return redirect()->route('admin.dashboard')->with('success', 'Pesan ditandai sudah dibaca.');
    }

    /**
     * Hapus pesan dari database.
     */
    public function destroy($id)
    {
        $message = ContactMessage::findOrFail($id);
        $message->delete();

        return redirect()->route('admin.dashboard')->with('success', 'Pesan berhasil dihapus.');
    }
}

