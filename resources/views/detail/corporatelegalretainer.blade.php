@extends('layouts.app')

@section('content')
<main class="bg-black min-h-screen font-sans text-white">
    {{-- Section Hero --}}
    <div class="bg-black pt-5 min-h-screen">
   <section id="home" class="relative container mx-auto" style="height: 55vh;">

        <div class="absolute inset-0 bg-center bg-no-repeat bg-cover rounded-xl"
            style="background-image: url('{{ asset('images/background-hero.jpg') }}');">
            <div class="absolute inset-0 bg-black/50 rounded-xl"></div>
        </div>

        <div class="relative z-10 flex flex-col h-full">
            <header class="flex items-center justify-between p-4 md:p-0">

                <div
                    class="bg-black py-4 pl-20 pr-40 [clip-path:polygon(0_0,100%_0,96%_100%,0_100%)] flex items-center z-20">

                    <a class="" href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class=" custom-margin-2 h-6 w-[200px]">
                    </a>
 <nav class="hidden md:flex items-center space-x-8 text-sm font-serif ml-12 text-white whitespace-nowrap">
    <a href="/#home" class="nav-link hover:opacity-80 transition">Home</a>
    <a href="/#about" class="nav-link hover:opacity-80 transition">About</a>
    
    <a href="/artikel" class="nav-link hover:opacity-80 transition">Artikel</a>
    
    <a href="/#services" class="nav-link hover:opacity-80 transition">Our Services</a>
    <a href="/#testimonials" class="nav-link hover:opacity-80 transition">Testimonials</a>
</nav>
                </div>

                <a href="{{ route('contact.create') }}"
                    class="custom-margin hidden rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90 md:block z-20">

                    Contact Us
                </a>
                
                          
    </section>

    {{-- Breadcrumbs --}}
    <nav class="bg-[#D9D9D9] py-3 mt-4">
        <div class="container mx-auto px-6 text-black text-xs">
            <a href="/" class="opacity-60 hover:opacity-100">Home</a> / 
            <span class="opacity-60">Corporate Legal Retainer</span> / 
            <span class="font-bold text-[#441425]">Selengkapnya</span>
        </div>
    </nav>

    {{-- Main Content --}}
    <section class="container mx-auto px-6 py-16">
        <div class="flex flex-col lg:flex-row gap-16">
            
            {{-- Detail Text --}}
            <div class="lg:w-2/3">
                <div class="mb-8">
                      <h1 class="text-3xl font-serif font-bold -[0.2em] mb-2">
                        Corporate Legal Retainer
                    </h1>
                    <div class="flex gap-1">
                        <div class="h-1 w-32 bg-[#B89B65]"></div>
                        <div class="h-1 w-4 bg-[#B89B65]"></div>
                        <div class="h-1 w-2 bg-[#B89B65]"></div>
                    </div>
                </div>

                <div class="space-y-6 text-gray-300 leading-relaxed text-sm md:text-base">
                    <p>
                        Our Corporate Legal Retainer service is designed for businesses seeking consistent, high-quality legal support without the overhead of an in-house legal department. We act as your reliable external legal partners for long-term growth.
                    </p>

                    <p>This service includes comprehensive legal support such as:</p>

                    <ul class="space-y-3 list-none">
                        <li class="flex gap-3">
                            <span class="text-[#B89B65] font-bold">*</span>
                            <span><strong>Contract Management:</strong> Drafting, reviewing, and negotiating various business contracts to protect your interests.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-[#B89B65] font-bold">*</span>
                            <span><strong>Regulatory Compliance:</strong> Ensuring your business operations strictly meet all Indonesian laws and regulations.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-[#B89B65] font-bold">*</span>
                            <span><strong>Legal Opinions:</strong> Providing formal written opinions and strategic advice on specific business actions or policies.</span>
                        </li>
                        <li class="flex gap-3">
                            <span class="text-[#B89B65] font-bold">*</span>
                            <span><strong>HR & Employment:</strong> Advising on labor laws, employee contracts, and internal company regulations (PP/PKB).</span>
                        </li>
                    </ul>

                    <p>
                        By having a dedicated retainer, we ensure your company operates smoothly, maintains full compliance, and effectively minimizes potential legal risks in every transaction.
                    </p>
                </div>
            </div>

            {{-- Sidebar Cards Container --}}
            <div class="lg:w-1/3 flex flex-col gap-4">
                    <a href="{{ route('detail.legalconsultant') }}" 
                   class="bg-gradient-to-br from-[#441425] to-[#2B0C1F] p-5 rounded-2xl border border-[#B89B65]/20 flex gap-4 group hover:border-[#B89B65] hover:-translate-y-1 transition-all duration-300">
                    <div class="text-[#B89B65] bg-[#B89B65]/10 w-12 h-12 rounded-xl flex items-center justify-center group-hover:bg-[#B89B65] group-hover:text-black transition-colors">
                        <i class="fas fa-balance-scale text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-serif font-bold  text-[11px] tracking-widest mb-1 group-hover:text-[#B89B65] transition-colors">Legal Consultant</h4>
                        <p class="text-[10px] text-gray-400 leading-snug">Strategic consulting sessions to address business and personal legal needs.</p>
                    </div>
                </a>
                
                <a href="{{ route('detail.corporateactions') }}" 
                   class="bg-gradient-to-br from-[#441425] to-[#2B0C1F] p-5 rounded-2xl border border-[#B89B65]/20 flex gap-4 group hover:border-[#B89B65] hover:-translate-y-1 transition-all duration-300">
                    <div class="text-[#B89B65] bg-[#B89B65]/10 w-12 h-12 rounded-xl flex items-center justify-center group-hover:bg-[#B89B65] group-hover:text-black transition-colors">
                        <i class="fa-solid fa-building-shield text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-serif font-bold text-[11px] tracking-widest mb-1 group-hover:text-[#B89B65] transition-colors">Corporate Actions</h4>
                        <p class="text-[10px] text-gray-400 leading-snug">Assistance in mergers, acquisitions, and business separations.</p>
                    </div>
                </a>

             

                {{-- Litigation Support --}}
                <a href="{{ route('detail.litigationsupport') }}" 
                   class="bg-gradient-to-br from-[#441425] to-[#2B0C1F] p-5 rounded-2xl border border-[#B89B65]/20 flex gap-4 group hover:border-[#B89B65] hover:-translate-y-1 transition-all duration-300">
                    <div class="text-[#B89B65] bg-[#B89B65]/10 w-12 h-12 rounded-xl flex items-center justify-center group-hover:bg-[#B89B65] group-hover:text-black transition-colors">
                        <i class="fa-solid fa-gavel text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-serif font-bold  text-[11px] tracking-widest mb-1 group-hover:text-[#B89B65] transition-colors">Litigation Support</h4>
                        <p class="text-[10px] text-gray-400 leading-snug">Experts ready to defend and accompany clients in court.</p>
                    </div>
                </a>

                   {{-- Litigation Support --}}
              
            </div>
        </div>
    </section>
</main>

@include('partials.whatsapp')
@endsection