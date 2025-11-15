<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - LEXVIN</title>

    @vite('resources/css/app.css')
    
</head>
<body>

<div class="bg-black pt-7 min-h-screen">
    
    <section id="home" class="relative container mx-auto">
        
        <div class="absolute inset-0 rounded-xl bg-wine-red"> 
            <div class="absolute inset-0 bg-white rounded-xl"></div>
        </div>

       <div class="relative z-5 flex flex-col"> 
<header class="flex items-center">

    <div class="hidden md:flex bg-black py-6  pr-16 [clip-path:polygon(0_0,100%_0,96%_100%,0_100%)] items-center z-20">
        <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class="h-6 w-auto">
        </a>
        <nav class="items-center space-x-12 text-sm flex ml-16">
            <a href="#home" class="nav-link">Home</a>
            <a href="#about" class="nav-link">About</a>
            <a href="#services" class="nav-link">Our Services</a> 
            <a href="#testimonials" class="nav-link">Testimonials</a> 
        </nav>
    </div>
    
    <div class="hidden md:flex bg-white py-4 px-6 [clip-path:polygon(4%_0,100%_0,100%_100%,0_100%)] flex-grow justify-end items-center rounded-tr-xl rounded-br-xl z-10 -ml-8">
        <a href="{{ route('contact.create') }}"
           class="rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90">
            Contact Us
        </a>
    </div>
    <div class="flex-grow md:hidden pl-6">
         <a href="/">
            <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class="h-6 w-auto">
        </a>
    </div>
    
    <div class="md:hidden p-4 z-50">
        <input type="checkbox" id="menu-toggle" class="hidden peer">
        <label for="menu-toggle" class="text-black text-2xl cursor-pointer">
            <i class="fas fa-bars"></i>
        </label>
    </div>
    <div id="mobile-menu" 
         class="hidden peer-checked:flex md:hidden fixed top-0 left-0 w-full h-screen bg-black/90 backdrop-blur-sm flex-col items-center justify-center space-y-8 text-xl z-40">
        
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
            <main class="contact-section">
    <div class="container mx-auto">
        
        <div class="contact-grid">
            
            <div class="contact-form">
                <h2>Get in Touch</h2>
                <p class="subtitle">Feel free to drop us a liner below!</p>
                
                <form action="#" method="POST">
                    @csrf
                    <div class="form-group">
                        <input type="text" name="name" class="form-input" placeholder="Your name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-input" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="text" name="telp" class="form-input" placeholder="No telp">
                    </div>
                    <div class="form-group">
                        <textarea name="message" rows="6" class="form-input" placeholder="Message"></textarea>
                    </div>
                    <div>
                        <button type="submit" class="btn">
                            SEND
                        </button>
                    </div>
                </form>
            </div>
            </div>
    </div>
</main>
            </div> </section> <div class="pt-48"></div>

</div> @include('partials.footer')

</body>
</html>