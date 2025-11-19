@extends('layouts.app')
  
{{-- ... (BLOK STYLE CSS DITEMPATKAN DI SINI) ... --}}
<style>
    /* VARIABEL WARNA DAN FONT DARI KODE ANDA UNTUK KONSISTENSI */
    :root {
        --primary-accent: #B89B65; /* Emas */
        --text-secondary: #d1d1d1; /* Abu-abu terang (deskripsi) */
        --card-gradient-start: #451425; /* Marun Gelap (dari kode awal Anda) */
        --card-gradient-end: #1a080f; /* Hitam Marun (dari kode awal Anda) */
        --font-heading: 'Playfair Display', serif;
        --font-body: 'Lato', sans-serif;
    }

    /* Penyesuaian umum untuk class container Tailwind Anda */
    .container.mx-auto {
        margin-left: auto;
        margin-right: auto;
        padding-left: 1rem;
        padding-right: 1rem;
    }

    /* 1. Style Breadcrumb */
    .breadcrumb-section {
        background-color: transparent !important; 
        padding: 20px 0;
    }
    
    .breadcrumb-section p {
        margin: 0;
        color: var(--text-secondary);
        font-size: 14px;
        font-family: var(--font-body); /* FONT BODY */
    }

    /* 2. Style Konten Detail */
    .service-detail-section {
        padding: 80px 0; 
        color: #ffffff; 
    }

    .service-detail-wrapper {
        display: flex;
        flex-wrap: wrap; 
        gap: 50px;       
    }

    /* Kolom Kiri: Konten Teks */
    .service-content {
        flex: 2; 
        min-width: 300px; 
    }

    .service-content h2 {
        font-size: 36px;
        color: #ffffff;
        margin-bottom: 10px;
        font-weight: 700; 
        font-family: var(--font-heading); /* FONT JUDUL */
    }

    .service-content .divider {
        display: block;
        width: 60px;
        height: 3px;
        background-color: var(--primary-accent); /* Emas */
        margin-bottom: 30px; 
    }

    .service-content p,
    .service-content ul {
        font-size: 16px;
        line-height: 1.7;
        color: #ffffff;
        margin-bottom: 25px; 
        font-family: var(--font-body); /* FONT BODY */
    }

    .service-content ul {
        list-style: none;
        padding-left: 0;
    }

    .service-content ul li {
        padding-left: 25px;
        position: relative;
        margin-bottom: 12px;
    }

    .service-content ul li::before {
        content: '\2022'; 
        position: absolute;
        left: 0;
        top: 0;
        color: var(--primary-accent); /* Emas */
        font-weight: bold;
        margin-right: 10px;
    }

    .service-content strong {
        font-weight: 700;
    }


    /* Kolom Kanan: Sidebar Boks */
    .service-sidebar {
        flex: 1; 
        min-width: 300px;
        display: flex;
        flex-direction: column;
        gap: 25px;
        padding-top: 5px; 
    }
    
    .service-box {
        /* Menggunakan gradient marun gelap dari kode awal Anda */
        background: linear-gradient(135deg, var(--card-gradient-start), var(--card-gradient-end)); 
        border: 1px solid #ffffff; /* Garis tepi Putih tipis */
        border-radius: 4px; 
        padding: 25px;
        text-align: left; 
        transition: background-color 0.3s ease, box-shadow 0.3s ease, transform 0.3s ease;
        box-shadow: none; 
        
        /* PERBAIKAN PENTING: Untuk tautan */
        text-decoration: none; /* Hapus garis bawah link */
        display: block; /* Memastikan tautan mengisi seluruh area */
        color: #ffffff; /* Memastikan warna teks default adalah putih */
    }

    .service-box:hover {
        transform: translateY(-3px); 
        box-shadow: 0 5px 15px rgba(184, 155, 101, 0.4); 
    }

    .service-box i {
        font-size: 30px; 
        color: var(--primary-accent); /* Emas */
        margin-right: 15px; 
        margin-bottom: 0;
        float: left; 
    }

    .service-box h3 {
        font-size: 18px;
        color: #ffffff;
        margin-bottom: 5px; 
        font-weight: 600;
        line-height: 1.2;
        padding-top: 3px;
        text-align: left;
        font-family: var(--font-heading); /* FONT JUDUL */
    }

    .service-box p {
        font-size: 13px; 
        color: var(--text-secondary); /* Abu-abu Terang */
        line-height: 1.5;
        margin: 0;
        padding-top: 5px; 
        clear: both; 
        font-family: var(--font-body); /* FONT BODY */
    }
    
    /* Penyesuaian untuk layar kecil (Mobile) */
    @media (max-width: 768px) {
        .service-detail-wrapper {
            flex-direction: column; 
        }
        
        .service-content h2 {
            font-size: 28px;
        }
    }
</style>

@section('content')
<main>
    <div class="bg-black pt-7 min-h-screen">

        {{-- Top Hero/Header Section (Navbar) --}}
        <section id="home" class="relative container mx-auto" style="height: 50%;">
            <div class="absolute inset-0 bg-center bg-no-repeat bg-cover rounded-xl"
                style="background-image: url('{{ asset('images/background-hero.jpg') }}');">
                <div class="absolute inset-0 bg-black/50 rounded-xl"></div>
            </div>

            <div class="relative z-10 flex flex-col h-full">
                           <header class="flex items-center ">
                <div
                    class="bg-black py-4 px-35 [clip-path:polygon(0_0,100%_0,95%_100%,0_100%)] flex items-center gap-12">
                    <a href="/">
                        <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class="h-6 w-auto">
                    </a>
                    <nav class="hidden items-center space-x-10 text-base font-serif md:flex ml-16 text-white">
    
    <a href="#home" class="nav-link hover:opacity-80">Home</a>
    <a href="#about" class="nav-link hover:opacity-80">About</a>
    <a href="#services" class="nav-link hover:opacity-80">Our Services</a> 
    <a href="#testimonials" class="nav-link hover:opacity-80">Testimonials</a> 

</nav>
                </div>
                <a href="https://wa.me/6281234567890?text=Halo, saya ingin bertanya tentang Litigation Support." 
                    class="hidden rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white transition-opacity hover:opacity-90 md:block">
                    Contact Us
                </a>
            </header>

            </div>
        </section>
        <section class="service-detail-section">
            <div class="container mx-auto">
                <div class="service-detail-wrapper">

                    {{-- KOLOM KIRI: Teks Deskripsi --}}
                    <div class="service-content"> 
                        <h2>Legal Consultan</h2>
                        <span class="divider"></span>

                        <p>
                            Strategic consulting sessions to address both business and personal legal needs. This is an initial or gateway service for clients. Anyone (either on behalf of an individual or a company) with legal questions, concerns, or concepts can schedule a private session with an attorney.
                        </p>
                        
                        <p>
                            In this session, the client will explain their situation, and the attorney will:
                        </p>
                        
                        <ul>
                            <li><strong>Analyze the Problem:</strong> Identify the core legal issues they face.</li>
                            <li><strong>Provide Legal Advice:</strong> Explain the client's legal position, rights, and obligations.</li>
                            <li><strong>Develop a Strategy:</strong> Provide recommendations on strategic steps to take, potential risks, and the most effective solutions.</li>
                        </ul>
                        
                        <p>
                            This service can be used for a variety of matters, from inheritance or prenuptial agreements (personal) to simple contract disputes or business establishments.
                        </p>
                    </div>

                    {{-- KOLOM KANAN: Boks Layanan Terkait --}}
                    <div class="service-sidebar">

                        <a href="{{ route('layanan.detail', ['id' => 1]) }}" class="service-box">
                            <i class="fas fa-briefcase"></i> 
                            <h3>Corporate Legal Retainer</h3>
                            <p>Ongoing legal services for companies that need long-term legal partners.</p>
                        </a>

                        <a href="{{ route('layanan.detail', ['id' => 2]) }}" class="service-box">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Corporate Actions</h3>
                            <p>Assistance in mergers, acquisitions, consolidations, and business liquidations.</p>
                        </a>

                        <a href="{{ route('layanan.detail', ['id' => 3]) }}" class="service-box">
                            <i class="fas fa-users"></i>
                            <h3>Litigation Support</h3>
                            <p>A team of litigation experts ready to defend and accompany clients in mentoring and criminal business cases.</p>
                        </a>

                    </div>
                </div>
            </div> 
        </section>

    </div>
    
    @include('partials.footer')
</main>
@endsection