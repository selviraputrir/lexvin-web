<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Footer Section</title>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@700&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"/>

    <style>
        body {
            margin: 0;
            font-family: 'Poppins', sans-serif;
            background-color: #121212; 
        }

        .site-footer {
            background: linear-gradient(135deg, #550e27, #171717);
            color: #b0b0b0;
            padding: 100px 0 40px 0;
            font-size: 0.95rem;
            line-height: 1.7;
            position: relative;
            overflow: hidden;
        }

        .footer-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .footer-grid {
            display: flex;
            flex-wrap: wrap;
            gap: 40px;
            margin-bottom: 50px;
        }

        .footer-column.about {
            flex: 2;
            min-width: 300px;
        }
        .footer-column {
            flex: 1;
            min-width: 220px;
        }

        .footer-column h3 {
            font-family: 'Merriweather', serif;
            color: #ffffff;
            font-size: 1.3rem;
            margin-top: 0;
            margin-bottom: 25px;
            position: relative;
            padding-bottom: 10px;
        }
        .footer-column h3::after {
            content: '';
            position: absolute;
            left: 0;
            bottom: 0;
            width: 40px;
            height: 2px;
            background-color: #B89B65;
        }

        .footer-logo {
            font-family: 'Merriweather', serif;
            color: #B89B65 !important;
            font-size: 2rem !important;
            letter-spacing: 2px;
        }
        .footer-logo::after {
            display: none;
        }


        .footer-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .footer-list li {
            margin-bottom: 12px;
        }

        .footer-list a {
            color: #b0b0b0;
            text-decoration: none;
            transition: color 0.3s ease;
            position: relative;
            display: inline-block;
        }

        .footer-list a::after {
            content: '';
            position: absolute;
            width: 100%;
            transform: scaleX(0);
            height: 1px;
            bottom: -2px;
            left: 0;
            background-color: #B89B65;
            transform-origin: bottom right;
            transition: transform 0.3s ease-out;
        }
        .footer-list a:hover {
            color: #ffffff;
        }
        .footer-list a:hover::after {
            transform: scaleX(1);
            transform-origin: bottom left;
        }

        .contact-info .fas {
            width: 25px;
            color: #B89B65;
            font-size: 1rem;
        }
        
        .social-icons {
            display: flex;
            gap: 15px;
            margin-top: 25px;
        }
        .social-icons a {
            color: #b0b0b0;
            font-size: 1.1rem;
            transition: transform 0.3s ease, color 0.3s ease, background-color 0.3s ease;
            width: 40px;
            height: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            border: 1px solid #444;
            text-decoration: none;
        }
        .social-icons a:hover {
            color: #1a1a1a;
            background-color: #B89B65;
            border-color: #B89B65;
            transform: translateY(-3px);
        }

        .footer-bottom {
            margin-top: 50px;
            padding-top: 30px;
            border-top: 1px solid rgba(255, 255, 255, 0.1); 
            font-size: 0.9rem;
            color: #a0a0a0;
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
            gap: 15px;
        }
        .footer-bottom-links a {
            color: #a0a0a0;
            text-decoration: none;
            margin-left: 20px;
            transition: color 0.3s ease;
        }
        .footer-bottom-links a:hover {
            color: #ffffff;
        }

        @media (max-width: 768px) {
            .footer-grid {
                flex-direction: column;
                gap: 30px;
            }
            .footer-column.about {
                min-width: unset;
                flex: none;
            }
            .footer-column {
                min-width: unset;
                flex: none;
                width: 100%; 
                text-align: center;
            }
            .footer-column h3, .footer-logo {
                text-align: center;
            }
            .footer-column h3::after {
                left: 50%;
                transform: translateX(-50%);
            }
            .social-icons {
                justify-content: center;
            }
            .footer-list {
                text-align: center;
            }
            .footer-bottom {
                flex-direction: column;
                gap: 10px;
            }
            .footer-bottom-links a {
                margin: 0 10px;
            }
        }
    </style>
</head>
<body>

    <footer class="site-footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-column about">
                    <h3 class="footer-logo">LEXVIN</h3>
                    <p>
                        Providing innovative and practical legal solutions to protect and grow your business in the digital era.
                    </p>
                </div>

                <div class="footer-column">
                    <h3>Quick Links</h3>
                    <ul class="footer-list">
                        <li><a href="#home">HOME</a></li>
                        <li><a href="#about">ABOUT</a></li>
                        <li><a href="#our services">OUR SERVICES</a></li>
                        <li><a href="#our clients">TESTIMONIALS</a></li>
                    </ul>
                </div>

                <div class="footer-column">
                    <h3>Contact Us</h3>
                    <ul class="footer-list contact-info">
                        <li><i class="fas fa-map-marker-alt"></i> Jl. ciawi bitung sari</li>
                        <li><i class="fas fa-phone"></i> +628-3876-3996-88</li>
                        <li><i class="fas fa-envelope"></i> contact@lexvin.co.id</li>
                    </ul>
                </div>
            </div>

            </div>
        </div>
    </footer>

    <script>
        document.getElementById('copyright-year').innerHTML = `&copy; ${new Date().getFullYear()} LEXVIN. All Rights Reserved.`;
    </script>

</body>
</html>