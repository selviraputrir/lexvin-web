<<<<<<< HEAD
<section class="bg-black py-16">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-2xl font-serif font-bold text-white uppercase tracking-widest relative inline-block">
                OUR SERVICES
                <span class="block w-12 h-0.5 bg-[#B89B65] mx-auto mt-2"></span>
            </h2>
=======
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
            --card-bg: #451425; 
            --primary-accent: #B89B65; 
            --text-primary: #ffffff; 
            --text-secondary: #d1d1d1;
            --border-color: #B89B65; 
            --font-heading: 'Playfair Display', serif;
            --font-body: 'Lato', sans-serif;
        }

        *, *::before, *::after { box-sizing: border-box; }

        html, body {
            margin: 0;
            padding: 0;
            width: 100%;
            min-height: 100vh;
            background-color: var(--background-color); 
            font-family: var(--font-body);
            scroll-behavior: smooth; 
        }
        
        
        #services-featured {
            background-color: var(--background-color) !important; 
            width: 100%;
            padding: 50px 20px;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

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

        .more-details-button {
            background: transparent;
            color: var(--text-primary); 
            border: 2px solid var(--text-primary); 
            padding: 10px 30px;
            border-radius: 50px; 
            font-weight: 700;
            font-family: var(--font-body);
            transition: all 0.3s ease;
            text-decoration: none;
            text-transform: uppercase;
        }

        .more-details-button:hover {
            background: var(--text-primary); 
            color: var(--card-bg); 
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5); 
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

        <div class="featured-service-block"data-aos="fade-down"data-aos-easing="linear"data-aos-duration="1000">
            <p>
                "Precision, Promptness, Power. Our services are calibrated to turn legal risks into strategic opportunities, 
                delivering solutions that are swift, clear, and perfectly aligned with your objectives."
            </p>
            
            <a href="{{ route('layanan.detail', ['id' => 1]) }}#litigation-support" class="more-details-button">
                MORE DETAILS
            </a>
>>>>>>> bec5ab4c74df805ac783ec3d4fa1081880e55f6d
        </div>

        {{-- Penambahan class 'justify-center' agar 3 kartu ini berkumpul di tengah --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-3 justify-center gap-6 max-w-5xl mx-auto">
            
            {{-- Legal Consultant --}}
            <div class="bg-gradient-to-b from-[#441425] to-[#2B0C1F] rounded-2xl p-6 text-center shadow-xl hover:-translate-y-2 transition-all duration-300 flex flex-col justify-between border border-white/5 w-full group">
                <div>
                    <div class="mb-5 flex justify-center">
                        <div class="w-12 h-12 bg-white/5 rounded-full flex items-center justify-center border border-white/10 group-hover:border-[#B89B65]/40 transition-all">
                            <i class="fa-solid fa-scale-balanced text-lg text-white"></i> 
                        </div>
                    </div>
                    <h3 class="text-white font-serif font-bold text-sm mb-2 tracking-wide leading-tight">Legal Consultant</h3>
                    <p class="text-gray-400 text-[11px] leading-relaxed mb-6 font-light">
                        Strategic consulting sessions to address business and personal legal needs.
                    </p>
                </div>
                <a href="{{ route('detail.legalconsultant') }}" class="bg-[#B89B65] text-black font-bold py-2 px-4 rounded-full text-[9px] uppercase tracking-wider hover:bg-white transition shadow-lg">
                    Learn More
                </a>
            </div>

            {{-- Dispute Resolution --}}
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

            {{-- Corporate Actions --}}
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