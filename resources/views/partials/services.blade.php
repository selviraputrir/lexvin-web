<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services - Featured</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <style>
        :root {
            --background-color: #000;
            --card-bg: #451425; /* Maroon/Dark Wine */
            --primary-accent: #B89B65; /* Gold */
            --text-primary: #ffffff; /* White */
            --text-secondary: #d1d1d1;
            --border-color: #B89B65; /* Gold Border */
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Lato', sans-serif;
        }

        *, *::before, *::after { box-sizing: border-box; }

        /* HANYA SET FONT & BACKGROUND GLOBAL */
        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100vh;
            background-color: var(--background-color); 
            font-family: var(--font-body);
        }
        
        /* FIX ULTIMATE UNTUK MENGHILANGKAN BACKGROUND PUTIH & MENJADIKAN HITAM UTUH */
        #services-featured {
            background-color: var(--background-color) !important; /* Paksa hitam untuk seluruh section */
            width: 100%;
            padding: 50px 20px; /* Padding untuk ruang nafas atas dan bawah */
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* --- Title Styling --- */
        .services-title {
            text-align: center;
            margin: 0 0 40px; 
            font-size: 40px;
            color: var(--text-primary);
            border-bottom: 2px solid var(--primary-accent);
            padding-bottom: 10px;
            width: auto;
            max-width: 400px;
            font-family: var(--font-heading);
            text-transform: lowercase;
        }

        /* --- Featured Block Styling --- */
        .featured-service-block {
            background-color: var(--card-bg);
            border: 2px solid var(--border-color);
            border-radius: 12px;
            padding: 50px 40px;
            margin: 0; 
            max-width: 700px;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.7);
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .featured-service-block p {
            font-size: 20px;
            color: var(--text-primary);
            line-height: 1.6;
            margin-bottom: 30px;
            font-family: var(--font-heading);
        }

        /* PERBAIKAN: Tombol sekarang berbentuk KAPSUL (border-radius: 50px) */
        .more-details-button {
            background: transparent;
            color: var(--text-primary); /* Warna teks PUTIH */
            border: 2px solid var(--text-primary); /* Warna border PUTIH */
            padding: 10px 30px;
            border-radius: 50px; /* DIUBAH MENJADI 50px UNTUK EFEK KAPSUL */
            font-weight: 700;
            font-family: var(--font-body);
            transition: all 0.3s ease;
            text-decoration: none;
            text-transform: uppercase;
        }

        .more-details-button:hover {
            background: var(--text-primary); /* Background PUTIH saat hover */
            color: var(--card-bg); /* Teks MARUN saat hover */
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5); /* Bayangan putih */
        }
        
        @media (max-width: 768px) {
            .featured-service-block {
                padding: 30px 20px;
            }
        }
    </style>
</head>

<body>
    <section id="services-featured">
        <h2 class="services-title">our services</h2>

        <div class="featured-service-block">
            <p>
                "Precision, Promptness, Power. Our services are calibrated to turn legal risks into strategic opportunities, 
                delivering solutions that are swift, clear, and perfectly aligned with your objectives."
            </p>
            
            <a href="{{ route('layanan.detail', ['id' => 1]) }}#litigation-support" class="more-details-button">
                MORE DETAILS
            </a>
        </div>
    </section>
</body>
</html>