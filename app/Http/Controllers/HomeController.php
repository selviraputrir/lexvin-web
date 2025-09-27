<?php

namespace App\Http\Controllers;

use App\Models\Service; 
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $services = Service::all();

        $phoneNumber = env('WHATSAPP_NUMBER');
        $message = env('WHATSAPP_MESSAGE');

        $encodedMessage = rawurlencode($message);

        $whatsappLink = "https://api.whatsapp.com/send?phone={$phoneNumber}&text={$encodedMessage}";

        return view('home', compact('services', 'whatsappLink'));
    }
}