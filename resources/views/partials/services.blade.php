<section class="bg-black py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-serif font-bold text-white uppercase tracking-widest relative inline-block">
                OUR SERVICES
                <span class="block w-12 h-0.5 bg-[#B89B65] mx-auto mt-2"></span>
            </h2>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 justify-center gap-6 max-w-5xl mx-auto">
            
            <div class="bg-gradient-to-b from-[#441425] to-[#2B0C1F] rounded-2xl p-6 text-center shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between border border-white/5 w-full group">
                <div>
                    <div class="mb-5 flex justify-center">
                        <div class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center border border-white/10 group-hover:border-[#B89B65]/40 transition-all">
                            <i class="fa-solid fa-scale-balanced text-lg text-white"></i> 
                        </div>
                    </div>
                    <h3 class="text-white font-serif font-bold text-sm mb-2 tracking-wide leading-tight">Legal Compliance</h3>
                    <p class="text-gray-400 text-[11px] leading-relaxed mb-6 font-light">
                        Assistance in mergers, acquisitions, and business separations.
                    </p>
                </div>
                <a href="{{ route('detail.legalconsultant') }}" class="bg-[#B89B65] text-black font-bold py-2 px-4 rounded-full text-[9px] uppercase tracking-wider hover:bg-white transition shadow-lg">
                    Learn More
                </a>
            </div>

            <div class="bg-gradient-to-b from-[#441425] to-[#2B0C1F] rounded-2xl p-6 text-center shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between border border-white/5 w-full group">
                <div>
                    <div class="mb-5 flex justify-center">
                        <div class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center border border-white/10 group-hover:border-[#B89B65]/40 transition-all">
                            <i class="fa-solid fa-handshake text-lg text-white"></i> 
                        </div>
                    </div>
                    <h3 class="text-white font-serif font-bold text-sm mb-2 tracking-wide leading-tight">Dispute Resolution</h3>
                    <p class="text-gray-400 text-[11px] leading-relaxed mb-6 font-light">
                        Ongoing legal services for companies that need long-term legal partners.
                    </p>
                </div>
                <a href="{{ route('detail.DisputeResolution') }}" class="bg-[#B89B65] text-black font-bold py-2 px-4 rounded-full text-[9px] uppercase tracking-wider hover:bg-white transition shadow-lg">
                    Learn More
                </a>
            </div>

            <div class="bg-gradient-to-b from-[#441425] to-[#2B0C1F] rounded-2xl p-6 text-center shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between border border-white/5 w-full group">
                <div>
                    <div class="mb-5 flex justify-center">
                        <div class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center border border-white/10 group-hover:border-[#B89B65]/40 transition-all">
                            <i class="fa-solid fa-building-shield text-lg text-white"></i> 
                        </div>
                    </div>
                    <h3 class="text-white font-serif font-bold text-sm mb-2 tracking-wide leading-tight">Corporate Actions</h3>
                    <p class="text-gray-400 text-[11px] leading-relaxed mb-6 font-light">
                        Strategic assistance for major corporate actions such as Mergers, Acquisitions, and more.
                    </p>
                </div>
                <a href="{{ route('detail.corporateactions') }}" class="bg-[#B89B65] text-black font-bold py-2 px-4 rounded-full text-[9px] uppercase tracking-wider hover:bg-white transition shadow-lg">
                    Learn More
                </a>
            </div>

        </div>
    </div>
</section>