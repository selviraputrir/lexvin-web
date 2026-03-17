<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEXVIN</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        body { 
            font-family: 'Plus Jakarta Sans', sans-serif; 
            background-color: #000000;
        }
        
        input:-webkit-autofill,
        input:-webkit-autofill:hover, 
        input:-webkit-autofill:focus,
        textarea:-webkit-autofill {
            -webkit-text-fill-color: #e4e4e7 !important;
            -webkit-box-shadow: 0 0 0px 1000px #18181b inset !important;
            transition: background-color 5000s ease-in-out 0s;
        }

        textarea::-webkit-scrollbar {
            width: 4px; /* Lebih tipis */
        }
        textarea::-webkit-scrollbar-thumb {
            background: #441424;
            border-radius: 10px;
        }
    </style>
</head>
<body class="bg-black text-white min-h-screen">

    <section class="w-full py-10 flex items-center justify-center min-h-screen" id="contact">
        <div class="container mx-auto px-4 max-w-5xl"> <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 items-start"> <div class="bg-[#09090b] p-6 md:p-7 rounded-2xl border border-zinc-900 shadow-2xl">
                    <h3 class="text-lg font-serif font-bold text-white mb-6 uppercase tracking-widest">Get in Touch</h3>

                    <form action="{{ route('contact') }}" method="POST">
                        @csrf
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4 mb-4">
                            <input type="text" name="name" placeholder="Name" required 
                                class="w-full bg-[#18181b] border border-zinc-800 rounded-lg px-3.5 py-2.5 text-xs text-zinc-300 placeholder-zinc-600 focus:ring-1 focus:ring-[#441424] focus:border-[#441424] outline-none transition-all">
                            
                            <input type="email" name="email" placeholder="Email" required 
                                class="w-full bg-[#18181b] border border-zinc-800 rounded-lg px-3.5 py-2.5 text-xs text-zinc-300 placeholder-zinc-600 focus:ring-1 focus:ring-[#441424] focus:border-[#441424] outline-none transition-all">
                        </div>

                        <div class="mb-4">
                            <input type="text" name="phone_number" placeholder="Phone Number" required 
                                   class="w-full bg-[#18181b] border border-zinc-800 rounded-lg px-3.5 py-2.5 text-xs text-zinc-300 placeholder-zinc-600 focus:ring-1 focus:ring-[#441424] focus:border-[#441424] outline-none transition-all">
                        </div>
                        
                        <div class="mb-6">
                            <textarea name="message" rows="4" placeholder="Your Message" required 
                                class="w-full bg-[#18181b] border border-zinc-800 rounded-lg px-3.5 py-2.5 text-xs text-zinc-300 placeholder-zinc-600 focus:ring-1 focus:ring-[#441424] focus:border-[#441424] outline-none transition-all resize-none"></textarea>
                        </div>

                        <button type="submit" class="w-full md:w-auto bg-gradient-to-b from-[#441425] to-[#2B0C1F] text-white px-8 py-3 rounded-lg text-[10px] font-serif font-bold uppercase tracking-[0.2em] active:scale-95 transition-all shadow-lg shadow-[#441424]/20 border border-[#441424]/30">
                            Send Message
                        </button>
                    </form>
                </div>

                <div class="lg:pt-2">
                    <h3 class="text-xl font-serif font-bold text-white mb-3 uppercase tracking-widest relative inline-block">
                        Contact Admin Lexvin
                        <span class="block w-10 h-0.5 bg-[#441424] mt-1.5"></span>
                    </h3>
                    <p class="text-gray-400 text-xs mb-8 leading-relaxed max-w-sm">
                        Contact our customer service for quick assistance regarding legal consultations, corporate pricing, or any technical inquiries.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-3"> <a href="https://www.instagram.com/Lexvin.law" target="_blank" class="bg-zinc-900/40 p-4 rounded-xl border border-white/5 flex items-start gap-3 hover:border-[#441424]/50 hover:bg-zinc-900/60 transition group">
                            <div class="w-9 h-9 bg-gradient-to-br from-[#441424] to-[#701a36] text-white flex items-center justify-center rounded-lg flex-shrink-0 shadow-lg group-hover:scale-105 transition">
                                <i class="fa-brands fa-instagram text-base"></i>
                            </div>
                            <div>
                                <h4 class="font-serif font-bold text-white text-[10px] mb-0.5 uppercase tracking-wider">Instagram</h4>
                                <p class="text-[10px] text-gray-400 leading-snug">@Lexvin.law</p>
                            </div>
                        </a>

                        <a href="https://wa.me/628138211002" target="_blank" class="bg-zinc-900/40 p-4 rounded-xl border border-white/5 flex items-start gap-3 hover:border-[#441424]/50 hover:bg-zinc-900/60 transition group">
                            <div class="w-9 h-9 bg-gradient-to-br from-[#441424] to-[#701a36] text-white flex items-center justify-center rounded-lg flex-shrink-0 shadow-lg group-hover:scale-105 transition">
                                <i class="fa-brands fab fa-whatsapp text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-serif font-bold text-white text-[10px] mb-0.5 uppercase tracking-wider">Whatsapp</h4>
                                <p class="text-[10px] text-gray-400 leading-snug">0877-6024-4895</p>
                            </div>
                        </a>

                        <a href="mailto:lexvinlawfirm@gmail.com" class="bg-zinc-900/40 p-4 rounded-xl border border-white/5 flex items-start gap-3 hover:border-[#441424]/50 hover:bg-zinc-900/60 transition group">
                            <div class="w-9 h-9 bg-gradient-to-br from-[#441424] to-[#701a36] text-white flex items-center justify-center rounded-lg flex-shrink-0 shadow-lg group-hover:scale-105 transition">
                                <i class="fa-solid fa-envelope text-sm"></i>
                            </div>
                            <div>
                                <h4 class="font-serif font-bold text-white text-[10px] mb-0.5 uppercase tracking-wider">Email</h4>
                                <p class="text-[10px] text-gray-400 leading-snug">lexvin@mail.com</p>
                            </div>
                        </a>

                    </div>
                </div>

            </div>
        </div>
    </section>

    @include('partials.homebutton')
</body>
</html>