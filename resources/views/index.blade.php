<!DOCTYPE html>
<html class="scroll-smooth">

<head>
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>Antonov Company</title>

    <!-- Preconnect to Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- Load Google Fonts (Poppins) -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">

    <!-- Load Font Awesome 4.7.0 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Load Font Awesome 5.15.4 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Load Font Awesome 4.7.0 for scalable vector icons -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Load ScrollReveal -->
    <script src="https://unpkg.com/scrollreveal"></script>

    <!-- Vite CSS -->
    @vite('resources/css/app.css')
</head>

<body class="m-0 p-0 font-sans">

    <!-- Header, Nav, and Hero -->
    <section id="home" class="min-h-screen w-full bg-cover bg-center relative" style="background-image: linear-gradient(rgba(4, 9, 30, 0.7), rgba(4, 9, 30, 0.7)), url('assets/img/Banner/Antonov.png');">

        <!--Nav-->
        <nav id="navbar" class="flex items-center justify-between fixed top-0 left-0 z-[900] w-[100%] px-6 py-2 transition-all ease-in-out duration-300">
            <!-- Logo -->
            <a href="{{ route('index') }}">
                <img src="assets/img/logo/logo.png" class="w-[150px]" />
            </a>

            <!-- Navigation Links -->
            <div class="nav-links sm:flex sm:justify-between sm:items-center sm:w-full sm:px-4" id="navLinks">
                <!-- Menu Utama (Tengah) -->
                <div class="sm:flex sm:space-x-4 sm:mx-auto">
                    <i class="fa fa-times hidden" onclick="hideMenu()"></i>

                    <ul class="sm:flex sm:space-x-4 sm:mb-[-20px]">
                        <li class="mb-4">
                            <a href="#home" class="text-white sm:text-sm no-underline sm:p-2 text-base">Home</a>
                        </li>
                        <li class="mb-4">
                            <a href="#history" class="text-white sm:text-sm no-underline sm:p-2 text-base">History</a>
                        </li>
                        <li class="mb-4">
                            <a href="#safety" class="text-white sm:text-sm no-underline sm:p-2 text-base">Aviation Safety</a>
                        </li>
                        <li class="mb-4">
                            <a href="#contact" class="text-white sm:text-sm no-underline sm:p-2 text-base">Contact Us</a>
                        </li>
                        <li class="mb-4">
                            <a href="{{ route('dashboard') }}" class="text-white sm:text-sm no-underline sm:p-2 text-base">Dashboard</a>
                        </li>
                    </ul>

                </div>

                <!-- Authentication (Sebelah Kanan) -->
                <div>
                    @if (Route::has('login'))
                    @auth
                    <!-- Dropdown for logged-in users -->
                    <div x-data="{ open: false }" class="relative sm:p-0 p-4">
                        <button @click="open = !open" class="text-white text-base no-underline p-2 flex items-center">
                            <span>{{ auth()->user()->name }}</span>
                            <svg class="ml-1 w-4 h-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" />
                            </svg>
                        </button>
                        <!-- Dropdown Menu Nav-->
                        <ul x-show="open" @click.outside="open = false" class="absolute bg-white text-gray-700 rounded-md shadow-lg mt-2 w-48 right-0 z-10">
                            <li>
                                <a href="{{ route('profile') }}" class="block px-4 py-2 hover:bg-gray-100">Profile</a>
                            </li>
                        </ul>
                    </div>
                    @else
                    <!-- Links for guests -->
                    <ul class="flex space-x-4">
                        <li>
                            <a href="{{ route('login') }}" class="text-white text-sm no-underline p-2">Login</a>
                        </li>
                        @if (Route::has('register'))
                        <li>
                            <a href="{{ route('register') }}" class="text-white text-sm no-underline p-2">Register</a>
                        </li>
                        @endif
                    </ul>
                    @endauth
                    @endif
                </div>
            </div>

            <i class="fa hidden fa-bars text-white text-2xl cursor-pointer" onclick="showMenu()"></i>
        </nav>

        <div class="text-box w-[90%] text-white absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 text-center">
            <h1 class="text-[62px]">Antonov Company</h1>
            <p class="my-2.5 text-[14px] text-white">The company that makes the largest cargo plane in human history<br>
                ~ We fly to a whole new world, Beyond your imagination ~
            </p>
            <a href="#news" class="hero-btn text-white border no-underline border-white px-8 py-3 text-[13px] relative cursor-pointer hover:border-[#1E90FF] hover:bg-[#1e8fff84] transition-all duration-500">Visit Us To Know More</a>
        </div>
    </section>

    <!-- News Section -->
    <section id="news" class="w-[90%] sm:w-[80%] m-auto text-center pt-[100px]">
        <h1 class="text-4xl font-bold">News</h1>
        <p class="text-gray-700 text-sm font-light p-3">Antonov Company Last News</p>
        <div class="mt-5 mb-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($news as $item)
            <div class="bg-[#D6CFC7] rounded-lg overflow-hidden transition duration-500 hover:shadow-[0_0_40px_0px_rgba(0,0,0,0.2)]">
                <a class="no-underline text-black" href="#" data-bs-toggle="modal" data-bs-target="#newsModal"
                    data-title="{{ $item->title }}"
                    data-content="{{ strip_tags($item->content) }}"
                    data-image="{{ $item->image }}"
                    data-author="{{ $item->user ? $item->user->name : 'Unknown' }}">
                    <!-- Gambar Berita -->
                    @if($item->image)
                    <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->title }}"
                        class="w-full h-64 object-cover">
                    @else
                    <img src="https://via.placeholder.com/600x400" alt="Placeholder Image"
                        class="w-full h-64 object-cover">
                    @endif
                    <div class="p-4">
                        <h3 class="text-xl font-bold">
                            {{ $item->title }}
                        </h3>
                        <p class="mt-2 text-gray-700">
                            {{ Str::limit(strip_tags($item->content), 150, '...') }}
                        </p>
                    </div>
                </a>
            </div>
            @endforeach
        </div>

        <!-- Modal -->
        <div class="modal fade" id="newsModal" tabindex="-1" aria-labelledby="newsModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title font-bold" id="newsModalLabel">News Title</h2>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <!-- Gambar Berita -->
                        <img id="modalImage" src="" alt="News Image" class="w-full h-64 object-cover mb-4 rounded-lg">
                        <!-- Content News -->
                        <p class="text-black font-light" id="modalContent"></p>
                    </div>
                    <p class="mt-4 font-semibold">Author: <span id="modalAuthor"></span></p>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!--Nav-->
    <div class="menu-btn"></div>

    <!--Video Slide Sectionr-->
    <section id="history" class="home">
        <div class="slider">
            @foreach ($histories as $history)
            <video class="video-slide" src="{{ asset('storage/'.$history->video_path) }}" autoplay muted loop></video>
            @endforeach
        </div>

        @foreach ($histories as $history)
        <div class="content">
            <h1>{{ $history->title }}<br><span>{{ $history->subtitle }}</span></h1>
            <p>{{ \Illuminate\Support\Str::limit($history->description, 200) }}</p>
            <a href="javascript:void(0);" class="cursor-pointer" data-description="{{ $history->description }}" onclick="showModal(this)">Read More</a>
        </div>
        @endforeach

        <div class="slider-navigation">
            @foreach ($histories as $index => $history)
            <div class="nav-btn {{ $loop->first ? 'active' : '' }}"></div>
            @endforeach
        </div>
    </section>

    <!-- Modal Video Slider -->
    <div id="modal" class="modal fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center hidden transition-opacity duration-300 ease-in-out">
        <div class="modal-content bg-white p-8 rounded-lg max-w-3xl w-11/12 shadow-2xl relative overflow-auto">
            <!-- Close Button -->
            <span class="close-btn text-2xl font-bold absolute top-4 right-6 cursor-pointer hover:text-red-600 transition duration-200" onclick="closeModal()">
                &times;
            </span>

            <!-- Modal Content -->
            <div class="text-center">
                <h2 class="text-3xl font-extrabold text-gray-800 mb-4">Detail Information</h2>
                <hr class="border-t-2 border-gray-200 w-1/3 mx-auto mb-6">
                <p id="modal-description" class="text-gray-700 leading-relaxed text-lg"></p>
            </div>

            <!-- Footer -->
            <div class="mt-6 text-center">
                <button onclick="closeModal()" class="px-6 py-2 bg-gray-800 text-white text-sm font-semibold rounded-lg hover:bg-gray-900 transition duration-200">
                    Close
                </button>
            </div>
        </div>
    </div>


    <!---Top Antonov Airplanes Section-->
    <section class="w-[90%] sm:w-[80%] mx-auto text-center pt-[50px]">
        <h1 class="sm:text-3xl">Antonov Airplanes</h1>
        <p class="sm:text-lg">Top Antonov Aircraft</p>

        <div class="row grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
            @foreach ($airplanes as $airplane)
            <div class="w-full sm:w-[32%] md:w-[32%] rounded-[10px] mb-[30px] relative overflow-hidden">
                <a href="#"
                    data-bs-toggle="modal"
                    data-bs-target="#airplaneModal"
                    data-name="{{ $airplane->name }}"
                    data-description="{{ $airplane->description }}"
                    data-image="{{ asset('storage/' . $airplane->image) }}">
                    <img src="{{ asset('storage/' . $airplane->image) }}" alt="{{ $airplane->name }}" class="w-full h-full rounded-[10px] object-cover">
                    <div class="layer">
                        <h3>{{ $airplane->name }}</h3>
                    </div>
                </a>

            </div>
            @endforeach
        </div>
    </section>

    <!-- Modal Antonov Airplanes-->
    <div class="modal fade" id="airplaneModal" tabindex="-1" aria-labelledby="airplaneModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title font-bold" id="airplaneModalLabel"></h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img id="modalImage" src="" class="w-full h-60 mb-3 object-cover rounded">
                    <p class="text-black font-light" id="modalDescription"></p>
                </div>
            </div>
        </div>
    </div>


    <!-- Industries Section -->
    <section class="w-[90%] sm:w-[80%] m-auto text-center pt-[100px]">
        <h1 class="text-4xl font-bold mb-8">INDUSTRIES</h1>

        <div class="mt-[5%] mb-[10%] grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 gap-6">
            @foreach ($industries as $industry)
            <div class="flex flex-col items-center justify-center w-full">
                <img
                    src="{{ asset('storage/' . $industry->image) }}"
                    alt="{{ $industry->name }}"
                    class="w-full h-[65%] rounded-[13px] m-[3px] shadow-[4px_7px_7px_0px_rgba(0,0,0,0.26)] cursor-pointer transition duration-1000 hover:saturate-200 hover:scale-110">
                <p class="text-[16px] font-bold uppercase text-[#1b2b3e] mt-3">{{ $industry->name }}</p>
            </div>
            @endforeach
        </div>
    </section>


    <!-- Chief Designers Section -->
    <section class="w-[90%] sm:w-[80%] mx-auto text-center pt-[100px]">
        <h1 class="text-3xl font-bold mb-10">Chief Designers</h1>

        <div class="mt-20 mb-10 grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-x-60">
            @foreach ($chiefDesigners as $designer)
            <div class="text-center flex flex-col items-center mb-20">
                <img
                    src="{{ asset('storage/' . $designer->image) }}"
                    alt="{{ $designer->name }}"
                    class="w-full max-w-[250px] h-[250px] object-cover rounded-[13px] shadow-2xl cursor-pointer transition duration-300 hover:scale-105"
                    data-modal-toggle="modal-{{ $designer->id }}">
                <p class="text-sm text-[#1b2b3e]">
                    {{ $designer->period }}
                </p>
                <h3 class="text-xl font-bold">
                    {{ $designer->name }}
                </h3>

                <!-- Modal -->
                <div id="modal-{{ $designer->id }}" class="modal hidden fixed inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
                    <div class="modal-content bg-white w-[80%] md:w-[500px] p-6 rounded-lg relative shadow-lg">
                        <button
                            data-modal-hide="modal-{{ $designer->id }}"
                            class="absolute top-4 right-4 text-2xl font-bold text-gray-700 hover:text-red-500 transition">
                            &times;
                        </button>
                        <h2 class="text-2xl font-bold text-gray-800 mb-4">About {{ $designer->name }}</h2>
                        <p class="text-gray-700 leading-relaxed">{{ $designer->description }}</p>
                        <button
                            data-modal-hide="modal-{{ $designer->id }}"
                            class="mt-6 bg-gray-800 text-white py-2 px-4 rounded hover:bg-gray-900 transition duration-300">
                            Close
                        </button>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>


    <!-- Section 1 -->
    <section id="safety" class="sec-01 scroll-mt-[50px] relative flex justify-center items-center py-20 px-6 sm:px-12 md:px-24 text-[#111222]">
        @foreach ($data1 as $item)
        <div class="relative flex justify-center items-center flex-col z-1">
            <h2 class="main-title text-4xl sm:text-5xl mb-8 sm:mb-12 font-semibold">{{ $item->heading }}</h2>
            <div class="content relative w-full sm:w-[1150px] flex flex-col sm:flex-row justify-center items-center">
                <div class="image relative w-full sm:w-[800px] h-[250px] sm:h-[400px] overflow-hidden mb-6 sm:mb-0">
                    <img src="{{ asset('storage/' . $item->img) }}" alt="image" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="text-box2 z-[222] bg-white/50 backdrop-blur-[20px] p-6 sm:p-10 max-w-[400px] border border-black/10 rounded-[10px] transform sm:translate-x-[-20px] sm:translate-y-[12px]">
                    <h3 class="text-2xl sm:text-4xl mb-2">{{ $item->subheading }}</h3>
                    <p class="text-xs sm:text-sm">{{ $item->description }}</p>
                </div>
            </div>
            <div class="media-icons mt-8 sm:mt-[100px] flex flex-wrap justify-center items-center">
                @foreach ($socialLinks as $socialLink)
                <a href="{{ $socialLink->url }}" target="_blank" class="icon text-black text-2xl sm:text-3xl m-[20px] sm:m-[60px]">
                    @if($socialLink->platform == 'Facebook')
                    <i class="fab fa-facebook"></i>
                    @elseif($socialLink->platform == 'Instagram')
                    <i class="fab fa-instagram"></i>
                    @elseif($socialLink->platform == 'Twitter')
                    <i class="fab fa-twitter"></i>
                    @elseif($socialLink->platform == 'YouTube')
                    <i class="fab fa-youtube"></i>
                    @elseif($socialLink->platform == 'LinkedIn')
                    <i class="fab fa-linkedin"></i>
                    @endif
                </a>
                @endforeach
            </div>
        </div>
        @endforeach
    </section>

    <!---Section 2-->
    <section class="sec-01 relative flex justify-center items-center py-20 px-6 sm:px-12 md:px-24 text-[#111222]">
        @foreach ($data2 as $item)
        <div class="relative flex justify-center items-center flex-col z-1">
            <div class="content relative w-full sm:w-[1150px] flex flex-col sm:flex-row justify-center items-center">
                <div class="image relative w-full sm:w-[800px] h-[250px] sm:h-[400px] overflow-hidden mb-6 sm:mb-0">
                    <img src="{{ asset('storage/' . $item->img) }}" alt="image" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="text-box2 z-[222] bg-white/50 backdrop-blur-[20px] p-6 sm:p-10 max-w-[400px] border border-black/10 rounded-[10px] transform sm:translate-x-[-20px] sm:translate-y-[12px]">
                    <h3 class="text-2xl sm:text-4xl mb-2">{{ $item->subheading }}</h3>
                    <p class="text-xs sm:text-sm">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>


    <!-- Section 3 -->
    <section class="sec-02 py-20 px-6 sm:px-12 md:px-24">
        @foreach ($data3 as $item)
        <div class="relative flex justify-center items-center flex-col z-1">
            <h3 class="section-title text-[2em] sm:text-[3em] mb-[50px] sm:mb-[80px]">{{ $item->heading }}</h3>
            <div class="content relative w-full sm:w-[1150px] flex flex-col sm:flex-row justify-center items-center">
                <div class="image relative w-full sm:w-[800px] h-[250px] sm:h-[400px] overflow-hidden mb-6 sm:mb-0">
                    <img src="{{ asset('storage/' . $item->img) }}" alt="image" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="info w-full sm:w-[700px] sm:ml-[50px]">
                    <h4 class="text-[1.5em] sm:text-[1.8em] mb-[30px] sm:mb-[50px] font-medium">{{ $item->subheading }}</h4>
                    <p class="text-sm sm:text-base">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Section 4 -->
    <section class="sec-03 mb-24 py-20 px-6 sm:px-12 md:px-24">
        @foreach ($data4 as $item)
        <div class="relative flex justify-center items-center flex-col z-1">
            <h2 class="main-title text-[2em] sm:text-3xl mb-12 sm:mb-12 font-semibold">{{ $item->heading }}</h2>
            <div class="content relative w-full sm:w-[1150px] flex flex-col sm:flex-row justify-center items-center">
                <div class="image relative w-full sm:w-[800px] h-[250px] sm:h-[400px] overflow-hidden">
                    <img src="{{ asset('storage/' . $item->img) }}" alt="image" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="text-box2 z-[222] bg-white/50 backdrop-blur-[20px] p-6 sm:p-10 max-w-[400px] border border-black/10 rounded-[10px] transform sm:translate-x-[-20px] sm:translate-y-[12px]">
                    <p class="text-xs sm:text-sm">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Section 5 -->
    <section class="sec-02 py-20 px-6 sm:px-12 md:px-24">
        @foreach ($data5 as $item)
        <div class="relative flex justify-center items-center flex-col z-1">
            <h3 class="section-title text-[2em] sm:text-[3em] mb-[50px] sm:mb-[80px]">{{ $item->heading }}</h3>
            <div class="content relative w-full sm:w-[1150px] flex flex-col sm:flex-row justify-center items-center">
                <div class="image relative w-full sm:w-[800px] h-[250px] sm:h-[400px] overflow-hidden mb-6 sm:mb-0">
                    <img src="{{ asset('storage/' . $item->img) }}" alt="image" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
                </div>
                <div class="info w-full sm:w-[700px] sm:ml-[50px]">
                    <h4 class="text-[1.5em] sm:text-[1.8em] mb-[30px] sm:mb-[50px] font-medium">{{ $item->subheading }}</h4>
                    <p class="text-sm sm:text-base">{{ $item->description }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </section>

    <!-- Section 6 - Contact Us -->
    <section class="sec-03 mb-24 py-20 px-6 sm:px-12 md:px-24">
        @foreach ($data6 as $item)
        <div class="relative flex justify-center items-center flex-col z-1">
            <h3 class="section-title text-[2em] sm:text-[3em] mb-[50px] sm:mb-[80px] scroll-mt-[140px]" id="contact">{{ $item->heading }}</h3>
            <div class="content relative w-full sm:w-[1150px] flex flex-col sm:flex-row justify-center items-center">
                <div class="media-info w-full sm:w-[400px] mb-6 sm:mb-0">
                    @foreach($contacts as $contact)
                    <li class="list-none md:text-[1.4em] text-[1.2em] mb-4 pl-[3rem] text-right mr-[150px]">
                        <a href="{{ $contact->url }}" target="_blank">
                            <i class="fa {{ 
                            $contact->platform == 'Twitter' ? 'fa-twitter' : 
                            ($contact->platform == 'Instagram' ? 'fab fa-instagram' : 
                            ($contact->platform == 'Whatsapp' ? 'fa-whatsapp' : 
                            ($contact->platform == 'LinkedIn' ? 'fab fa-linkedin' : 'fa-envelope-o'))) }}"></i>
                            {{ $contact->platform }}
                        </a>
                    </li>
                    @endforeach
                </div>
                <div class="image relative w-full sm:w-[800px] h-[250px] sm:h-[400px] overflow-hidden">
                    <img src="{{ asset('storage/' . $item->img) }}" class="z-[111] absolute top-0 left-0 w-full h-full object-cover rounded-[10px]">
                </div>
            </div>
        </div>
        @endforeach
    </section>


    <!----Social Link and footer-->

    <section class="my-[100px] mx-auto justify-center min-h-screen sm:min-h-[140vh] w-full bg-center bg-cover bg-[linear-gradient(rgba(4,9,30,0.7),rgba(4,9,30,0.7)),url('/public/assets/img/Banner/airlines-contacts-bg.jpg')] relative text-center flex flex-col items-center">
        <img src="assets/img/logo/logo2.png" class="mb-4 max-w-xs sm:max-w-sm">
        <h1 class="text-white text-2xl sm:text-6xl">ANTONOV COMPANY</h1>
        <h4 class="text-[#dadada] text-[20px] sm:text-[33px]">NO OTHER NAME CARRIES MORE WEIGHT</h4>
        <p class="text-[#b5b5b5] text-[20px] sm:text-[23px]">Charter air transportation of oversized and extra heavy loads worldwide</p>
    </section>

    <section class="w-full text-center py-[30px]">
        <h4 class="mb-[25px] mt-[20px] font-semibold">About Us</h4>
        <p>Antonov Company (Ukrainian: Державне підприємство «Антонов»), formerly the Aeronautical Scientific-Technical Complex <br>named after Antonov (Antonov ASTC) (Ukrainian: Авіаційний науково-технічний комплекс імені Антонова,<br>
            [АНТК ім. Антонова]), </p>
        <div>
            @foreach ($socialLinks as $socialLink)
            <a href="{{ $socialLink->url }}" target="_blank" class="text-black">
                @if($socialLink->platform == 'Facebook')
                <i class="fab fa-facebook text-[#1E90FF] text-sm mx-[13px] py-[18px]"></i>
                @elseif($socialLink->platform == 'Instagram')
                <i class="fab fa-instagram text-[#1E90FF] text-sm mx-[13px] py-[18px]"></i>
                @elseif($socialLink->platform == 'Twitter')
                <i class="fab fa-twitter text-[#1E90FF] text-sm mx-[13px] py-[18px]"></i>
                @elseif($socialLink->platform == 'YouTube')
                <i class="fab fa-youtube text-[#1E90FF] text-sm mx-[13px] py-[18px]"></i>
                @elseif($socialLink->platform == 'LinkedIn')
                <i class="fab fa-linkedin text-[#1E90FF] text-sm mx-[13px] py-[18px]"></i>
                @endif
            </a>
            @endforeach
        </div>
        <p><a href="#">www.antonov.com</a></p>
    </section>


    <!--JS dari AlpineJs-->
    <script src="//unpkg.com/alpinejs" defer></script>
    <!--JS dari Script Js-->
    <script src="assets/js/script.js"></script>
    <!--Const JS untuk menampilkan image modal-news di Script JS-->
    <script>
        const BASE_URL = "{{ url('/') }}";
    </script>

</body>

</html>