<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LEXVIN</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-ivory-white font-sans antialiased text-gray-800 relative">

    <main>
        @yield('content')
    </main>


    <div class="fixed bottom-8 right-8 z-50 group">
        <div class="absolute inset-0 rounded-full bg-green-500 opacity-75 animate-ping"></div>

        <a href="https://wa.me/6281234567890?text=Halo%20Admin,%20saya%20butuh%20bantuan" 
           target="_blank"
           class="relative flex items-center justify-center w-16 h-16 bg-[#25d366] text-white rounded-full shadow-xl shadow-green-500/40 transition-all duration-300 transform group-hover:scale-110 group-hover:-translate-y-1">
            
            <i class="fab fa-whatsapp text-4xl"></i>
            
            <span class="absolute right-20 bg-white text-gray-800 text-xs font-bold px-3 py-1.5 rounded shadow-lg opacity-0 group-hover:opacity-100 transition-opacity duration-300 whitespace-nowrap pointer-events-none">
               send message
            </span>
        </a>
    </div>

</body>
</html>