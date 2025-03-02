@extends('templatebody')
@section('konten_utama')
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
                            <h2 class="process-title h5">Konsultasi</h2>
                        </div>
                        <p class="process-text">
                            Konsultasikan masalah anda kepada kami secara jelas dan terperinci.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">01</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-2.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Metode dan Pengerjaan</h2>
                        </div>
                        <p class="process-text">
                            Kami merancang dan mengembangkan solusi sesuai dengan kebutuhan.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">02</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-3.svg') }}" alt="icon">
                            </div>
                            <h2 class="process-title h5">Refisi dan Penyempuran</h2>
                        </div>
                        <p class="process-text">
                            Sesuaikan dan penyempuran solusi yang telah dikembangkan.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">03</a>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-4 col-sm-6">
                    <div class="process-item">
                        <div class="process-inner">
                            <div class="process-icon">
                                <img src="{{ asset('template_v1/img/icon/process-icon-1-4.svg') }}" alt="icon"> 
                            </div>
                            <h2 class="process-title h5">Publish dan Maintain</h2>
                        </div>
                        <p class="process-text">
                            Jalankan dan rawat produk/jasa yang telah selesai secara bertahap.
                        </p>
                        <div class="shep-btn">
                            <svg width="72" height="72" viewBox="0 0 111 111" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M0 0C19.33 0 35 15.67 35 35V41C35 50.33 50.67 76 75 76H76C95.33 76 111 91.67 111 111V0H0Z"
                                    fill="none"></path>
                            </svg>
                        </div>
                        <a href="javascript:void(0)" class="icon-btn">04</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                        <span class="sec-subtitle2">Kami Siapa ?</span>
                        <h2 class="sec-title">Mitra Tepercaya Anda Untuk Bisnis Digital</h2>
                    </div>
                    <div class="about-body">
                        <p class="about-text" style="text-align: justify;margin-top:-30px">
                            Kami adalah mitra yang terpercaya untuk bisnis digital Anda. Dengan layanan IT yang komprehensif, kami membantu Anda memaksimalkan potensi digital Anda. Dari pengembangan aplikasi kustom hingga integrasi cloud yang lancar, kami menyediakan layanan IT yang dirancang untuk mempercepat transformasi digital Anda.
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
<section id="layanan_kami" class="service-layout1 service-space space-bottom">
    <div class="container wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="title-area text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle">Layanan</span>
                    <h2 class="sec-title">Layanan Kami Yang Mengagumkan</h2>
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
                            <a href="{{ route('layanan.email') }}">
                            <img src="{{ asset('template_v1/img/icon/mail_server.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center" style="color:white">Mail Server</h2>
                            <p class="service-text text-center">
                                Ingin membuat nema email kamu atau perusahaanmu menjadi profesional  dengan cepat dan aman seperti ini namakamu@namaperusahaan.co.id.
                            </p>
                            </a>
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
                            <img src="{{ asset('template_v1/img/icon/developer.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="javascript:void(0)">Pengembangan Aplikasi</a></h2>
                            <p class="service-text text-center">
                                Ingin merubah bisnis manual kamu menjadi digital agar dapat termonitoring secara akurat dan mudah serta dilihat banyak orang.
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
                            <img src="{{ asset('template_v1/img/icon/konsultan_pajak.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="javascript:void(0)">Pajak dan Akuntansi</a></h2>
                            <p class="service-text text-center">
                                Kami akan mengumpulkan informasi tentang situasi keuangan klien dan menyusun strategi, untuk membantu mengurangi kewajiban pajak dengan mengambil keuntungan dari kredit dan pemotongan pajak.
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
                            <img src="{{ asset('template_v1/img/icon/umkm.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="javascript:void(0)">UMKM</a></h2>
                            <p class="service-text text-center">
                                Mengembangkan usaha anda dengan bantuan teknologi, ayo konsultasikan masalah anda kepada kami serta akan membantu sepenuh hati
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
                            <img src="{{ asset('template_v1/img/icon/devops.svg') }}" alt="icon">
                            <h2 class="service-title h6 text-center"><a href="service-details.html">Dev OPS</a></h2>
                            <p class="service-text text-center">
                                Membutuhkan jasa untuk merawat infrastruktur anda seperti server, jaringan lokal , database, dsb. Jangan khawatir kami sudah terbiasa.
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
<section class="video-layout1 video-space space-top" data-bg-src="{{ asset('template_v1/img/bg/video-bg2.jpg') }}">
    <div class="container position-relative wow fadeInUp wow-animated" data-wow-delay="0.3s">
        <div class="cta-style1">
            <div class="cta-wrap wow fadeInUp wow-animated" data-wow-delay="0.3s">
                <div class="row justify-content-md-end">
                    <div class="col-xl-7">
                        <div class="cta-content">
                            <div class="title-area text-left">
                                <span class="sec-subtitle2">Stay In Your Cybersecurity</span>
                                <h2 class="sec-title">Jangan khawatir semua informasi baik data tertulis atau digital yang anda konsultasikan kepada kami akan kami jaga 100%</h2>
                            </div>
                            <div class="cta-body">
                                <span class="cta-notice"><i class="fas fa-sack-dollar"></i> 100% Satisfaction Guarantee</span>
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
<section class="team-layout2 team-space" style="padding-bottom:100px">
    <div class="container position-relative">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-8">
                <div class="title-area text-lg-start text-center wow fadeInUp wow-animated" data-wow-delay="0.3s">
                    <span class="sec-subtitle2">Keluarga Eraya</span>
                    <h2 class="sec-title">Kenalan Dengan Tim Kami Yang Keren Dan Profesional</h2>
                </div>
            </div>
            <div class="col-lg-4">
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
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Ariza Agung P</a>
                        </h4>
                        <span class="degi">Marketing Eraya Digital</span>
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
                        <img src="{{asset('template_v1/img/team/team-img-2-1.jpg')}}" alt="team-img">
                    </div>
                    <div class="member-content">
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Erfan Huda</a>
                        </h4>
                        <span class="degi">Konsultan Pajak dan Akuntan</span>
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
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Mochamad Aries S</a></h4>
                        <span class="degi">Sistem Analis</span>
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
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Ryan Dony Pratama</a></h4>
                        <span class="degi">Senior Programmer</span>
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
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Yoppi Niko Ifandika</a>
                        </h4>
                        <span class="degi">Senior Programmer</span>
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
                        <h4 class="member-name h5"><a class="team-title" href="team-details.html">Achmad Rozikin</a>
                        </h4>
                        <span class="degi">DevOps Spesialis</span>
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
    margin: auto;
}
.brand-item-oke img {
    transition: all 0.5s ease;
}
</style>
@endsection
@section('js_load')
@endsection
