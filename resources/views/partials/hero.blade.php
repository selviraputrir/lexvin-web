<div class="bg-black pt-7 min-h-screen">
    <section id="home" class="relative container mx-auto" style="height: 80vh;">
        
        <div class="absolute inset-0 bg-center bg-no-repeat bg-cover rounded-xl"
             style="background-image: url('{{ asset('images/background-hero.jpg') }}');">
            <div class="absolute inset-0 bg-black/50 rounded-xl"></div>
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
<<<<<<< HEAD
                <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang Litigation Support." 
                    class="hidden rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90 md:block">
=======
            
                <a href="{{ route('contact.create') }}"
                   class="hidden rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90 md:block z-20">
>>>>>>> 53b6a817acee677e75e0d8096744b89ac1ee3109
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

            <div class="flex-grow flex items-center justify-center text-center px-4">
                <h1 class="font-serif text-3xl font-bold leading-tight text-white drop-shadow-lg md:text-5xl">
                    PROTECT YOUR BUSINESS<br>SECURE YOUR FUTURE
                </h1>
            </div>

        </div>

        <div class="absolute top-full left-1/2 -translate-x-1/2 -translate-y-1/2 z-20 w-full px-4">
            <div class="mx-auto bg-wine-red py-6 border border-white max-w-4xl">
                <div class="grid grid-cols-1 divide-y divide-white/20 text-center text-white md:grid-cols-3 md:divide-x md:divide-y-0">
                    <div class="py-6 md:py-0"><p class="text-3xl md:text-4xl font-bold">2000+</p><p class="mt-1 text-base text-gray-200">Cases Handled</p></div>
                    <div class="py-6 md:py-0"><p class="text-3xl md:text-4xl font-bold">4.9/5</p><p class="mt-1 text-base text-gray-200">Client Satisfaction</p></div>
                    <div class="py-6 md:py-0"><p class="text-3xl md:text-4xl font-bold">&gt;3 Years</p><p class="mt-1 text-base text-gray-200">Experience</p></div>
                </div>
            </div>
        </div>
    </section>

    <div class="pt-48"></div>
</div>

