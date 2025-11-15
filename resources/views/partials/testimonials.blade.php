<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Testimonial Section</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
<style>
    body {
        background-color: #000;
        margin: 0;
    }
    .testimonial-section-wrapper {
        position: relative;
        margin-top: 80px;
    }
    .testimonial-header {
        background: linear-gradient(135deg, #2b0c1f, #451425);
        color: #ffffff;
        padding: 100px 20px 130px 20px;
        text-align: center;
    }
    .testimonial-body {
        background-color: #ffffff;
        padding-bottom: 100px;
    }
    .testimonial-container {
        max-width: 1100px;
        margin: 0 auto;
        position: relative;
        padding-left: 20px;
        padding-right: 20px;
    }
    .section-subtitle { font-size: 1rem; font-weight: 500; color: #ffffff; margin-bottom: 8px; text-transform: capitalize; }
    .section-title {
        font-family: 'Merriweather', serif;
        font-size: 2.5rem;
        margin: 0 0 16px 0;
        position: relative;
    }
    .section-description { max-width: 650px; margin: 0 auto; color: #e0e0e0; line-height: 1.7; }
    .slider-wrapper {
        margin-top: -80px; 
        position: relative;
        padding: 20px 40px;
    }
    .testimonial-card {
        background-color: #ffffff;
        color: #333;
        border-radius: 25px;
        padding: 15px 25px;
        box-shadow: 0 10px 30px rgba(41, 23, 30, 0.1);
        box-sizing: border-box;
        border: 2px solid #e0e0e0; 
        height: auto;
        display: flex;
        flex-direction: column;
        opacity: 0.4;
        transform: scale(0.9);
        transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out, opacity 0.4s ease-in-out;
    }
    
    .testimonial-card:hover,
    .swiper-slide-active.testimonial-card,
    .swiper-slide-next.testimonial-card {
        cursor: pointer;
        opacity: 1;
        transform: scale(1) translateY(0px);
        box-shadow: 0 18px 40px rgba(41, 23, 30, 0.15);
    }

    .testimonial-icon { 
        font-size: 2.5rem;
        color: #320a1e;
        margin-bottom: 12px;
        text-align: center;
    }
    .testimonial-text { 
        font-size: 0.85rem;
        line-height: 1.7;
        color: #555; 
        margin: 0 0 12px 0;
        font-style: italic; 
        flex-grow: 1; 
        text-align: left;
    }
    .testimonial-author { text-align: center; }
    .testimonial-author .author-name { font-weight: 600; color: #333; margin: 0; font-size: 1.1rem; }
    .testimonial-author .author-title { font-size: 0.9rem; color: #999; margin-top: 4px; }
    .swiper-button-prev, .swiper-button-next {
        background-color: #3e101d;
        color: #fff;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        transition: all 0.3s;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .swiper-button-prev:hover, .swiper-button-next:hover {
        background-color: #3e101d;
        transform: scale(1.1);
    }
    .swiper-button-prev::after, .swiper-button-next::after { font-size: 1rem; font-weight: bold; }
    
    
    .swiper-button-prev { left: 10px; }
    .swiper-button-next { right: 10px; }
   
    .slider-pagination { margin-top: 40px; position: relative; bottom: auto; }
    .swiper-pagination-bullet {
        width: 10px;
        height: 10px;
        background-color: #d1b8c1;
        opacity: 1;
        transition: all 0.3s;
    }
    .swiper-pagination-bullet-active {
        background-color: #3e101d;
        width: 25px;
        border-radius: 5px;
    }
    @media (max-width: 768px) {
        .section-title { font-size: 2rem; }
        .slider-wrapper { padding: 20px 0; }
        .swiper-button-prev, .swiper-button-next { display: none; }
    }
</style>
</head>
<body>
    <section id="testimonials">
    <div class="testimonial-section-wrapper">
        <div class="testimonial-header">
            <div class="testimonial-container">
                <p class="section-subtitle">Testimonials</p>
                <h2 class="section-title">WHAT OUR CLIENTS SAY</h2>
                <p class="section-description">
                    We are proud to provide exceptional legal services and build strong, long-term relationships with our clients, featuring experiences from some of our satisfied partners.
                </p>
            </div>
        </div>
        
        <div class="testimonial-body">
            <div class="testimonial-container">
                <div class="swiper slider-wrapper">
                    <div class="swiper-wrapper testimonial-list">
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"Lexvin provides not just legal solutions, but also strategies that make our business more structured. We feel we have a partner who truly understands our company's needs, not just an ordinary consultant."</p>
                            <div class="testimonial-author">
                                <p class="author-name">Rani</p>
                                <p class="author-title">Tech Startup Director</p>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"We faced a contract issue with a business partner. The Lexvin team helped negotiate a very favorable outcome for us. The company's assets were also well-protected. Their service is professional, fast, and reliable."</p>
                            <div class="testimonial-author">
                                <p class="author-name">Budi</p>
                                <p class="author-title">Property Investor</p>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"The acquisition process is usually complex and risky, but Lexvin made it clear and structured. They ensured all legal and business aspects were protected, so the business transaction proceeded smoothly without obstacles."</p>
                            <div class="testimonial-author">
                                <p class="author-name">Claudia</p>
                                <p class="author-title">Commissioner of a Private Hospital</p>
                            </div>
                        </div>
                        <div class="swiper-slide testimonial-card">
                            <div class="testimonial-icon"><i class="fas fa-quote-left"></i></div>
                            <p class="testimonial-text">"When our company faced a lawsuit, the Lexvin Legal Partner team came with the right settlement strategy. Their approach was professional, calm, and the result truly saved our company's legal position."</p>
                            <div class="testimonial-author">
                                <p class="author-name">Arif</p>
                                <p class="author-title">Manufacturing Company Director</p>
                            </div>
                        </div>
                    </div>
                    
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
                <div class="swiper-pagination slider-pagination"></div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

    <script>
        const swiper = new Swiper('.swiper', {
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1,
            breakpoints: {
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                }
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
    </script>
    </section>
</body>
</html>