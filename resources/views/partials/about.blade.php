<section id="about" class="bg-white py-16 overflow-hidden"> 
    <div class="container mx-auto px-6 max-w-5xl"> 
        
        <div class="flex flex-col items-center mb-12" data-aos="fade-up"> {{-- Jarak judul sedikit lebih lega (mb-12) --}}
            <h2 class="text-3xl md:text-4xl font-serif tracking-[0.2em] text-black text-center uppercase">
                Founding Partner
            </h2>
            <div class="w-20 h-[1px] bg-[#441425] mt-3 opacity-30"></div>
        </div>

        <div class="flex flex-col gap-14"> 
            
            {{-- Profile 1: Dr. Rizal Syamsul Ma'arif --}}
            <div class="flex flex-col md:flex-row items-center gap-10" data-aos="fade-left" data-aos-duration="1000">
                <div class="w-36 h-36 md:w-44 md:h-44 flex-shrink-0 relative">
                    <div class="absolute inset-0 rounded-full border-[3px] border-[#441425] shadow-lg overflow-hidden">
                        <img src="{{ asset('images/a.jpeg') }}" alt="Dr. Rizal Syamsul Ma'arif" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-[#441425] font-bold text-xl md:text-2xl">Dr. Rizal Syamsul Ma'arif, S.H., M.H</h3>
                    <p class="text-[#008080] font-medium text-xs md:text-sm uppercase tracking-widest mb-2">Managing Partner</p>
                    
                    <div class="space-y-3"> {{-- Spasi antar paragraf sedikit lebih lega --}}
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                            Practising and legal experts in handling corporate criminal disputes and commercial civil. Focus on tactical Defence strategies and analysis of complex legal risks.
                        </p>
                        <div class="w-full h-[1px] bg-gray-200 my-2"></div>
                    </div>
                </div>
            </div>

            {{-- Profile 2: Vincentio --}}
            <div class="flex flex-col md:flex-row-reverse items-center gap-10" data-aos="fade-right" data-aos-duration="1000">
                <div class="w-36 h-36 md:w-44 md:h-44 flex-shrink-0 relative">
                    <div class="absolute inset-0 rounded-full border-[3px] border-[#441425] shadow-lg overflow-hidden">
                        <img src="{{ asset('images/b.jpeg') }}" alt="Vincentio" class="w-full h-full object-cover">
                    </div>
                </div>
                
                <div class="flex-1 text-center md:text-left">
                    <h3 class="text-[#441425] font-bold text-xl md:text-2xl">Vincentio, S.H.,C.CLE</h3>
                    <p class="text-[#008080] font-medium text-xs md:text-sm uppercase tracking-widest mb-2">Senior Partner</p>
                    
                    <div class="space-y-3">
                        <p class="text-gray-700 text-sm md:text-base leading-relaxed">
                           Legal practitioners specialising in corporate restructuring and high-level transaction contract (M&A) negotiation. Focussing on strengthening the legal compliance structure as well as the security and growth of the company.
                        </p>
                        <div class="w-full h-[1px] bg-gray-200 my-2"></div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>