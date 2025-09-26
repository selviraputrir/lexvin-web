<section class="bg-black py-10">
  <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
  <style>
  
    .services-title{
      text-align: center;
      margin: 20px 0 20px;
      font-size: 40px;
      font-weight: bold;
      color: rgb(255, 255, 255); 
      opacity: 0;
      transform: translateY(30px);
      animation: fadeSlide 1s ease-out forwards;
      border-bottom: 3px solid rgb(255, 255, 255); 
      padding-bottom: 5px; 
      width: 50%; 
      margin-left: auto; 
      margin-right: auto; 
    }
    @keyframes fadeSlide {
      to {
        opacity: 1;
        transform: translateY(0);
      }
    }
    @keyframes growLine {
      to {
        transform: scaleX(1);
      }
    }
    .services {
      display: grid;
      grid-template-columns: repeat(4, minmax(200px, 200px));
      justify-content: center;
      gap: 20px;
    }
    .card {
      background: #5c2323;
      padding: 20px 20px;
      margin: 10px auto 0;
      border-radius: 12px;
      border: 2px solid #fff;
      transition: all 0.4s ease-in-out;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0,0,0,0.5);
      display: flex;            
      flex-direction: column;    
      height: 100%;            
    }
    .card:hover {
      transform: translateY(-10px) scale(1.05);
      box-shadow: 0 10px 20px rgba(0,0,0,0.7);
      background: #7a2e2e;
    }
     .card i {
      font-size: 50px;
      margin-bottom: 15px; 
      color: #ffffff;
      transition: color 0.3s;
    }

    .card:hover i {
      color: #894e4e;
    }

    .card h3 {
      font-size: 18px;
      margin: 70px 0;
      color: #ffffff
    }

    .card p {
      font-size: 15px;
      color: #ffffff;
      margin-bottom: 30px;
    }
    .card-buttons {
      display: flex;            
      justify-content: center;   
      gap: 15px;                 
      margin-top: auto;
   }  
   .card button {
      position: relative;
      overflow: hidden;
      background: #fff;
      color: #5c2323;
      border: none;
      padding: 10px 25px;
      border-radius: 20px;
      font-weight: bold;
      cursor: pointer;
      transition: color 0.3s ease;
      z-index: 1;
  
    }

    .card button::before {
      content: "";
      position: absolute;
      top: 0;
      left: -100%;
      width: 100%;
      height: 100%;
      background: #895151;
      transition: left 0.3s ease;
      z-index: -1;
    }

    .card button:hover {
      color: #000000;
    }

    .card button:hover::before {
      left: 0;
    }

    @media (max-width: 900px) {
      .services {
        grid-template-columns: repeat(2, 1fr);
      }
    }

    @media (max-width: 600px) {
      .services {
        grid-template-columns: 1fr;
      }
    }
  </style>
</head>
<body>

  <h2 class="services-title"> Our Services </h2>
  <div class="services">

    <div class="card">
         <i class='bx bx-phone'></i>
      <h3>Legal Consultation</h3>
      <p>Strategic consulting sessions to address both business 
        and personal legal needs.</p>
        <div class="card-buttons">
      <button>Contact Us</button>
    </div>
    </div>

    <div class="card">
        <i class='bx bx-briefcase'></i>
      <h3>Corporate Legal Retainer</h3>
      <p>Ongoing legal services for companies that 
        need long-term legal partners.</p>
        <div class="card-buttons">
      <button>Contact Us</button>
    </div>
    </div>

     <div class="card">
         <i class='bx bx-bulb'></i>
      <h3>Corporate Actions </h3>
      <p>Assistance in mergers, acquisitions, 
        consolidations, and business separations.</p>
        <div class="card-buttons">
      <button>Contact Us</button>
    </div>
     </div>

     <div class="card">
         <i class='bx bx-group'></i>
      <h3>Litigation Support</h3>
      <p>A team of litigation experts ready to defend and accompany 
        clients in maintaining civil and criminal business cases.</p>
        <div class="card-buttons">
      <button>Contact Us</button>
    </div>
  </div>
  </div>
