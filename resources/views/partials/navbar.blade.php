@extends('layouts.app')@section('title', 'Contact Us - LEXVIN') @section('content')

<div class="bg-black pt-7 min-h-screen">
   <section id="home" class="relative container mx-auto" style="height: 80vh;">
            
            <div class="absolute inset-0 rounded-xl bg-wine-red"> 
            
                <div class="absolute inset-0 bg-white rounded-xl"></div>
            </div>

        <div class="relative z-10 flex flex-col h-full">
            <header class="flex items-center justify-between p-4 md:p-0">
                <div class="bg-black py-4 pl-20 pr-40 [clip-path:polygon(0_0,100%_0,96%_100%,0_100%)] flex items-center z-20">
                     <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class="h-6 w-auto">
                    </a>
                    <nav class="hidden items-center space-x-12 text-sm md:flex ml-16">
                        
                        <a href="#home" class="nav-link">Home</a>
                        <a href="#about" class="nav-link">About</a>
                        <a href="#services" class="nav-link">Our Services</a> 
                        <a href="#testimonials" class="nav-link">Testimonials</a> 
                    </nav>
                </div>
            
                <a href="{{ route('contact.create') }}"
                   class="hidden rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90 md:block z-20">
                    Contact Us
                </a>

                <input type="checkbox" id="menu-toggle" class="hidden peer">
                
                <label for="menu-toggle" class="text-white text-2xl md:hidden z-50 cursor-pointer">
                    <i class="fas fa-bars"></i>
                </label>

                <div id="mobile-menu" 
                     class="hidden peer-checked:flex md:hidden absolute top-0 left-0 w-full h-screen bg-black/90 backdrop-blur-sm flex-col items-center justify-center space-y-8 text-xl z-40">
                    
                    <label for="menu-toggle" class="absolute top-8 right-5 text-white text-3xl cursor-pointer">
                        <i class="fas fa-times"></i>
                    </label>

                    <a href="#home" class="nav-link text-2xl">Home</a>
                    <a href="#about" class="nav-link text-2xl">About</a>
                    <a href="#services" class="nav-link text-2xl">Services</a> 
                    <a href="#testimonials" class="nav-link text-2xl">Testimonials</a>
                    <a href="{{ route('contact.create') }}" class="nav-link text-2xl">Contact Us</a>
                </div>
            </header>
             <div class="flex flex-col md:flex-row shadow-xl">

                           

                            <div class="w-full md:w-2/5 bg-[#3D001F] text-white p-8 rounded-l-lg">

                                <h2 class="font-serif text-3xl font-bold mb-2">Contact us</h2>

                                <p class="font-serif text-lg mb-8">LEXVIN</p>

                               

                                <div class="space-y-6">

                                    <div class="flex items-center space-x-3">

                                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 0 1-2.25 2.25h-15a2.25 2.25 0 0 1-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0 0 19.5 4.5h-15a2.25 2.25 0 0 0-2.25 2.25m19.5 0v.243a2.25 2.25 0 0 1-1.07 1.916l-7.5 4.615a2.25 2.25 0 0 1-2.36 0L3.32 8.91a2.25 2.25 0 0 1-1.07-1.916V6.75" />
                            </svg>

                                        <span>contact@yulianizilvazia</span>

                                    </div>

                                    <div class="flex items-center space-x-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z" /></svg>

                                        <span>(+62)838 763-996 88</span>

                                    </div>

                                    <div class="flex items-center space-x-3">

                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.828 0l-4.243-4.243a8 8 0 1111.314 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" /></svg>

                                        <span>Jl.bitung sari rt 04 rw 01</span>

                                    </div>

                                </div>

                            </div>

                           

                            <div class="w-full md:w-3/5 bg-gray-100 p-8 rounded-r-lg">

                                <h2 class="text-3xl font-bold text-gray-800 mb-2">Get in Touch</h2>

                                <p class="text-gray-600 mb-6">Feel free to drop us a liner below!</p>

                               

                                <form action="#" method="POST">

                                    @csrf

                                    <div class="mb-4">

                                        <input type="text" placeholder="Your name" class="w-full p-3 rounded-lg bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">

                                    </div>

                                    <div class="mb-4">

                                        <input type="email" placeholder="Email" class="w-full p-3 rounded-lg bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">

                                    </div>

                                    <div class="mb-4">

                                        <input type="tel" placeholder="No telp" class="w-full p-3 rounded-lg bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400">

                                    </div>

                                    <div class="mb-4">

                                        <textarea rows="5" placeholder="Massage" class="w-full p-3 rounded-lg bg-gray-200 border border-gray-300 focus:outline-none focus:ring-2 focus:ring-gray-400"></textarea>

                                    </div>

                                    <div class="text-right">

                                        <button type="submit" class="bg-[#5D2435] text-white px-8 py-3 rounded-lg font-medium hover:bg-opacity-80">

                                            SEND

                                        </button>

                                    </div>

                                </form>
        </div>
            </div>
        </div>
        
    </section>


    <div class="pt-48"></div>
</div>


    @include('partials.footer')



@endsection