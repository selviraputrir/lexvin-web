<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Our Services</title>



    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Playfair+Display:wght@700&display=swap"
        rel="stylesheet">

    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <style>
        :root {

            --background-color: #000;

            --card-gradient-start: #451425;

            --card-gradient-end: #1a080f;

            --primary-accent: #B89B65;

            --text-primary: #ffffff;

            --text-secondary: #d1d1d1;

            --border-color: #555;

            --font-heading: 'Playfair Display', serif;

            --font-body: 'Lato', sans-serif;

        }



        *,
        *::before,
        *::after {

            box-sizing: border-box;

        }



        html,
        body {

            width: 100%;

            height: 100%;

            margin: 0;

            background-color: var(--background-color);

            font-family: var(--font-body);

        }



        .services-title {

            text-align: center;

            margin: 40px auto;

            font-size: 40px;

            color: var(--text-primary);

            border-bottom: 2px solid var(--primary-accent);

            padding-bottom: 10px;

            width: 50%;

            max-width: 400px;

            font-family: var(--font-heading);

        }



        .services {

            display: grid;

            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));

            gap: 30px;

            padding: 0 20px 40px;

            max-width: 1200px;

            margin: 0 auto;

        }





        .card {

            background: linear-gradient(135deg, var(--card-gradient-start), var(--card-gradient-end));

            padding: 30px;

            border-radius: 12px;

            border: 1px solid var(--border-color);

            transition: all 0.4s ease-in-out;

            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.5);

            display: flex;

            flex-direction: column;

            height: 100%;

            cursor: pointer;
          

        }



        .card:hover {

            transform: translateY(-10px);

            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.7);

            border-color: var(--primary-accent);

        }



        .card .icon {

            font-size: 50px;

            margin-bottom: 20px;

            color: var(--primary-accent);

            transition: color 0.3s, transform 0.3s;

        }



        .card:hover .icon {

            transform: scale(1.1);

        }



        .card h3 {

            font-size: 22px;

            margin: 0 0 15px 0;

            color: var(--text-primary);

            font-family: var(--font-heading);

        }



        .card p {

            font-size: 15px;

            color: var(--text-secondary);

            line-height: 1.6;

            margin-bottom: 30px;

            flex-grow: 1;

        }





        .card-button {

            background: transparent;

            color: var(--text-primary);

            border: 2px solid var(--text-primary);

            padding: 10px 25px;

            border-radius: 50px;

            font-weight: bold;

            font-family: var(--font-body);

            transition: all 0.3s ease;

            text-align: center;

            display: inline-block;

            align-self: center;

            text-decoration: none;

        }



        .card .card-button:hover {

            background: var(--text-primary);

            color: var(--card-gradient-start);

            box-shadow: 0 0 10px rgba(255, 255, 255, 0.5);

        }
    </style>

</head>

<body>



    <section id="services">

        <h2 class="services-title">Our Services</h2>



        <div class="services">

            <div data-aos="zoom-in"data-aos-duration="1000">

                <div class="card" onclick="window.location.href='/halaman-konsultasi.html'">



                    <span class='bx bx-phone icon' aria-hidden="true"></span>

                    <h3>Legal Consultation</h3>

                    <p>Strategic consulting sessions to address both business and personal legal needs.</p>

                    <a href="https://wa.me/6283876399688?text=Halo, saya ingin bertanya tentang Legal Consultation."
                        class="card-button" onclick="event.stopPropagation()">

                        Contact Us

                    </a>

                </div>

            </div>





            <div data-aos="zoom-in"data-aos-duration="1000">

                <div class="card" onclick="window.location.href='/halaman-retainer.html'">



                    <span class='bx bx-briefcase icon' aria-hidden="true"></span>

                    <h3>Corporate Legal Retainer</h3>

                    <p>Ongoing legal services for companies that need long-term legal partners.</p>

                    <a href="https://wa.me/6283876399688?text=Halo, saya ingin bertanya tentang Corporate Legal Retainer."
                        class="card-button" onclick="event.stopPropagation()">

                        Contact Us

                    </a>

                </div>

            </div>



            <div data-aos="zoom-in"data-aos-duration="1000">

                <div class="card" onclick="window.location.href='/halaman-corporate.html'">



                    <span class='bx bx-bulb icon' aria-hidden="true"></span>

                    <h3>Corporate Actions</h3>

                    <p>Assistance in mergers, acquisitions, consolidations, and business separations.</p>

                    <a href="https://wa.me/6283876399688?text=Halo, saya ingin bertanya tentang Corporate Actions."
                        class="card-button" onclick="event.stopPropagation()">

                        Contact Us

                    </a>

                </div>

            </div>





            <div data-aos="zoom-in"data-aos-duration="1000">

                <div class="card" onclick="window.location.href='/halaman-litigasi.html'">



                    <span class='bx bx-group icon' aria-hidden="true"></span>

                    <h3>Litigation Support</h3>

                    <p>A team of litigation experts ready to defend and accompany clients in maintaining civil and
                        criminal business cases.</p>

                    <a href="https://wa.me/6283876399688?text=Halo, saya ingin bertanya tentang Litigation Support."
                        class="card-button" onclick="event.stopPropagation()">

                        Contact Us

                    </a>

                </div>

            </div>





        </div>

    </section>



</body>

</html>
