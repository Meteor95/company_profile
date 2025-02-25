@extends('templatebody')
@section('konten_utama')
<!--==============================
Mobile Menu
============================== -->
<div class="vs-menu-wrapper">
    <div class="vs-menu-area text-center">
        <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
        <div class="mobile-logo">
            <a href="{{ url('') }}"><img src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo"></a>
        </div>
        <div class="vs-mobile-menu">
            <ul>
                <li>
                    <a href="{{ url('') }}">Beranda</a>
                </li>
                <li>
                    <a href="javascript:void(0)">Forum</a>
                </li>
                <li class="menu-item-has-children">
                    <a href="javascript:void(0)">Layanan</a>
                    <ul class="sub-menu">
                        <li><a href="javascript:void(0)">Pengembangan Aplikasi</a></li>
                        <li><a href="javascript:void(0)">Konsultasi Pajak dan Akuntansi</a></li>
                        <li><a href="javascript:void(0)">Konsultasi Perangkat Keras atau Lunak</a></li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:void(0)">Hubungi Kami</a>
                </li>
            </ul>
        </div>
    </div>
</div>
<!--==============================
    Preloader
==============================-->
<div class="preloader">
    <button class="vs-btn preloaderCls">Tampilkan Website Sekarang</button>
    <div class="preloader-inner text-center">
        <img src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo">
        <span class="loader"></span>
    </div>
</div>
<!--==============================
Sidemenu
============================== -->
<div class="sidemenu-wrapper d-none d-lg-block">
    <div class="sidemenu-content">
        <button class="closeButton sideMenuCls"><i class="far fa-times"></i></button>
        <div class="widget  ">
            <div class="vs-widget-about">
                <div class="footer-logo">
                <a href="{{ url('') }}"><img src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo"></a>
                </div>
                <p class="footer-text" style="text-align:justify">Didirikan pada tahun 2024, kami adalah software house profesional yang berpengalaman dalam menyediakan solusi Digital dan TI untuk berbagai organisasi. Kami telah melayani banyak klien di seluruh Indonesia, mulai dari UKM, perusahaan besar, hingga instansi pemerintah. Dengan semangat dan ketajaman intuisi, kami membantu pertumbuhan bisnis secara optimal dan berkelanjutan.</p>
                <div class="info-social style3">
                    <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="icon-btn" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="icon-btn" href="#"><i class="fab fa-google"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
Header Area
==============================-->
<header class="vs-header header-layout2">
    <div class="header-top">
        <div class="container">
            <div class="header-bg">
                <div class="row justify-content-between">
                    <div class="col-auto">
                        <div class="header-links">
                            <ul>
                                <li><i class="fas fa-tv"></i>IP KAMU : {{$ip}}</li>
                                <li><i class="fas fa-map-marker-alt"></i><a href="mailto:info@example.com">LOKASI KAMU : {{$location}}</a></li>
                                <li><i class="fas fa-shield-check"></i>STATUS KAMU : TAMU</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-auto">
                        <div class="header-right">
                            <div class="header-links ps-0">
                                <div class="social-style1">
                                    <a href="javascript:void(0)"><i class="fab fa-facebook-f"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-linkedin-in"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-instagram"></i></a>
                                    <a href="javascript:void(0)"><i class="fab fa-youtube"></i></a>
                                </div>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="fa-solid fa-user"></i>DAFTAR</a></li>
                                    <li><a href="javascript:void(0)"><i class="fa-solid fa-lock"></i>MASUK</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="sticky-wrapper">
        <div class="sticky-active">
            <div class="container">
                <div class="menu-bg">
                    <div class="row position-relative align-items-center">
                        <div class="col-auto">
                            <div class="header-logo">
                                <a href="{{ url('') }}">
                                    <img style="width: 200px" src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo">
                                </a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="menu-area">
                                <div class="row align-items-center justify-content-between">
                                    <div class="col">
                                        <nav class="main-menu menu-style1 d-none d-lg-block">
                                            <ul>
                                                <li>
                                                    <a href="{{ url('') }}">Beranda</a>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Forum</a>
                                                </li>
                                                <li class="menu-item-has-children">
                                                    <a href="javascript:void(0)">Layanan</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="javascript:void(0)">Pengembangan Aplikasi</a></li>
                                                        <li><a href="javascript:void(0)">Konsultasi Pajak dan Akuntansi</a></li>
                                                        <li><a href="javascript:void(0)">Konsultasi Perangkat Keras atau Lunak</a></li>
                                                    </ul>
                                                </li>
                                                <li>
                                                    <a href="javascript:void(0)">Hubungi Kami</a>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="col-auto d-lg-none">
                                        <button class="vs-menu-toggle d-inline-block">
                                            <i class="fal fa-bars"></i>
                                        </button>
                                    </div>
                                    <div class="col-auto d-xl-block d-none">
                                        <div class="header-icons">
                                            <a href="#" class="icon-btn sideMenuToggler"><i
                                                    class="fa-solid fa-bars"></i></a>
                                            <a href="#" class="icon-btn">
                                                <i class="fa-solid fa-globe"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--==============================
Hero Area
============================== -->
<div class="hero-layout1 style2" data-bg-src="{{ asset('template_v1/img/hero/hero-bg-2-1.jpg') }}">
    <div class="container position-relative">
        <div class="vs-carousel z-index1" data-slide-show="1" data-autoplay="true" data-fade="true"
            data-arraw="true">
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-top justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content text-center">
                                <div class="title-area text-center">
                                    <span class="sec-subtitle">Pengembangan Aplikasi</span>
                                    <h2 class="sec-title h1 mb-20">Bisnis Digital Anda adalah <span>Keahlian</span> Kami</h2>
                                    <p class="sec-text">Kami berfokus pada solusi digital untuk membantu bisnis Anda tumbuh dan bersaing di era modern. Terkhusunya untuk memecahkan masalah anda dengan bantuan teknologi. Jadi jangan khawatir serta jangan malu jikalau anda ingin berkonsultasi dengan kami</p>
                                </div>
                                <div class="hero-bottom">
                                    <a href="javascript:void(0)" class="vs-btn">Lihat Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-top justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content text-center">
                                <div class="title-area text-center">
                                    <span class="sec-subtitle">Konsultasi Pajak dan Akuntansi</span>
                                    <h2 class="sec-title h1 mb-20">Orang Bijak <span>Taat</span> Pajak Dan Awasi Penggunaannya</h2>
                                    <p class="sec-text">Konsultan pajak membantu mengurus hal-hal yang berkaitan dengan kepatuhan pajak kliennya, mulai dari menghitung, membayar, juga melaporkannya. Konsultan pajak menawarkan jasa konsultansi masalah perpajakan, selain itu juga bisa melakukan perencanaan pajak untuk mengoptimalkan keuntungan klien.</p>
                                </div>
                                <div class="hero-bottom">
                                    <a href="javascript:void(0)" class="vs-btn">Konsultasi Yuk</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="hero-slide">
                <div class="container">
                    <div class="row g-5 align-items-top justify-content-center">
                        <div class="col-lg-8">
                            <div class="hero-content text-center">
                                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                                    <span class="sec-subtitle">Konsultasi Perangkat Keras dan Lunak</span>
                                    <h2 class="sec-title h1 mb-20">Butuh Konsultasi <span>Perangkat</span> Untuk Infrastruktur Anda
                                    </h2>
                                    <p class="sec-text">Kami menyediakan solusi keamanan perangkat keras dan lunak yang andal untuk melindungi data dan aktivitas online Anda seperti DevOps, Security, dan Network. Dengan pengalaman dan keahlian kami, kami membantu Anda merasa aman di dunia digital.</p>
                                </div>
                                <div class="hero-bottom">
                                    <a href="javascript:void(0)" class="vs-btn">Minta Katalog</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-mockup d-xl-block" style="bottom: 0%;"><img src="{{ asset('template_v1/img/shep/hero-world-shep.png') }}" alt="shapes"></div>
    <div class="shape-mockup moving d-none d-xl-block" style="top: 5%;">
        <div class="star"></div>
        <div class="meteor-1"></div>
        <div class="meteor-2"></div>
        <div class="meteor-3"></div>
        <div class="meteor-4"></div>
        <div class="meteor-5"></div>
        <div class="meteor-6"></div>
        <div class="meteor-7"></div>
        <div class="meteor-8"></div>
        <div class="meteor-9"></div>
        <div class="meteor-10"></div>
        <div class="meteor-11"></div>
        <div class="meteor-12"></div>
        <div class="meteor-13"></div>
        <div class="meteor-14"></div>
        <div class="meteor-15"></div>
    </div>
</div>
<!--==============================
Process Area
============================== -->
<div class="process-layout2">
    <div class="container-style2">
        <div class="process-style2">
            <div class="row g-4">
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-1.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Easy Download</h2>
                        </div>
                        <p class="process-text">
                            Get started quickly by downloading the VEEPN app for your device.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="blog-details.html" class="icon-btn">01</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-2.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Instant Setup/ Install</h2>
                        </div>
                        <p class="process-text">
                            Install the app effortlessly with just Need a few clicks.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="blog-details.html" class="icon-btn">02</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-3.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Connect to a Server</h2>
                        </div>
                        <p class="process-text">
                            Choose from our global server network and connect with a single tap.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="blog-details.html" class="icon-btn">03</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-4.svg') }}" alt="icon"> 
                            </div>
                            <h2 class="process-title h5">Browse Securely</h2>
                        </div>
                        <p class="process-text">
                            Once connected,take advantage of anonymous, browsing.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="blog-details.html" class="icon-btn">04</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--==============================
About Area
============================== -->
<section class="about-layout2 space-bottom">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row gx-60 gy-5 align-items-center">
            <div class="col-xl-6">
                <div class="about-img wow fadeInUp">
                    <img src="https://i.pinimg.com/originals/51/ce/d1/51ced1ca835521237877e5380a94c554.gif" alt="Mengenai Kami">
                </div>
            </div>
            <div class="col-xl-6">
                <div class="about-content">
                    <div class="title-area text-left wow fadeInUp wow-animated" data-wow-delay="0.3s">
                        <span class="sec-subtitle2">About Us</span>
                        <h2 class="sec-title">Your Trusted Partner For Digital Bussines</h2>
                    </div>
                    <div class="about-body">
                        <p class="about-text">
                            From custom application development to seamless cloud integration, we provide comprehensive IT services designed to accelerate your digital transformation. Let us help you optimize your business processes, enhance productivity, and achieve sustainable growth in today’s competitive digital landscape.
                        </p>
                        <div class="counter-style2">
                            <div class="media-style">
                                <div class="media-inner">
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title counter-number" data-count="1">1</h2>
                                        </div>
                                        <p class="media-text">Negara Yang Tersedia</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media-style">
                                <div class="media-inner">
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title counter-number" data-count="15">15</h2>
                                        </div>
                                        <p class="media-text">Server Aktif</p>
                                    </div>
                                </div>
                            </div>
                            <div class="media-style">
                                <div class="media-inner">
                                    <div class="media-counter">
                                        <div class="media-count">
                                            <h2 class="media-title counter-number" data-count="13">13</h2>
                                        </div>
                                        <p class="media-text">Projeck Selesai</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Service Area
============================== -->
<section class="service-layout1 service-space space-bottom">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle">Services</span>
                    <h2 class="sec-title">Our Awesome & Valuable Services</h2>
                </div>
            </div>
        </div>
        <div class="row vs-carousel wow fadeInUp wow-animated" data-wow-delay="0.3s" data-slide-show="4"
            data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true"
            data-arrows="true">
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <div class="service-icon">
                                <img src="{{ asset('template_v1/img/icon/service-icon-1-1.svg') }}" alt="icon">
                            </div>
                            <h2 class="service-title h6"><a href="service-details.html">Threat Protection</a></h2>
                            <p class="service-text">
                                Threat Protection blocks malicious sites, phishing, and malware, keeping your online
                                secure.
                            </p>
                        </div>
                        <a href="service-details.html" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <div class="service-icon">
                                <img src="{{ asset('template_v1/img/icon/service-icon-1-2.svg') }}" alt="icon">
                            </div>
                            <h2 class="service-title h6"><a href="service-details.html">Dark Web Monitor</a></h2>
                            <p class="service-text">
                                Our Dark Web Monitor scans the dark web for your data and alerts you if it's found,
                                helping you.
                            </p>
                        </div>
                        <a href="service-details.html" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <div class="service-icon">
                                <img src="{{ asset('template_v1/img/icon/service-icon-1-3.svg') }}" alt="icon">
                            </div>
                            <h2 class="service-title h6"><a href="service-details.html">Dedicated IP</a></h2>
                            <p class="service-text">
                                Get a unique, static IP address for better security, easy remote access, and a
                                reliable experience.
                            </p>
                        </div>
                        <a href="service-details.html" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <div class="service-icon">
                                <img src="{{ asset('template_v1/img/icon/service-icon-1-4.svg') }}" alt="icon">
                            </div>
                            <h2 class="service-title h6"><a href="service-details.html">Secure Browsing</a></h2>
                            <p class="service-text">
                                Protect your online activities with encrypted connections that keep your data safe
                                from hackers.
                            </p>
                        </div>
                        <a href="service-details.html" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="service-wrap">
                    <div class="service-style1">
                        <div class="service-body">
                            <div class="service-icon">
                                <img src="{{ asset('template_v1/img/icon/service-icon-1-2.svg') }}" alt="icon">
                            </div>
                            <h2 class="service-title h6"><a href="service-details.html">Dark Web Monitor</a></h2>
                            <p class="service-text">
                                Our Dark Web Monitor scans the dark web for your data and alerts you if it's found,
                                helping you.
                            </p>
                        </div>
                        <a href="service-details.html" class="icon-btn"><i
                                class="fa-regular fa-arrow-right"></i></a>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Video Area
============================== -->
<section class="video-layout1 video-space space-top" data-bg-src="{{ asset('template_v1/img/bg/video-bg2.jpg') }}">
    <div class="container position-relative wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="cta-style1">
            <div class="cta-wrap wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="row justify-content-md-end">
                    <div class="col-xl-7">
                        <div class="cta-content">
                            <div class="title-area text-left">
                                <span class="sec-subtitle2">Stay In Your Cybersecurity</span>
                                <h2 class="sec-title">Save 70% On VEEPN Plus Get Extra Month</h2>
                            </div>
                            <div class="cta-body">
                                <div class="download-btn">
                                    <a href="#" class="vs-btn2">Get The Deal</a>
                                </div>
                                <span class="cta-notice"><i class="fas fa-sack-dollar"></i>30 Day Money-Back
                                    Guarantee</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-5 col-md-8">
                        <div class="cta-img">
                            <img src="{{ asset('template_v1/img/cta/cta-img1.png') }}" alt="cta-image">
                        </div>
                    </div>
                </div>
                <div id="particles-js4" style="top: 0%; right: 0%; z-index: -1; width:45%; height:100%;"><canvas
                        class="particles-js-canvas-el"></canvas></div>
            </div>
        </div>
    </div>
</section>
<!--==============================
team Area
============================== -->
<section class="team-layout2 team-space" style="padding-bottom:100px">
    <div class="container position-relative">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="title-area text-lg-start text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle2">Team Member</span>
                    <h2 class="sec-title">Meet Our Awesome & Expert Team Members</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="title-arraw text-end">
                    <button class="icon-btn slick-prev" data-slick-prev=".team-slider"><i
                            class="fa-regular fa-arrow-left"></i></button>
                    <button class="icon-btn slick-next" data-slick-next=".team-slider"><i
                            class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row vs-carousel team-slider wow fadeInUp wow-animated" data-wow-delay="0.3s" data-slide-show="4"
            data-ml-slide-show="3" data-lg-slide-show="3" data-md-slide-show="2" data-autoplay="true"
            data-arrows="false">
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="{{asset('template_v1/img/team/team-img-2-1.jpg')}}" alt="team-img">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Rodja Hartmaan</a>
                        </h4>
                        <span class="degi">CEO, of VEEPN</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="{{asset('template_v1/img/team/team-img-2-2.jpg')}}" alt="team-img">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Olivia
                                Thompson</a></h4>
                        <span class="degi">CEO, of VEEPN</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="{{asset('template_v1/img/team/team-img-2-3.jpg')}}" alt="team-img">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Olivia
                                Thompson</a></h4>
                        <span class="degi">CEO, of VEEPN</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="{{asset('template_v1/img/team/team-img-2-4.jpg')}}" alt="team-img">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Daniel Hayes</a>
                        </h4>
                        <span class="degi">CEO, of VEEPN</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="team-style2">
                    <div class="team-img">
                        <img src="{{asset('template_v1/img/team/team-img-2-5.jpg')}}" alt="team-img">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Laura Mitchell</a>
                        </h4>
                        <span class="degi">CEO, of VEEPN</span>
                        <div class="member-links">
                            <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                            <a class="icon-btn" href="#"><i class="fab fa-behance"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Faq Area
============================== -->
<section class="faq-layout1 bg-body2 space-bottom">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle">FAQS</span>
                    <h2 class="sec-title">Frequently Asked Any Questions Us </h2>
                </div>
            </div>
        </div>
        <div class="row gy-5 gx-60">
            <div class="col-lg-8">
                <div class="accordion accordion-style1" id="faqVersion1">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">What
                                is a VPN and how does it work?</button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>VEEPN provides enhanced security, privacy, and unrestricted internet access. With
                                    our advanced encryption,
                                    no-logs policy, and global server network, you can browse securely and bypass
                                    geo-restrictions with ease.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                Where can I get some?
                            </button>
                        </div>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Yes, despite the removal of Government Feed-in Tariff, installs have been
                                    forecast to
                                    continue at the current rate and even increase in 2025.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                Will VEEPN slow down my internet connection?
                            </button>
                        </div>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Yes, despite the removal of Government Feed-in Tariff, installs have been
                                    forecast to
                                    continue at the current rate and even increase in 2025.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                Where can I get some?
                            </button>
                        </div>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>Yes, despite the removal of Government Feed-in Tariff, installs have been
                                    forecast to
                                    continue at the current rate and even increase in 2025.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                What if I have issues with my VPN connection?
                            </button>
                        </div>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>VEEPN provides enhanced security, privacy, and unrestricted internet access. With
                                    our advanced encryption,
                                    no-logs policy, and global server network, you can browse securely and bypass
                                    geo-restrictions with ease..
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                How do I set up VEEPN?
                            </button>
                        </div>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix"
                            data-bs-parent="#faqVersion1">
                            <div class="accordion-body">
                                <p>VEEPN provides enhanced security, privacy, and unrestricted internet access. With
                                    our advanced encryption,
                                    no-logs policy, and global server network, you can browse securely and bypass
                                    geo-restrictions with ease.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="faq-img">
                    <img src="{{asset('template_v1/img/default/faq-img1.png')}}" alt="faq">
                </div>
            </div>
        </div>
    </div>
</section>
<!--==============================
Blog  Area
==============================-->
<section class="vs-blog-wrapper blog-layout2 bg-title space">
    <div class="container z-index1 wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-5">
                <div class="title-area text-lg-start text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle2">Rekanan Dan Pekerjaan</span>
                    <h2 class="sec-title">Cek Yuk Rekanan Kami Yang Keren & Hasilnya</h2>
                </div>
            </div>
            <div class="col-lg-7">
                <div class="title-arraw text-end">
                    <button class="icon-btn slick-prev" data-slick-prev=".blog-slider"><i
                            class="fa-regular fa-arrow-left"></i></button>
                    <button class="icon-btn slick-next" data-slick-next=".blog-slider"><i
                            class="fa-regular fa-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="row g-5 space-extra-bottom">
            <div class="col-lg-12">
                <div class="row vs-carousel blog-slider" data-slide-show="3" data-lg-slide-show="2"
                    data-md-slide-show="2" data-autoplay="true" data-arrows="false">
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-1.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">Top 5 Reasons to Use a VPN for Streaming</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">24
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-2.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">Why Online Privacy Matters More Than Ever</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-3.jpg')}}" alt="Blog Image"></a>  
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">How VEEPN Protects You from Cyber Threats</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-4.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">How to Choose the Best VPN Server for Your Needs</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-style2 vs-blog">
                            <div class="blog-inner">
                                <div class="blog-date">23
                                    <span class="month">Mar</span>
                                    <span class="year">2025</span>
                                </div>
                                <div class="blog-img">
                                    <a href="blog-details.html"><img class="img"
                                            src="{{asset('template_v1/img/blog/blog-s-1-5.jpg')}}" alt="Blog Image"></a>
                                    <div class="shep-btn">
                                        <svg width="75" height="75" viewBox="0 0 111 111" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                                fill="none"></path>
                                        </svg>
                                    </div>
                                </div>
                                <a href="blog-details.html" class="icon-btn"><i
                                        class="fa-regular fa-arrow-right"></i></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta mb-3">
                                    <a href="blog.html"><i class="fa-solid fa-user"></i>Rivanur Rafi</a>
                                    <a href="blog.html"><i class="fas fa-comments"></i>14 Comments</a>
                                </div>
                                <h2 class="blog-title h5">
                                    <a href="blog-details.html">How VEEPN Keeps Your Data Safe on Public Wi-Fi</a>
                                </h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container z-index1 wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="brand-style2">
            <div class="row align-items-center justify-content-between vs-carousel" data-slide-show="5"
                data-lg-slide-show="4" data-md-slide-show="3" data-center-mode="true" data-lg-center-mode="true"
                data-md-center-mode="true" data-autoplay="true" data-arrows="false">
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/GayengMasAbadi.png') }}" alt="PT. GAYENG MAS ABADI">
                    </div>
                    <p class="media-info text-center">PT. GAYENG MAS ABADI<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/SMKN1MALANG.png') }}" alt="SMKN 1 Malang">
                    </div>
                    <p class="media-info text-center">SMKN 1 Malang<br>2019 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/PGRI6MALANG.jpg') }}" alt="SMK PGRI 6 Malang">
                    </div>
                    <p class="media-info text-center">SMK PGRI 6 Malang<br>2021 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/KOTAKCANTIKMAGELANG.png') }}" alt="KOTAK CANTIK MAGELANG">
                    </div>
                    <p class="media-info text-center">KOTAK CANTIK MAGELANG<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/YAYASANSINARABADI.png') }}" alt="SMK SINAR ABADI MELAK">
                    </div>
                    <p class="media-info text-center">SMK SINAR ABADI MELAK<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/ARTHAMEDICALCENTRE.png') }}" alt="KLINIK ARTHA MEDICAL CENTRE MELAK">
                    </div>
                    <p class="media-info text-center">KLINIK ARTHA MEDICAL CENTRE MELAK<br>2024 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/PUSKESMASDEMPAR.png') }}" alt="PUSKESMAS DEMPAR">
                    </div>
                    <p class="media-info text-center">PUSKESMAS DEMPAR KUTAI BARAT<br>2023 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/OLIVIABABYSHOP.png') }}" alt="OLIVIA BABY SHOP MALANG">
                    </div>
                    <p class="media-info text-center">OLIVIA BABY SHOP MALANG<br>2014 - 2024</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/SANJAYAGROUP.png') }}" alt="SANJAYAGROUP">
                    </div>
                    <p class="media-info text-center">SANJAYA GROUP (OLI DAN GROSIR)<br>2022 - SEKARANG</p>
                </div>
                <div class="col-auto">
                    <div class="brand-item-oke">
                        <img src="{{ asset('template_v1/img/brand/TOKOQQTEMPURSARI.png') }}" alt="SANJAYAGROUP">
                    </div>
                    <p class="media-info text-center">TOKO SEPATU QQ TEMPUR SARI<br>2022 - SEKARANG</p>
                </div>
            </div>
        </div>
    </div>
    <div id="process-particle1" style="top: 0%; left: 0%; width: 30%; height: 70%; z-index: 0;"><canvas
            class="particles-js-canvas-el"></canvas></div>
    <div id="process-particle2" style="bottom: 0%; right: 0%; width: 30%; height: 50%; z-index: 0;"><canvas
            class="particles-js-canvas-el"></canvas></div>
</section>
<!--==============================
Footer Area
==============================-->
<footer class="footer-wrapper  footer-layout1" data-bg-src="{{asset('template_v1/img/bg/footer-bg-1-1.jpg')}}">
    <div class="container">
        <div class="footer-top">
            <div class="row g-5 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-xl-5 col-lg-4">
                    <div class="footer-logo">
                        <a href="{{ url('') }}"><img style="width: 300px;" src="{{ asset('template_v1/img/logo/logo_eds_color.png') }}" alt="Logo Eraya Digital Solusindo"></a>
                    </div>
                </div>
                <div class="col-xl-7 col-lg-8">
                    <div class="widget widget_newsletter footer-widget">
                        <div class="newsletter1">
                            <div class="newsletter-inner">
                                <span class="newsletter-icon"><img src="{{asset('template_v1/img/icon/envlope1.png')}}"
                                        alt="icon"></span>
                                <h4 class="newsletter_title h5">Subscribe Newsletter</h4>
                            </div>
                            <form class="newsletter-form">
                                <div class="search-btn">
                                    <input class="form-control" type="email" placeholder="Enter your email....">
                                    <button type="submit" class="vs-btn2">Subscribe</button>
                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="widget-area">
        <div class="container">
            <div class="row g-5 justify-content-center">
                <div class="col-xl-4 col-md-6">
                    <div class="widget footer-widget">
                        <div class="vs-widget-about">
                            <h3 class="widget_title">About Company</h3>
                            <p class="footer-text">A professional software house established in 2024, we experienced provide Digital and IT solutions for organizations. We served numbers of clients accross Indonesia from SME, Enterprise and Government. Our passion and intuitiveness help the business growth seamlessly.</p>
                            <div class="footer-social">
                                <a class="icon-btn" href="#"><i class="fab fa-facebook-f"></i></a>
                                <a class="icon-btn" href="#"><i class="fab fa-twitter"></i></a>
                                <a class="icon-btn" href="#"><i class="fab fa-instagram"></i></a>
                                <a class="icon-btn" href="#"><i class="fa-brands fa-behance"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-8 col-md-6">
                    <div class="widget footer-widget">
                        <h3 class="widget_title">Office Maps</h3>
                        <div class="footer-map">
                        <iframe  title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0241718589114!2d106.82590461135096!3d-6.2605461937018365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f37d942851e3%3A0xe99ce2e714d0a5!2sPT.SAID%20KRAMA%20YUDHA!5e0!3m2!1sid!2sid!4v1730714088653!5m2!1sid!2sid" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                        <div class="row">
                        <div class="col-md-6">
                                <div class="media-style1">
                                    <div class="media-icon icon-btn"><i class="fa-solid fa-map-location-dot"></i></div>
                                    <div class="media-body">
                                        <h3 class="media-title">[Head Office Address] Gedung Graha Krama Yudha Lt. 4 Unit B Jl. Hj. Tutty Alawiyah no. 43, Kel. Duren Tiga, Kec. Pancoran DKI Jakarta - Jakarta Selatan 12760</h3>
                                    </div>
                                </div>
                                <div class="media-style1">
                                    <div class="media-icon icon-btn"><i class="fa-solid fa-map-location-dot"></i></div>
                                    <div class="media-body">
                                        <h3 class="media-title">[Branch Office Address] Jl. Tarupala Gang 2 No 2 RT 24 RW 04 Kec. Pakisaji, Keluaran Kebonagung, Kabupaten Malang, Jawa Timur 65165</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="widget footer-widget">
                                    <div class="media-style1">
                                        <div class="media-icon icon-btn"><i class="fa-solid fa-phone"></i></div>
                                        <div class="media-body">
                                            <h3 class="media-title">Phone or Chat No:</h3>
                                            <p class="media-info"><a href="tel:+6285799663331">(+62)857-9966-3331 (Erfan)</a></p>
                                            <p class="media-info"><a href="tel:+6282557808535">(+62)825-5780-8535 (Aries)</a></p>
                                            <p class="media-info"><a href="tel:+6282233641442">(+62)822-3364-1442 (Ryan)</a></p>
                                        </div>
                                    </div>
                                    <div class="media-style1">
                                        <div class="media-icon icon-btn"><i class="fa-solid fa-envelope"></i></div>
                                        <div class="media-body">
                                            <h3 class="media-title">Email Address:</h3>
                                            <p class="media-info"><a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="copyright-wrap">
            <div class="row g-2 justify-content-lg-between justify-content-center align-items-center">
                <div class="col-auto">
                    <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2024 - <?php echo date("Y") ?> <a
                            href="{{ url('') }}">PT. Eraya Digital Solusindo</a></p>
                </div>
                <div class="col-auto">
                    <div class="copyright-menu">
                        <ul class="list-unstyled">
                            <li><a href="javascript:void(0)">Privacy Policy</a></li>
                            <li><a href="javascript:void(0)">Terms & Conditions </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
@endsection
@section('css_load')
<link rel="stylesheet" href="{{ asset('template_v1/sass/template/meteor.css') }}">
<style>
.vs-btn{
    border-radius: 20px;
}
.brand-item-oke {
    background-color: white !important;
    padding: 35px 40px;
    border-radius: 20px;
    height: auto;
    max-width: 240px;
    width: 100%;
    text-align: center;
    cursor: pointer;
}
.brand-item-oke img {
    transition: all 0.5s ease;
}
</style>
@endsection
@section('js_load')
@endsection
