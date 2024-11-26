<!DOCTYPE html>
<html class="scroll-smooth">
<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Antonov Company</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"> 
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
    @vite('resources/css/app.css')
</head>

<body class="m-0 p-0 font-sans">

<!-- Header, Nav, and Hero -->
<section id="home" class="min-h-screen w-full bg-cover bg-center relative" style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url('assets/img/Banner/Antonov.png');">

    <!--Nav-->
    <nav class="flex items-center justify-between fixed top-0 left-0 z-[900] w-[100%] px-6 py-2 transition-all duration-300 bg-transparent">
    <a href="#"><img src="assets/img/logo/logo.png" class="w-[150px]"></a>
    <div class="nav-links flex justify-end items-center w-full" id="navLinks">
        <i class="fa hidden fa-times text-white text-2xl cursor-pointer" onclick="hideMenu()"></i>
        <ul class="flex space-x-4">
            <li class="relative group">
                <a href="#home" class="text-white text-sm no-underline p-2">Home</a>
            </li>
            <li class="relative group">
                <a href="#history" class="text-white text-sm no-underline p-2">History</a>
            </li>
            <li class="relative group">
                <a href="#safety" class="text-white text-sm no-underline p-2">Aviation safety</a>
            </li>
            <li class="relative group">
                <a href="#contact" class="text-white text-sm no-underline p-2">Contact Us</a>
            </li>
            <li class="relative group">
                @if (Route::has('login'))
                    <livewire:welcome.navigation />
                @endif
            </li>
        </ul>
    </div>
    <i class="fa hidden fa-bars text-white text-2xl cursor-pointer" onclick="showMenu()"></i>
</nav>


    <div class="w-[90%] text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
        <h1 class="text-[62px]">Antonov Company</h1>
        <p class="my-2.5 text-[14px] text-white">The company that makes the largest cargo plane in human history<br>
            ~ We fly to a whole new world, Beyond your imagination ~
        </p>
        <a href="#" class="hero-btn inline-block text-white border border-white px-8 py-3 text-[13px] bg-transparent relative cursor-pointer hover:border-[#1E90FF] hover:bg-[#1E90FF] transition-all duration-300">Visit Us To Know More</a>
    </div>
</section>

<!---News-->
<section class="w-[80%] m-auto text-center pt-[100px]">
    <h1>News</h1>
    <p>Antonov Company Last News</p>
    <div class="mt-5 mb-10 flex justify-between">
        <div class="basis-[31%] bg-[#D6CFC7] rounded-lg mb-8 mr-3 box-border transition duration-500 py-6 hover:shadow-[0_0_40px_0px_rgba(0,0,0,0.2)]"> 
            <a class="no-underline text-black" href="#">
            <h3>
                Oleg Antonov's 
            </h3>
            <p>
                February 7, 2022, is the 116th anniversary of birthday
                of Oleg Antonov, a great aircraft designer, talented scientist
                , founder of ANTONOV COMPANY.
            </p>
            </a>
        </div>
        <div class="basis-[31%] bg-[#D6CFC7] rounded-lg mb-8 mr-3 box-border transition duration-500 py-6 hover:shadow-[0_0_40px_0px_rgba(0,0,0,0.2)]">
            <a class="no-underline text-black" href="#">
            <h3>
                Antonov 124-100 
            </h3>
            <p>
                The Antonov International AN124-100,
                successfully landed and took off at Kertajati West Java International 
                Airport (BIJB) in Majalengka Regency, on Wednesday, March 22 2023.
            </p>
            </a>
        </div>
        <div class="basis-[31%] bg-[#D6CFC7] rounded-lg mb-8 mr-3 box-border transition duration-500 py-6 hover:shadow-[0_0_40px_0px_rgba(0,0,0,0.2)]">
            <a class="no-underline text-black" href="#">
            <h3>
                Antonov 225 Destroyed
            </h3>
            <p>
                The Antonov 225 plane was reportedly destroyed on the fourth day of Russia's invasion of Ukraine.
                The largest of all aircraft in operational service--was destroyed by the explosion.
            </p>
            </a>
        </div>
    </div>
</section>

<!-- For Responsive Nav-->
<div class="menu-btn" ></div>

<!--Video Slider-->
<section id="history" class="home">
    <video class="video-slide active" src="assets/img/Video/Relax with AN-225.mp4" autoplay muted loop></video>
    <video class="video-slide" src="assets/img/Video/2.mp4" autoplay muted loop></video>
    <video class="video-slide" src="assets/img/Video/3.mp4" autoplay muted loop></video>
    <video class="video-slide" src="assets/img/Video/4.mp4" autoplay muted loop></video>
    <div class="content" active>
        <h1>Uni Soviet.<br><span>Era</span></h1>
        <p>The company was established in 1946 at the Novosibirsk Aircraft Production Association as the top-secret Soviet Research and Design Bureau No. 153 (OKB-153). It was headed by Oleg Antonov and specialised in turboprop military transport aircraft. 
            The task was to create an agricultural aircraft CX-1 (An-2), the first flight of which occurred on 31 August 1947.
        </p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>Late Soviet-<br><span>era</span></h1>
        <p>In the late 1980s, the Antonov Bureau achieved global prominence after the introduction of its extra large aeroplanes. The An-124 "Ruslan" (1982) became the Soviet Union's mass-produced strategic airlifter under the leadership of Chief Designer 
            Viktor Tolmachev. The Bureau enlarged the "Ruslan" design even more for the Soviet spaceplane programme logistics, creating the An-225 "Mriya" in 1985.
        </p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>Independent<br><span>ukraine</span></h1>
        <p>Antonov Design Bureau remained a state-owned company after Ukraine achieved its independence in 1991 and is since regarded as a strategic national asset. Since independence, Antonov has certified and marketed both Soviet-era and newly developed 
            models for sale in new markets outside of the former soviet-sphere of influence. 
        </p>
        <a href="#">Read More</a>
    </div>
    <div class="content">
        <h1>Production facilities'<br><span>consol</span></h1>
        <p>During the Soviet period, not all Antonov-designed aircraft were manufactured by the company itself. This was a result of Soviet industrial strategy that split military production between different regions of the Soviet Union to minimise 
            potential war loss risks. As a result, Antonov aeroplanes were often assembled by the specialist contract manufacturers.
        </p>
        <a href="#">Read More</a>
    </div>

    <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>
    </div>
</section>

<!---Top 4 antonov airplanes-->
<section class="w-[80%] mx-auto text-center pt-[50px]">
    <h1>Antonov Airplanes</h1>
    <p>Top 3 Antonov Aircraft</p>

    <div class="mt-[5%] mb-[10%] flex justify-between">
        <div class="basis-[32%] rounded-[10px] mb-7 relative overflow-hidden">
        <a href="#">
            <img src="assets/img/Antonov_Airplanes/An-225.jpg" class="w-full h-full block">
            <div class="layer absolute top-0 left-0 w-full h-full bg-transparent transition-all duration-500 hover:bg-[rgba(30,144,255,0.7)]">
                <h3 class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full font-medium text-white text-[26px] opacity-0 transition-all duration-500 hover:bottom-[44%] hover:opacity-100">AN 225 Mriya</h3>
            </div>
        </a>    
        </div>
        <div class="basis-[32%] rounded-[10px] mb-7 relative overflow-hidden">
        <a href="#">
            <img src="assets/img/Antonov_Airplanes/An-178.jpeg" class="w-full h-full block">
            <div class="layer absolute top-0 left-0 w-full h-full bg-transparent transition-all duration-500 hover:bg-[rgba(30,144,255,0.7)]">
                <h3 class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full font-medium text-white text-[26px] opacity-0 transition-all duration-500 hover:bottom-[44%] hover:opacity-100">AN 178</h3>
            </div>
        </a>
        </div>
        <div class="basis-[32%] rounded-[10px] mb-7 relative overflow-hidden">
        <a href="#">
            <img src="assets/img/Antonov_Airplanes/An-124.jpg" class="w-full h-full block">
            <div class="layer absolute top-0 left-0 w-full h-full bg-transparent transition-all duration-500 hover:bg-[rgba(30,144,255,0.7)]">
                <h3 class="absolute bottom-0 left-1/2 transform -translate-x-1/2 w-full font-medium text-white text-[26px] opacity-0 transition-all duration-500 hover:bottom-[44%] hover:opacity-100">AN 124 Ruslan</h3>
            </div>
        </a>
        </div>
    </div>
</section>

<!---customer feedback-->
<section class="w-[80%] m-auto text-center pt-[100px]">
    <h1>INDUSTRIES</h1>

    <div class="mt-[5%] mb-[10%] flex justify-between">
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/energy.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Energy</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/oil & gas.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Oil & Gas</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/automobile.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Automobile</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/intermodal.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Intermodal</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/trains.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Trains</p>
        </div>
    </div>
    <div class="mt-[5%] mb-[10%] flex justify-between">
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/helicopters.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Helicopters</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/aerospace.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Aerospace</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/maritime.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Maritime</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/industrial.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Industrial</p>
        </div>
        <div class="flex flex-wrap items-center justify-center">
            <img src="assets/img/industries/humanity.png" class="flex justify-between w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
            <p class="text-[16px] font-bold uppercase text-[#1b2b3e]">Humanity</p>
        </div>
    </div>

</section>


<!---Chief Designers-->
<section class="w-[80%] m-auto text-center pt-[100px]">
    <h1>Chief Designers</h1>

    <div class="mt-20 mb-10 flex justify-between">
        <div class="flex-wrap items-center justify-center">
            <img src="assets/img/Chief_Designers/Olegantonov.jpg" class="w-[250px] rounded-[13px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:scale-105">
            <p class="text-sm text-[#1b2b3e]">
                1946-1984
            </p>
            <h3 class="text-sm mt-0">Oleg Antonov</h3>
        </div>
        <div class="flex-wrap items-center justify-center">
            <img src="assets/img/Chief_Designers/Petro_Balabuyev.jpg" class="w-[250px] rounded-[13px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:scale-105">
            <p class="text-sm text-[#1b2b3e]">
                1984-2005
            </p>
            <h3 class="text-sm mt-0">Petro Balabuiev</h3>
        </div>
        <div class="flex-wrap items-center justify-center">
            <img src="assets/img/Chief_Designers/Dmytro_Kiva.jpg" class="w-[250px] rounded-[13px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:scale-105">
            <p class="text-sm text-[#1b2b3e]">
                Since 2005
            </p>
            <h3 class="text-sm mt-0">Dmytro Kiva</h3>
        </div>
    </div>
</section>

<!---Aviation Safety-->
<section id="safety" class="sec-01 scroll-mt-[50px] relative flex justify-center items-center py-20 px-24 text-[#111222]">
    <div class="relative flex justify-center items-center flex-col z-1">
      <h2 class="main-title text-3xl mb-12 font-semibold">Aviation Safety</h2>
      <div class="content relative w-[1150px] flex justify-center items-center">
        <div class="image relative w-[800px] h-[400px] overflow-hidden">
          <img src="assets/img/Aviation_Safety/engineering.jpg" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
        </div>
        <div class="text-box2 z-[222] bg-white/50 backdrop-blur-[20px] p-10 max-w-[400px] border border-black/10 rounded-[10px] transform translate-x-[-20px] translate-y-[12px]">
          <h3 class="text-2xl mb-2">ENGINEERING</h3>
          <p class="text-xs">Strength test complex of ANTONOV COMPANY is one of the biggest in the Europe. The unique modern equipment of the complex allows performance of full-size certification strength tests of aircraft of any class from hang gliders to airplanes of “Ruslan” and “Mriya” type, products of engineering industry and to design test equipment. Dimensions of the laboratory are 100x100x35m with square of forced floor of 9000m², cargo capacity of the universal portal system is up to 3000 tf, productivity of pump station is 7000 liters per minute.</p>
        </div>
      </div>
      <div class="media-icons mt-[100px]">
        <a href="https://www.facebook.com/antonov.company/photos/" target="_blank" class="icon text-black text-2xl m-[60px]"><i class="fab fa-facebook"></i></a>
        <a href="https://www.instagram.com/antonov_company/?ref=%22nofollow%22&hl=id" target="_blank" class="icon text-black text-2xl m-[60px]"><i class="fab fa-instagram"></i></a>
        <a href="https://twitter.com/AntonovCompany" target="_blank" class="icon"><i class="fab fa-twitter text-black text-2xl m-[60px]"></i></a>
        <a href="https://www.youtube.com/@AntonovCompany" target="_blank" class="icon"><i class="fab fa-youtube text-black text-2xl m-[60px]"></i></a>
      </div>
    </div>
  </section>
  <section class="sec-01 relative flex justify-center items-center py-20 px-24 text-[#111222]">
    <div class="relative flex justify-center items-center flex-col z-1">
      <div class="content relative w-[1150px] flex justify-center items-center">
        <div class="image relative w-[800px] h-[400px] overflow-hidden" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
          <img src="assets/img/Aviation_Safety/aerodynamic.jpg">
        </div>
        <div class="text-box2 z-[222] bg-white/50 backdrop-blur-[20px] p-10 max-w-[400px] border border-black/10 rounded-[10px] transform translate-x-[-20px] translate-y-[12px]">
          <h3 class="text-2xl mb-2">AERODYNAMICS RESEARCHES</h3>
          <p class="text-xs">ANTONOV COMPANY has its own AT-1 wind tunnel. On its basis the whole set providing full cycle of works on aerodynamic experiment from designing of models and development of experimental equipment to carrying out of tests, issuance of recommendations and conclusions. For more than 35 years of work of AT-1 wind tunnel a big experience of experimental works, including those in a sphere of aviation technique and in the other directions of researches, was accumulated. High professionalism of workers and the unique equipment will provide quality and reliability of your products.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-02 py-20 px-24">
<div class="relative flex justify-center items-center flex-col z-1">
    <h3 class="section-title text-[3em] mb-[80px]">UPGRADING AND MODIFICATIONS</h3>
    <div class="content relative w-[1150px] flex justify-center items-center">
        <div class="image relative w-[800px] h-[400px] overflow-hidden" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
            <img src="assets/img/Aviation_Safety/MODIFICATIONS.webp">
        </div>
        <div class="info w-[700px] ml-[50px]">
            <h4 class="text-[1.8em] mb-[50px] font-medium">SPECIAL MODIFICATIONS</h4>
            <p>The following modifications of the ANTONOV aircraft have been carried out bу ANTONOV according to the specified customers' requests. AN-72 aircraft has been modified into 19-seat АN-72-100D variant for MoD of Moldova. The AN-74 aircraft has been modified into AN-74-200 powered by D-36 engines series 3A. The new aircraft was intended for operation on the international air routes. 44-seat passenger aircraft was developed оn the basis of AN−74T transport. To meet new international requirements airborne equipment of about 20 AN-124-100 airplanes was modified. In particular, these Ruslans were fitted with TCAS, stations with the 8.33 kHz frequency grid.</p>
        </div>
    </div>
</div>
  </section>
  <section class="sec-03 mb-24 py-20 px-24">
    <div class="relative flex justify-center items-center flex-col z-1">
      <h2 class="main-title text-3xl mb-12 font-semibold">RESOURCES AND SERVICE TERMS</h2>
      <div class="content relative w-[1150px] flex justify-center items-center">
        <div class="image relative w-[800px] h-[400px] overflow-hidden">
          <img src="assets/img/Aviation_Safety/RESOURCES.jpeg" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
        </div>
        <div class="text-box2 z-[222] bg-white/50 backdrop-blur-[20px] p-10 max-w-[400px] border border-black/10 rounded-[10px] transform translate-x-[-20px] translate-y-[12px]">
          <p class="text-xs">The ANTONOV COMPANY is a designer, Type Certificate holder and the organization authorized to determine the Antonov airplanes service lives/service time limits and to approve the airplanes operation until expiry of the currently assigned stage of service life/service time. The assigned service lives/service time limits of the civilian Antonov airplanes are contained in the Instructions for Continued Airworthiness, Maintenance Manuals and Service Bulletins for the Antonov aircraft types. The Decisions issued by ANTONOV COMPANY serve as the basis for issuance (renewal) of the Airworthiness Certificates for all civilian Antonov aircraft.</p>
        </div>
      </div>
    </div>
  </section>
  <section class="sec-02 py-20 px-24">
    <div class="relative flex justify-center items-center flex-col z-1">
        <h3 class="section-title text-[3em] mb-[80px]">SERVICES</h3>
        <div class="content relative w-[1150px] flex justify-center items-center">
            <div class="image relative w-[800px] h-[400px] overflow-hidden">
                <img src="assets/img/Aviation_Safety/SERVICES.jpg" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
            </div>
            <div class="info w-[700px] ml-[50px]">
                <h4 class="text-[1.8em] mb-[50px] font-medium">MAINTENANCE AND REPAIR</h4>
                <p>At the Customer’s service bases, the authorized personnel of the ANTONOV may carry out work in the amount agreed upon with the Customer. Besides, representatives of ANTONOV can provide consultancy support of the Customer’s technical personnel on-site. Maintenance and repair work can be provided by Certified ANTONOV personnel at any aircraft bases thanks to the unification of ground support equipment. When performing work on the of the Customer’s aircraft, ANTONOV will take all possible measures and will agree on the timing of the work to reduce the ground time of the aircraft during these works performing.</p>
        </div>
    </div>
      </section>
      <section class="sec-03 mb-24 py-20 px-24">
        <div class="relative flex justify-center items-center flex-col z-1">
          <h3 class="section-title text-[3em] mb-[80px] scroll-mt-[140px]" id="contact" >Contact Us</h3>
          <div class="content relative w-[1150px] flex justify-center items-center">
            <div class="media-info w-[400px] ml-[50px]">
              <li class="list-none text-[1.4em] mb-12 pl-[3rem]"><a href="https://x.com/messages/852096062466785281-1718586429218152448?text=" target="_blank"><i class="fa fa-twitter"></i> Twitter</a></li>
              <li class="list-none text-[1.4em] mb-12 pl-[0.2rem]"><a href="https://www.instagram.com/direct/t/107479557320536" target="_blank"><i class="fab fa-instagram"></i> Instagram</a></li>
              <li class="list-none text-[1.4em] mb-12 pl-[0.2rem]"><a href="tel:+6281226110988"><i class="fa fa-whatsapp" target="_blank"></i> Whatsapp</a></li>
              <li class="list-none text-[1.4em] mb-12 pl-[3rem]"><a href="mailto:naufalfathi37@gmail.com?subject=Subject%20Email&body=Your%20Message" target="_blank"><i class="fa fa-envelope-o"></i> Email</a></li>
            </div>
            <div class="image relative w-[800px] h-[400px] overflow-hidden">
              <img src="assets/img/Aviation_Safety/about_us.jpeg" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
            </div>
          </div>
        </div>
      </section>


<!----contact and footer-->

<section class="my-[100px] mx-auto min-h-[140vh] w-full bg-center bg-cover bg-[linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('/public/assets/img/Banner/airlines-contacts-bg.jpg')] relative text-center flex flex-col items-center pt-[15%]">
    <img src="assets/img/logo/logo2.png" class="mb-4">
    <h1 class="text-white text-6xl">ANTONOV COMPANY</h1>
    <h4 class="text-[#dadada] text-[33px]">NO OTHER NAME CARRIES MORE WEIGHT</h4>
    <p class="text-[#b5b5b5] text-[23px]">Charter air transportation of oversized and extra heavy loads worldwide</p>
</section>


<section class="w-full text-center py-[30px]">
    <h4 class="mb-[25px] mt-[20px] font-semibold">About Us</h4>
    <p>Antonov Company (Ukrainian: Державне підприємство «Антонов»), formerly the Aeronautical Scientific-Technical Complex <br>named after Antonov (Antonov ASTC) (Ukrainian: Авіаційний науково-технічний комплекс імені Антонова,<br>
        [АНТК ім. Антонова]), </p>
    <div>
        <a href="https://www.facebook.com/antonov.company/photos/" target="_blank"><i class="fab fa-facebook text-[#1E90FF] mx-[13px] cursor-pointer py-[18px]"></i></a>
        <a href="https://twitter.com/AntonovCompany" target="_blank"><i class="fab fa-twitter text-[#1E90FF] mx-[13px] cursor-pointer py-[18px]"></i></a>
        <a href="https://www.instagram.com/antonov_company/?ref=%22nofollow%22&hl=id" target="_blank"><i class="fab fa-instagram text-[#1E90FF] mx-[13px] cursor-pointer py-[18px]"></i></a>
        <a href="https://www.linkedin.com/company/antonovcompany" target="_blank"><i class="fab fa-linkedin text-[#1E90FF] mx-[13px] cursor-pointer py-[18px]"></i></a>
    </div>
    <p>www.antonov.com</p>
</section>

<script src="assets/js/script.js"></script>

</body>
</html>