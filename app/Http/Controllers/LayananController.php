<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
   
    public function show($id)
    {
        
 
 return views('layouts.layanan-detail');
    }

 
}
