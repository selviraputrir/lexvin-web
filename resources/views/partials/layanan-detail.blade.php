@extends('layouts.app')

@section('content')

{{-- 1. STYLE CSS KHUSUS HALAMAN INI --}}
<style>
    :root {
        --primary-accent: #B89B65; /* Emas */
        --text-secondary: #d1d1d1; /* Abu terang */
        --card-gradient-start: #451425; /* Marun Gelap */
        --card-gradient-end: #1a080f; /* Hitam Marun */
        --font-heading: 'Playfair Display', serif;
        --font-body: 'Lato', sans-serif;
    }

    /* Hero & Layout */
    .bg-black { background-color: black; }
    .custom-margin-2 { background: black; margin-left: -70px; z-index: 100; }
    .nav-link { color: white; text-decoration: none; transition: 0.3s; }
    .nav-link:hover { opacity: 0.8; color: var(--primary-accent); }

    /* Service Section */
    .service-detail-section { padding: 80px 0; color: #ffffff; }
    .service-detail-wrapper { display: flex; flex-wrap: wrap; gap: 50px; }

    /* Kolom Kiri (Konten) */
    .service-content { flex: 2; min-width: 300px; }
    .service-content h2 { 
        font-size: 36px; color: #ffffff; margin-bottom: 10px; 
        font-weight: 700; font-family: var(--font-heading); 
    }
    .service-content .divider { 
        display: block; width: 60px; height: 3px; 
        background-color: var(--primary-accent); margin-bottom: 30px; 
    }
    .service-content p, .service-content ul { 
        font-size: 16px; line-height: 1.7; color: #e0e0e0; 
        margin-bottom: 25px; font-family: var(--font-body); 
    }
    .service-content ul { list-style: none; padding-left: 0; }
    .service-content ul li { position: relative; padding-left: 25px; margin-bottom: 12px; }
    .service-content ul li::before { 
        content: '\2022'; position: absolute; left: 0; top: 0; 
        color: var(--primary-accent); font-weight: bold; font-size: 1.2em; 
    }

    /* Kolom Kanan (Sidebar Tombol) */
    .service-sidebar { flex: 1; min-width: 300px; display: flex; flex-direction: column; gap: 20px; }
    
    .service-box {
        background: linear-gradient(135deg, var(--card-gradient-start), var(--card-gradient-end));
        border: 1px solid rgba(255,255,255,0.2);
        border-radius: 8px;
        padding: 25px;
        cursor: pointer;
        transition: all 0.3s ease;
    }

    .service-box:hover {
        transform: translateY(-5px);
        border-color: var(--primary-accent);
    }

    /* Style kotak saat AKTIF (Dipilih) */
    .service-box.active {
        background: var(--primary-accent); /* Jadi warna Emas */
        border-color: var(--primary-accent);
        transform: scale(1.02);
        box-shadow: 0 10px 20px rgba(0,0,0,0.3);
    }
    
    .service-box.active h3, 
    .service-box.active p, 
    .service-box.active i {
        color: #1a080f !important; /* Teks jadi gelap agar terbaca di background emas */
    }

    .service-box i { font-size: 28px; color: var(--primary-accent); margin-bottom: 15px; display: block; }
    .service-box h3 { font-size: 18px; color: #ffffff; margin-bottom: 8px; font-family: var(--font-heading); font-weight: 600; }
    .service-box p { font-size: 13px; color: var(--text-secondary); margin: 0; font-family: var(--font-body); }

    @media (max-width: 768px) {
        .service-detail-wrapper { flex-direction: column; }
    }
</style>

<main>
    <div class="bg-black pt-7 min-h-screen">

        {{-- 2. HERO SECTION (GAMBAR & NAVBAR) --}}
        <section id="home" class="relative container mx-auto" style="height: 60vh;">
            {{-- Background Image --}}
            <div class="absolute inset-0 bg-center bg-no-repeat bg-cover rounded-xl"
                style="background-image: url('{{ asset('images/background-hero.jpg') }}');">
                <div class="absolute inset-0 bg-black/50 rounded-xl"></div>
            </div>

            <div class="relative z-10 flex flex-col h-full">
                {{-- Navbar --}}
                <header class="flex items-center justify-between p-4 md:p-0">
                    <div class="bg-black py-4 pl-20 pr-40 [clip-path:polygon(0_0,100%_0,96%_100%,0_100%)] flex items-center z-20">
                        <a href="/">
                            <img src="{{ asset('images/logo.png') }}" alt="LEXVIN" class="custom-margin-2 h-6 w-[200px]">
                        </a>
                        <nav class="hidden items-center space-x-10 text-base font-serif md:flex ml-16 text-white">
                            <a href="/" class="nav-link">Home</a>
                            <a href="/#about" class="nav-link">About</a>
                            <a href="/#services" class="nav-link">Our Services</a>
                            <a href="/#testimonials" class="nav-link">Testimonials</a>
                        </nav>
                    </div>

                    <a href="{{ route('contact.create') }}" class="hidden md:block rounded-xl bg-wine-red px-6 py-2 text-sm font-bold text-white hover:opacity-90 z-20 mr-4" style="margin-right: 50px;">
                        Contact Us
                    </a>
                </header>

                {{-- Judul Hero --}}
                
            </div>
        </section>

        {{-- 3. BAGIAN KONTEN LAYANAN (INTERAKTIF) --}}
        <section class="service-detail-section">
            <div class="container mx-auto px-4"> <div class="service-detail-wrapper">

                    {{-- KOLOM KIRI: Area Teks yang Berubah --}}
                    <div class="service-content">
                        <h2 id="service-title">Legal Consultant</h2>
                        <span class="divider"></span>

                        <div id="service-body">
                            {{-- Konten Awal (Default) --}}
                            <p>
                                Strategic consulting sessions to address both business and personal legal needs. This is an
                                initial or gateway service for clients. Anyone (either on behalf of an individual or a
                                company) with legal questions, concerns, or concepts can schedule a private session with an
                                attorney.
                            </p>
                            <p>In this session, the client will explain their situation, and the attorney will:</p>
                            <ul>
                                <li><strong>Analyze the Problem:</strong> Identify the core legal issues they face.</li>
                                <li><strong>Provide Legal Advice:</strong> Explain the client's legal position, rights, and obligations.</li>
                                <li><strong>Develop a Strategy:</strong> Provide recommendations on strategic steps to take, potential risks, and the most effective solutions.</li>
                            </ul>
                            <p>
                                This service can be used for a variety of matters, from inheritance or prenuptial agreements
                                (personal) to simple contract disputes or business establishments.
                            </p>
                        </div>
                    </div>

                    {{-- KOLOM KANAN: Tombol Pilihan --}}
                    <div class="service-sidebar">
                        
                        <div class="service-box active" onclick="changeService(1, this)">
                            <i class="fas fa-balance-scale"></i>
                            <h3>Legal Consultant</h3>
                            <p>Strategic consulting sessions to address business and personal legal needs.</p>
                        </div>

                        <div class="service-box" onclick="changeService(2, this)">
                            <i class="fas fa-briefcase"></i>
                            <h3>Corporate Legal Retainer</h3>
                            <p>Ongoing legal services for companies that need long-term legal partners.</p>
                        </div>

                        <div class="service-box" onclick="changeService(3, this)">
                            <i class="fas fa-lightbulb"></i>
                            <h3>Corporate Actions</h3>
                            <p>Assistance in mergers, acquisitions, consolidations, and business separations.</p>
                        </div>

                        <div class="service-box" onclick="changeService(4, this)">
                            <i class="fas fa-users"></i>
                            <h3>Litigation Support</h3>
                            <p>A team of litigation experts ready to defend and accompany clients in court.</p>
                        </div>

                    </div>

                </div>
            </div>
        </section>

    </div>

    @include('partials.footer')
</main>

{{-- 4. JAVASCRIPT LOGIC (Update Konten Tanpa Reload) --}}
<script>
    // Database Konten Teks
    const servicesData = {
        1: {
            title: "Legal Consultant",
            body: `
                <p>Strategic consulting sessions to address both business and personal legal needs. This is an initial or gateway service for clients. Anyone (either on behalf of an individual or a company) with legal questions can schedule a private session.</p>
                <p>In this session, the client will explain their situation, and the attorney will:</p>
                <ul>
                    <li><strong>Analyze the Problem:</strong> Identify the core legal issues they face.</li>
                    <li><strong>Provide Legal Advice:</strong> Explain the client's legal position, rights, and obligations.</li>
                    <li><strong>Develop a Strategy:</strong> Provide recommendations on strategic steps to take.</li>
                </ul>
                <p>This service covers inheritance, prenuptial agreements, contract disputes, and business establishments.</p>
            `
        },
        2: {
            title: "Corporate Legal Retainer",
            body: `
                <p>Our Corporate Legal Retainer service is designed for businesses seeking consistent, high-quality legal support without the overhead of an in-house legal department. We act as your external legal partners.</p>
                <p><strong>Services Included:</strong></p>
                <ul>
                    <li><strong>Contract Management:</strong> Drafting, reviewing, and negotiating business contracts.</li>
                    <li><strong>Regulatory Compliance:</strong> Ensuring your business meets all Indonesian laws and regulations.</li>
                    <li><strong>Legal Opinions:</strong> Providing formal written opinions on specific business actions.</li>
                    <li><strong>HR & Employment:</strong> Advising on labor laws and employee contracts.</li>
                </ul>
                <p>This ensures your company operates smoothly with minimized legal risks.</p>
            `
        },
        3: {
            title: "Corporate Actions",
            body: `
                <p>Executing major corporate moves requires precise legal structuring to ensure validity and compliance. We assist businesses in navigating complex transitions.</p>
                <p><strong>Our Expertise Includes:</strong></p>
                <ul>
                    <li><strong>Mergers & Acquisitions (M&A):</strong> Conducting due diligence and structuring deals.</li>
                    <li><strong>Restructuring:</strong> Reorganizing internal structures for efficiency or compliance.</li>
                    <li><strong>Spin-offs & Consolidations:</strong> Managing the legal separation or combination of entities.</li>
                    <li><strong>Liquidation:</strong> Proper legal handling of dissolving a business entity.</li>
                </ul>
                <p>We ensure every step aligns with the Company Law of Indonesia.</p>
            `
        },
        4: {
            title: "Litigation Support",
            body: `
                <p>When legal disputes cannot be resolved through negotiation, our litigation team stands ready to defend your rights in court. We handle civil, criminal, and commercial disputes with a strategic approach.</p>
                <p><strong>We Handle Cases Involving:</strong></p>
                <ul>
                    <li><strong>Commercial Disputes:</strong> Breach of contract, debt recovery, and shareholder disputes.</li>
                    <li><strong>Employment Litigation:</strong> Defense against wrongful termination claims.</li>
                    <li><strong>Criminal Defense:</strong> Representation in white-collar crime allegations related to business.</li>
                    <li><strong>Arbitration:</strong> Alternative dispute resolution outside of court.</li>
                </ul>
                <p>Our goal is to achieve the best possible outcome while protecting your reputation.</p>
            `
        }
    };

    // Fungsi Pengubah Konten
    function changeService(id, element) {
        // 1. Ambil data
        const data = servicesData[id];

        // 2. Update Tampilan
        if (data) {
            // Efek fade out/in sederhana (opsional, bisa dihapus kalau mau instan)
            const title = document.getElementById('service-title');
            const body = document.getElementById('service-body');
            
            title.style.opacity = 0;
            body.style.opacity = 0;

            setTimeout(() => {
                title.innerText = data.title;
                body.innerHTML = data.body;
                title.style.opacity = 1;
                body.style.opacity = 1;
            }, 200);
        }

        // 3. Update Tombol Aktif
        const boxes = document.querySelectorAll('.service-box');
        boxes.forEach(box => {
            box.classList.remove('active');
        });
        element.classList.add('active');
    }
</script>

{{-- Script tambahan untuk animasi fade --}}
<style>
    #service-title, #service-body {
        transition: opacity 0.3s ease-in-out;
    }
</style>

@endsection