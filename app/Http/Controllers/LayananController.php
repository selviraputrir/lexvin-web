<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function show($id)
    {
        return view('partials.layanan-detail', compact('id'));
         return view('partials.layanan-detail1', compact('id'));
    }
}
