<?php

namespace App\Http\Controllers;

use App\Models\Service; // <-- Jangan lupa import model Service
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Ambil semua data dari tabel 'services'
        $services = Service::all();

        // Kirim data 'services' ke view 'home'
        return view('home', [
            'services' => $services
        ]);
    }
}