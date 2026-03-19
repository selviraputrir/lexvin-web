<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta name="google-site-verification" content="RKpHBGEEfHIBM0ZgetWez8rYNp4vgzbdr-KDCit7t0U" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lexvin Law Firm | Solusi Hukum Bisnis & Perusahaan</title>
    <link rel="icon" href="{{ asset('images/logo-lexvinlaw.jpeg') }}" type="image/jpeg">

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


</body>
</html>