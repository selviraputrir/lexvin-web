<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Lexvin</title>
    <link rel="icon" href="{{ asset('images/logo-lexvinlaw.jpeg') }}" type="image/jpeg">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        /* Memastikan elemen yang disembunyikan Alpine tidak berkedip saat load */
        [x-cloak] { display: none !important; }
    </style>
</head>

<body class="bg-[#f0f2f5]">

    <div class="flex">
        <aside class="w-[16.666667%] min-h-screen bg-[#441425] text-white fixed flex flex-col">
            
            <div class="p-6 flex justify-center">
                <img src="{{ asset('images/logo.png') }}" alt="Lexvin Law" class="h-16 w-auto object-contain rounded">
            </div>

            <nav class="flex-1 px-3" x-data="{ openMenu: null }">
                
                <a href="{{ route('admin.dashboard') }}" 
                   class="flex items-center text-white no-underline py-[10px] px-[15px] mb-[5px] rounded-[5px] hover:bg-[#2c2c2c] transition-colors">
                    <i class="bi bi-speedometer2 me-2"></i> Dashboard
                </a>

                <div class="mb-[5px]">
                    <button @click="openMenu = (openMenu === 'posts' ? null : 'posts')"
                        class="w-full flex items-center justify-between text-white py-[10px] px-[15px] rounded-[5px] hover:bg-[#2c2c2c] transition-colors">
                        <span><i class="bi bi-pin-angle-fill me-2"></i> Posts</span>
                        <i class="bi bi-chevron-down text-[12px] transition-transform" :class="openMenu === 'posts' ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openMenu === 'posts'" x-cloak class="bg-[#212529] py-2 rounded-[5px] mt-1">
                        <a href="{{ route('admin.pos.index') }}" class="block text-[#a7aaad] no-underline py-2 px-[15px] pl-[40px] text-[14px] hover:text-white transition-colors">All Posts</a>
                        <a href="{{ route('admin.pos.create') }}" class="block text-[#a7aaad] no-underline py-2 px-[15px] pl-[40px] text-[14px] hover:text-white transition-colors">Add New</a>
                    </div>
                </div>

                <div class="mb-[5px]">
                    <button @click="openMenu = (openMenu === 'testi' ? null : 'testi')"
                        class="w-full flex items-center justify-between text-white py-[10px] px-[15px] rounded-[5px] hover:bg-[#2c2c2c] transition-colors">
                        <span><i class="bi bi-chat-left-quote-fill me-2"></i> Testimonial</span>
                        <i class="bi bi-chevron-down text-[12px] transition-transform" :class="openMenu === 'testi' ? 'rotate-180' : ''"></i>
                    </button>
                    <div x-show="openMenu === 'testi'" x-cloak class="bg-[#212529] py-2 rounded-[5px] mt-1">
                        <a href="{{ route('admin.testimonial.index') }}" class="block text-[#a7aaad] no-underline py-2 px-[15px] pl-[40px] text-[14px] hover:text-white transition-colors">All Testimonial</a>
                        <a href="{{ route('admin.testimonial.create') }}" class="block text-[#a7aaad] no-underline py-2 px-[15px] pl-[40px] text-[14px] hover:text-white transition-colors">Add New</a>
                    </div>
                </div>

            </nav>

            <div class="p-4 space-y-3">
                <form action="{{ route('admin.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="w-full text-red-500 border border-red-500 bg-transparent py-1 px-2 rounded text-sm hover:bg-red-500 hover:text-white transition-all">
                        LOGOUT
                    </button>
                </form>

                <a href="{{ url('/') }}" class="block w-full text-center bg-red-600 text-white py-2 px-2 rounded-lg text-xs font-bold hover:bg-red-700 transition-colors no-underline shadow-lg">
                    KELUAR HALAMAN ADMIN
                </a>
            </div>
        </aside>

        <main class="ml-[16.666667%] w-[83.333333%] p-8 min-h-screen">
            @yield('content')
        </main>
    </div>

</body>

</html>