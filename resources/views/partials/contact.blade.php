<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - LEXVIN</title>

    @vite('resources/css/app.css')

    <link
        href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;600;700&family=Lato:wght@300;400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
</head>

<body class="bg-black min-h-screen font-sans-custom text-gray-800">

    <div class="pt-4">
        <section id="home" class="relative container mx-auto pb-12" style="min-height: 15vh;">

            <div class="relative z-10 flex flex-col h-full">

                <header class="flex items-center justify-between p-4 md:p-0">

                    <div
                        class="bg-black py-4 pl-20 pr-40 [clip-path:polygon(0_0,100%_0,96%_100%,0_100%)] flex items-center z-20 shadow-sm">
                        <a class="" href="/">
                            <img src="{{ asset('images/logo.png') }}" alt="LEXVIN"
                                class="custom-margin-2 h-6 w-[200px]">
                        </a>

                        <nav class="hidden items-center space-x-10 text-base font-serif md:flex ml-16 text-white">

                            <a href="/" class="nav-link hover:opacity-80">Home</a>
                            <a href="/#about" class="nav-link hover:opacity-80">About</a>
                            <a href="/#services" class="nav-link hover:opacity-80">Our Services</a>
                            <a href="/#testimonials" class="nav-link hover:opacity-80">Testimonials</a>

                        </nav>
                    </div>

                    <a href="{{ route('contact.create') }}"
                        class="custom-margin hidden rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90 md:block z-20 shadow-md">
                        Contact Us
                    </a>

                    <input type="checkbox" id="menu-toggle" class="hidden peer">
                    <label for="menu-toggle" class="text-gray-900 text-2xl md:hidden z-50 cursor-pointer">
                        <i class="fas fa-bars"></i>
                    </label>

                    <div id="mobile-menu"
                        class="hidden peer-checked:flex md:hidden absolute top-0 left-0 w-full h-screen bg-white/95 backdrop-blur-sm flex-col items-center justify-center space-y-8 text-xl z-40 shadow-lg">
                        <label for="menu-toggle"
                            class="absolute top-8 right-5 text-gray-900 text-3xl cursor-pointer hover:text-custom-wine">
                            <i class="fas fa-times"></i>
                        </label>
                        <a href="/" class="nav-link text-gray-900 hover:text-custom-wine font-serif">Home</a>
                        <a href="/#about" class="nav-link text-gray-900 hover:text-custom-wine font-serif">About</a>
                        <a href="/#services"
                            class="nav-link text-gray-900 hover:text-custom-wine font-serif">Services</a>
                        <a href="/#testimonials"
                            class="nav-link text-gray-900 hover:text-custom-wine font-serif">Testimonials</a>
                        <a href="{{ route('contact.create') }}"
                            class="nav-link text-gray-900 hover:text-custom-wine font-serif font-bold">Contact Us</a>
                    </div>
                </header>

            </div>
        </section>


        <main class="pb-24 flex justify-center px-4 mt-8">

            <div class="relative w-full max-w-5xl">

                <div class="bg-white text-black  p-8 md:p-12 md:ml-24 relative shadow-2xl border rounded-sm">

                    <div class="flex flex-col md:flex-row">
                        <div class="hidden md:block w-1/3"></div>

                        <div class="w-full md:w-2/3 pl-0 md:pl-8 pt-8 md:pt-0">
                            <h2 class="font-serif-custom text-4xl font-bold mb-2 text-gray-900">Get in Touch</h2>
                            <p class="text-gray-600 mb-8 font-serif-custom">Feel free to drop us a line below!</p>

                            @if (session('success'))
                                <div
                                    class="bg-green-50 text-green-800 p-4 rounded-lg mb-6 text-sm font-semibold border-l-4 border-green-500 shadow-sm flex items-center">
                                    <i class="fas fa-check-circle mr-2 text-green-600"></i> {{ session('success') }}
                                </div>
                            @endif

                            @if ($errors->any())
                                <div
                                    class="bg-red-50 text-red-800 p-4 rounded-lg mb-6 text-sm border-l-4 border-red-500 shadow-sm">
                                    <ul class="list-disc list-inside">
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <form action="{{ route('contact.store') }}" method="POST" class="space-y-5">
                                @csrf

                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-700 mb-1 ml-1 uppercase tracking-wider">Your
                                        name</label>
                                    <input type="text" name="name" class="input-gray" value="{{ old('name') }}"
                                        required>
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-700 mb-1 ml-1 uppercase tracking-wider">Email</label>
                                    <input type="email" name="email" class="input-gray" value="{{ old('email') }}"
                                        required>
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-700 mb-1 ml-1 uppercase tracking-wider">Phone
                                        Number</label>
                                    <input type="text" name="phone" class="input-gray" value="{{ old('phone') }}">
                                </div>

                                <div>
                                    <label
                                        class="block text-xs font-bold text-gray-700 mb-1 ml-1 uppercase tracking-wider">Message</label>
                                    <textarea name="message" rows="4" class="input-gray">{{ old('message') }}</textarea>
                                </div>

                                <div class="flex justify-end mt-6">
                                    <button type="submit"
                                        class="bg-wine-red text-white px-12 py-3 rounded-full font-bold hover:opacity-90 transition shadow-xl text-sm tracking-widest uppercase transform hover:scale-105">
                                        Send
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

               <div class="hidden md:flex flex-col justify-center bg-custom-wine text-white absolute top-12 left-0 shadow-2xl p-8 w-80 h-[450px] z-10 rounded-sm">
                    
                    <div class="text-center mb-10">
                        <h3 class="font-serif-custom text-3xl font-normal text-white">Contact Us</h3>
                        <div class="flex items-center justify-center gap-3 mt-4 opacity-70">
                            <span class="h-px w-6 bg-white"></span>
                            <span class="text-xs tracking-[0.2em] font-serif-custom uppercase">LEXVIN</span>
                            <span class="h-px w-6 bg-white"></span>
                        </div>
                    </div>
    
                    <div class="space-y-8 pl-4">
                        
                        <div class="flex items-start gap-4 group">
                            <div class="mt-1 text-gold-accent text-lg group-hover:text-yellow-400 transition">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="text-sm leading-relaxed font-light">contact@lexvin.com</div>
                        </div>
    
                        <div class="flex items-start gap-4 group">
                            <div class="mt-1 text-gold-accent text-lg group-hover:text-yellow-400 transition">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="text-sm font-light">(+62) 338-763-996-88</div>
                        </div>
    
                        <div class="flex items-start gap-4 group">
                            <div class="mt-1 text-gold-accent text-lg group-hover:text-yellow-400 transition">
                                <i class="fab fa-instagram"></i>
                            </div>
                            <div class="text-sm leading-relaxed font-light flex items-center h-full">
                                <a href="https://instagram.com/lexvin.law" target="_blank" class="hover:text-yellow-200 transition" style="text-decoration: none; color: inherit;">
                                    @lexvin.law
                                </a>
                            </div>
                        </div>
                    </div>
        </main>
    </div>


    @include('partials.footer')

</body>

</html>
