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
        <span class="opacity-60">Legal Compliance</span> / 
        <span class="font-bold text-[#441425]">Read More</span>
    </div>
</nav>

{{-- Main Content --}}
<section class="container mx-auto px-6 py-16">
    <div class="flex flex-col lg:flex-row gap-16">
        
        {{-- Detail Text Card --}}
        <div class="lg:w-2/3">
            <div class="relative bg-gradient-to-b from-[#441425] to-[#2B0C1F] rounded-2xl p-8 md:p-12 shadow-2xl border border-white/5 overflow-hidden h-full">
                
                {{-- Free Consultation Ribbon --}}
                <div class="absolute top-8 right-[-8px] z-10">
                    <div class="relative bg-[#B89B65] text-white text-[10px] md:text-xs font-bold py-2 px-6 pr-10 rounded-l-lg shadow-lg uppercase tracking-widest">
                        Free Consultation
                        <div class="absolute right-0 top-full w-2 h-2 bg-[#8a744b] [clip-path:polygon(0_0,0_100%,100%_0)]"></div>
                    </div>
                </div>

                <div class="flex flex-col h-full">
                    {{-- Title --}}
                    <div class="mb-8 pt-4 md:pt-0">
                        <h1 class="text-white font-serif  text-4xl md:text-5xl leading-[1.1] max-w-[70%] text-left">
                            Legal<br>Compliance
                        </h1>
                    </div>

                    {{-- Divider --}}
                    <div class="w-full h-[1px] bg-white/20 mb-10"></div>

                    {{-- Description --}}
                    <div class="text-left">
                        <p class="text-gray-200 text-sm md:text-base leading-relaxed font-light opacity-90">
                            Management of business legal compliance, ranging from the governance of establishing strategic corporate entities and handling legal administration, to ensuring fulfillment of specific regulatory compliance for various corporate business activities.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        {{-- Sidebar Cards --}}
        <div class="lg:w-1/3 flex flex-col gap-4">
            {{-- Corporate Actions --}}
            <a href="{{ route('detail.corporateactions') }}" 
               class="bg-gradient-to-br from-[#441425] to-[#2B0C1F] p-5 rounded-2xl border border-[#B89B65]/20 flex gap-4 group hover:border-[#B89B65] hover:-translate-y-1 transition-all duration-300">
                <div class="text-[#B89B65] bg-[#B89B65]/10 w-12 h-12 rounded-xl flex items-center justify-center group-hover:bg-[#B89B65] group-hover:text-black transition-colors">
                    <i class="fa-solid fa-building-shield text-lg"></i>
                </div>
                <div class="flex-1">
                    <h4 class="text-white font-serif font-bold text-[11px] tracking-widest mb-1 group-hover:text-[#B89B65] transition-colors uppercase">Corporate Actions</h4>
                    <p class="text-[10px] text-gray-400 leading-snug">Assistance in mergers, acquisitions, and business separations.</p>
                </div>
            </a>
  {{-- Dispute Resolution Sidebar --}}
                <a href="{{ route('detail.DisputeResolution') }}" 
                   class="bg-gradient-to-br from-[#441425] to-[#2B0C1F] p-5 rounded-2xl border border-[#B89B65]/20 flex gap-4 group hover:border-[#B89B65] hover:-translate-y-1 transition-all duration-300">
                    <div class="text-[#B89B65] bg-[#B89B65]/10 w-12 h-12 rounded-xl flex items-center justify-center group-hover:bg-[#B89B65] group-hover:text-black transition-colors shrink-0">
                        <i class="fa-solid fa-handshake text-lg"></i>
                    </div>
                    <div class="flex-1">
                        <h4 class="text-white font-serif font-bold text-[11px] tracking-widest mb-1 group-hover:text-[#B89B65] transition-colors uppercase">Dispute Resolution</h4>
                        <p class="text-[10px] text-gray-400 leading-snug">Ongoing legal services for companies that need long-term legal partners.</p>
                    </div>
                </a>
    
          {{-- Sidebar Cards Container --}}

  

</div>
    </section>
</main>

@include('partials.whatsapp')
@endsection