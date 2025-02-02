@extends('templatebody')
@section('konten_utama')
  <!--==============================
    Mobile Menu
  ============================== -->
    <div class="vs-menu-wrapper">
        <div class="vs-menu-area text-center">
            <button class="vs-menu-toggle"><i class="fal fa-times"></i></button>
            <div class="mobile-logo">
                <a href="{{ url('/') }}"><img src="{{ asset('canvas/assets/img/logo.png') }}" alt="Eraya Digital Solusindo" class="logo"></a>
            </div>
            <div class="vs-mobile-menu">
                <ul>
                    <li class="">
                        <a href="{{ url('/') }}">Beranda</a>
                    </li>
                    <li>
                        <a href="/about">Forums</a>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="/blog">Services</a>
                        <ul class="sub-menu">
                            <li><a href="/blog">Eraya Digital</a></li>
                            <li><a href="/blog-grid">Eraya Accounting</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--==============================
        Header Area
    ==============================-->
    <header class="vs-header header-layout1">
        <!-- Header Top -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center justify-content-between gy-1 text-center text-lg-start">
                    <div class="col-lg-auto d-none d-lg-block">
                        <p class="header-text"><span class="fw-medium">Join Us :</span> Interested in joining us ? <a style="text-decoration: none;color: white;" href="javascript:void(0)">COME ON OVER!!!</a></p>
                    </div>
                    <div class="col-lg-auto">
                        <div class="header-social style-white">
                            <span class="social-title">Follow Us On: </span>
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-instagram"></i></a>
                            <a href="#"><i class="fab fa-behance"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="menu-top">
                <div class="row justify-content-between align-items-center gx-sm-0">
                    <div class="col">
                        <div class="header-logo">
                            <a href="/"><img src="{{ asset('canvas/assets/img/logo.png') }}" alt="TechBiz" class="logo"></a>
                        </div>
                    </div>
                    <div class="col-auto header-info ">
                        <div class="header-info_icon"><i class="fas fa-phone-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Call Anytime 24/7</span>
                            <div class="header-info_link"><a href="tel:+6282257808535">(+62) 82-257-808-535</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-lg-flex">
                        <div class="header-info_icon"><i class="fas fa-envelope"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Mail Us For Support</span>
                            <div class="header-info_link"><a href="mailto:hallo@erayadigital.co.id">hallo@erayadigital.co.id</a></div>
                        </div>
                    </div>
                    <div class="col-auto header-info d-none d-xl-flex">
                        <div class="header-info_icon"><i class="fas fa-map-marker-alt"></i></div>
                        <div class="media-body">
                            <span class="header-info_label">Head office address</span>
                            <div class="header-info_link">Jakarta, Indonesia</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu Area -->
        <div class="sticky-wrapper">
            <div class="sticky-active">
                <div class="container">
                    <div class="row align-items-center justify-content-between">
                        <div class="col-auto">
                            <nav class="main-menu menu-style1 d-none d-lg-block">
                                <ul>
                                    <li><a href="{{ url('/') }}"><span class="has-new-lable">Dashboard</span></a></li>
                                    <li><a href="/about">Forums</a></li>
                                    <li class="menu-item-has-children">
                                        <a href="javascript:void(0)">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="javascript:void(0)">Eraya Digital</a></li>
                                            <li><a href="javascript:void(0)">Eraya Accounting</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                            <button class="vs-menu-toggle d-inline-block d-lg-none"><i class="fal fa-bars"></i></button>
                        </div>
                        <div class="col-auto ">
                            <button class="btn btn-primary">Berkas Proposal</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--==============================
      Hero Area
    ==============================-->
    <section class="vs-hero-wrapper position-relative  ">
        <div class="vs-hero-carousel" data-height="850" data-container="1900" data-slidertype="responsive">
            <!-- Slide 1-->
            <div class="ls-slide" data-ls="duration:12000; transition2d:5; kenburnszoom:in; kenburnsscale:1.1;">
                <img width="1920" height="850" src="{{ asset('canvas/assets/img/hero/hero-1-1.jpg') }}" class="ls-bg" alt="hero-bg">
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:300px; height:1558px; background-color:rgba(14, 84, 245, 0.5); top:-473px; left:51px;" class="ls-l ls-text-layer d-hd-none" data-ls="offsetxin:-800; offsetyin:-800; durationin:1700; delayin:1200; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; rotation:43.46;"></div>
                <div style="font-size:36px; color:#000; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:400; letter-spacing:0px; border-style:solid; border-color:#000; background-position:0% 0%; background-repeat:no-repeat; width:589px; height:1819.7px; top:-485px; left:406px; background:linear-gradient(172deg, rgba(5, 26, 79, 0.35) 21%, rgba(0, 0, 0, 0) 54%);" class="ls-l ls-text-layer d-hd-none" data-ls="offsetxin:-800; offsetyin:-800; durationin:1500; delayin:1300; easingin:easeOutQuint; rotatein:43.46; offsetxout:1200; offsetyout:1200; durationout:8000; startatout:slidechangeonly + 3000; easingout:easeOutQuint; scaleyout:5; bgcolorout:transparent; colorout:transparent; rotation:43.46;"></div>
                <p style="font-size:18px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:9px; padding-right:23.5px; padding-left:23.5px; top:240px; left:588px; padding-bottom:9px;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">WE HAVE TOP IT EXPERT</p>
                <h1 style="top:225px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; color:#ffffff; font-family:Exo;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST IT
                </h1>
                <h1 style="top:305px; left:345px; font-weight:700; background-size:inherit; background-position:inherit; font-size:60px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SERVICE &amp; SOLUTION 2022
                </h1>
                <div style="top:405px; left:350px; background-size:inherit; background-position:inherit; font-size:16px; line-height:28px; font-family:Fira Sans; width:695px; color:#ffffff; white-space:normal;" class="ls-l ls-hide-tablet ls-hide-phone ls-text-layer" data-ls="offsetyin:50; durationin:1500; delayin:600; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">Professionally repurpose intuitive total linkage after timely mindshare. Credibly coordinate reliable collaboration and idea-sharing after turnkey catalysts for change.</div>
                <div style="top:495px; left:350px; background-size:inherit; background-position:inherit; font-size:24px;" class="ls-l ls-hide-tablet ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="/about" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="/blog" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <p style="font-size:32px; text-align:left; font-style:normal; text-decoration:none; text-transform:none; font-weight:600; letter-spacing:0px; border-style:solid; background-position:0% 0%; background-repeat:no-repeat; font-family:Exo; color:#ffffff; border-width:2px 2px 2px 2px; border-color:#ffffff; border-radius:5px 5px 5px 5px; padding-top:18px; padding-right:44px; padding-left:44px; top:160px; left:90px; padding-bottom:18px;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:300; durationin:1500; delayin:400; easingin:easeOutQuint; offsetxout:300; durationout:1500; easingout:easeOutQuint;">WE HAVE TOP IT EXPERT</p>
                <h1 style="top:280px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; color:#ffffff; font-family:Exo;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST IT SERVICE &amp;
                </h1>
                <h1 style="top:380px; left:80px; font-weight:700; background-size:inherit; background-position:inherit; font-size:80px; font-family:Exo; color:#ffffff; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-desktop ls-hide-phone ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SOLUTION 2022
                </h1>
                <div style="top:540px; left:80px; background-size:inherit; background-position:inherit; font-size:24px;" class="ls-l ls-hide-desktop ls-hide-phone ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="/about" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="/blog" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
                <h1 style="top:120px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; color:#ffffff; font-family:Exo; width:10000px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-200; durationin:1500; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint; position:relative;">
                    BEST IT SERVICE &amp;
                </h1>
                <h1 style="top:280px; left:50%; text-align:center; font-weight:700; background-size:inherit; background-position:inherit; font-size:130px; font-family:Exo; color:#ffffff; width:10000px; text-transform:none; border-style:solid; border-color:#000; background-color:transparent; background-repeat:no-repeat; cursor:auto;" class="ls-l ls-hide-desktop ls-hide-tablet ls-text-layer" data-ls="offsetxin:-200; durationin:1500; delayin:200; easingin:easeOutQuint; offsetxout:-100; durationout:1500; easingout:easeOutQuint;">
                    SOLUTION 2022
                </h1>
                <div style="top:520px; left:50%; text-align:center; background-size:inherit; background-position:inherit; font-size:24px; width:1000px;" class="ls-l ls-hide-desktop ls-hide-tablet ls-html-layer" data-ls="offsetyin:50; durationin:1500; delayin:900; easingin:easeOutQuint; offsetyout:50; durationout:1500; easingout:easeOutQuint; position:relative;">
                    <div class="ls-btn-group">
                        <a href="/about" class="vs-btn ls-hero-btn">ABOUT US<i class="far fa-arrow-right"></i></a>
                        <a href="/blog" class="vs-btn style2 ls-hero-btn">READ MORE<i class="far fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div data-bg-src="{{ asset('canvas/assets/img/bg/ab-bg-1-1.jpg') }}">
        <!--==============================
    Features Area
    ==============================-->
        <section class="feature-wrap1  space-top space-extra-bottom">
            <div class="container wow fadeInUp" data-wow-delay="0.2s">
                <div class="row vs-carousel" data-slide-show="3" data-lg-slide-show="2" data-md-slide-show="2">
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="{{ asset('canvas/assets/img/icon/fe-1-1.png') }}" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Development Services</a></h3>
                            <p class="feature-text">We implement development solutions through highly efficient process improvements, ensuring maximum results are achieved.</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="{{ asset('canvas/assets/img/icon/fe-1-2.png') }}" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Marketing Services</a></h3>
                            <p class="feature-text">With measurable, data-driven strategies, we help you reach the right audience, increase conversions, and build a strong brand</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                    <div class="col-xl-4">
                        <div class="feature-style1">
                            <div class="feature-icon"><img src="{{ asset('canvas/assets/img/icon/fe-1-3.png') }}" alt="Features"></div>
                            <h3 class="feature-title h5"><a class="text-inherit" href="service-details.html">Consulting Services</a></h3>
                            <p class="feature-text">We provide strategic guidance that can increase operational efficiency, optimize business processes, and formulate innovative solutions.</p>
                            <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--==============================
    About Us
    ==============================-->
        <section class="position-relative space-bottom">
            <span class="about-shape1 d-none d-xl-block">ERAYA</span>
            <div class="container z-index-common">
                <div class="row gx-60">
                    <div class="col-lg-6 col-xl-5 mb-50 mb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="img-box1">
                            <div class="img-1">
                                <img src="{{ asset('canvas/assets/img/about/ab-1-1.jpg') }}" alt="About image">
                            </div>
                            <div class="img-2">
                                <img src="{{ asset('canvas/assets/img/about/ab-1-2.jpg') }}" alt="About image">
                                <a class="play-btn style2 position-center popup-video" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class=""><i class="fas fa-play"></i></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-7 align-self-center wow fadeInUp" data-wow-delay="0.3s">
                        <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>Get best It solution 2022</span>
                        <h2 class="sec-title h1">Trust Our Best IT Solution For Your Business</h2>
                        <p class="mb-4 mt-1 pb-3">Compellingly mesh cross-platform portals through functional human capital world-class architectures for orthogonal initiatives. Assertively benchmark visionary quality vectors after covalent e-tailers. Intrinsicly enhance 24/7 users and supply process</p>
                        <div class="call-media">
                            <div class="call-media__icon"><img src="{{ asset('canvas/assets/img/icon/tel-1-1.png') }}" alt="icon"></div>
                            <div class="media-body">
                                <span class="call-media__label">24 HOURS SERVICE AVAILABLE</span>
                                <p class="call-media__info">Call Us: <a href="tel:+6668880000">+(666) 888 0000</a></p>
                            </div>
                        </div>
                        <a href="about.html" class="vs-btn">About Us<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--==============================
    Service Area
    ==============================-->
    <section class=" space-top space-extra-bottom" data-bg-src="{{ asset('canvas/assets/img/bg/sr-bg-1-1.png') }}">
        <div class="container">
            <div class="row justify-content-center text-center">
                <div class="col-lg-8 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="title-area">
                        <span class="sec-subtitle">Our Latest Services</span>
                        <h2 class="sec-title h1">What Kind of Services We are Offering</h2>
                    </div>
                </div>
            </div>
            <div class="row wow fadeInUp" data-wow-delay="0.2s">
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="{{ asset('canvas/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                        <div class="service-icon"><img src="{{ asset('canvas/assets/img/icon/sr-icon-1-1.png') }}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Cloud Services</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="{{ asset('canvas/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                        <div class="service-icon"><img src="{{ asset('canvas/assets/img/icon/sr-icon-1-2.png') }}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Web Development</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="{{ asset('canvas/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                        <div class="service-icon"><img src="{{ asset('canvas/assets/img/icon/sr-icon-1-3.png') }}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">IT Management</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="{{ asset('canvas/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                        <div class="service-icon"><img src="{{ asset('canvas/assets/img/icon/sr-icon-1-4.png') }}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Software Services</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="{{ asset('canvas/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                        <div class="service-icon"><img src="{{ asset('canvas/assets/img/icon/sr-icon-1-5.png') }}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Machine Learning</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4">
                    <div class="service-style1">
                        <div class="service-bg" data-bg-src="{{ asset('canvas/assets/img/bg/sr-box-bg-1.jpg') }}"></div>
                        <div class="service-icon"><img src="{{ asset('canvas/assets/img/icon/sr-icon-1-6.png') }}" alt="Features"></div>
                        <h3 class="service-title h5"><a href="service-details.html">Business Analysis</a></h3>
                        <p class="service-text">Deliver plug commerce with dynamic is expertise. leading edge products with business models</p>
                        <a href="service-details.html" class="vs-btn style3">Read More<i class="far fa-long-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    FAQ Area
    ==============================-->
    <section class="faq-wrap1  ">
        <div class="faq-shape1" data-bg-src="{{ asset('canvas/assets/img/bg/faq-bg-1-1.jpg') }}"></div>
        <div class="faq-shape2" data-bg-src="{{ asset('canvas/assets/img/bg/faq-bg-1-2.jpg') }}"></div>
        <div class="container">
            <div class="row gx-60">
                <div class="col-lg-6 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="img-box2">
                        <div class="img-1"><img src="{{ asset('canvas/assets/img/faq/faq-1-1.jpg') }}" alt="FAQ image"></div>
                        <div class="img-2"><img src="{{ asset('canvas/assets/img/faq/faq-1-2.jpg') }}" alt="FAQ image"><a class="play-btn style3 position-center" href="https://www.youtube.com/watch?v=_sI_Ps7JSEk"><i class=""><i class="fas fa-play"></i></i></a></div>
                    </div>
                </div>
                <div class="col-lg-6 align-self-center">
                    <span class="sec-subtitle text-white"><i class="fas fa-bring-forward"></i>Talk About Something</span>
                    <h2 class="sec-title text-white mb-4 pb-2 h1">How can we help you?</h2>
                    <div class="accordion accordion-style1" id="faqVersion1">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Master Technology It Solution Services Making?
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p> Assertively communicate multidisciplinary content through emerging skills for intermandated e-tailers. Rapidiously revolutionize emerging supply for interdependent portals. Monotonectally restore 24/365 leadership for high quality niche markets transform emerging mindshare...</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Contrary to popular belief is not simply random text?
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p> Assertively communicate multidisciplinary content through emerging skills for intermandated e-tailers. Rapidiously revolutionize emerging supply for interdependent portals. Monotonectally restore 24/365 leadership for high quality niche markets transform emerging mindshare...</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    There are many variations of passages of available?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqVersion1">
                                <div class="accordion-body">
                                    <p> Assertively communicate multidisciplinary content through emerging skills for intermandated e-tailers. Rapidiously revolutionize emerging supply for interdependent portals. Monotonectally restore 24/365 leadership for high quality niche markets transform emerging mindshare...</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Skill Area
    ==============================-->
    <section class=" space-top space-extra-bottom">
        <div class="container">
            <div class="row flex-row-reverse">
                <div class="col-lg-5 col-xxl-auto mb-30 pb-20 pb-lg-0 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('canvas/assets/img/skill/skill-1-1.jpg') }}" alt="Skill image">
                </div>
                <div class="col-lg-7 col-xxl-6 me-xl-auto">
                    <span class="sec-subtitle"><i class="fas fa-bring-forward"></i>The Great Company Skill</span>
                    <h2 class="sec-title h1">Connecting People And Build Technology</h2>
                    <p class="mb-4 pb-1">Energistically evisculate an expanded array of meta-services after cross-media strategic theme areas. Interactively simplify interactive customer service before fully tested relationship parallel task high standards...</p>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Business Security</h3>
                        <span class="progress-box__number">65%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Career Development</h3>
                        <span class="progress-box__number">88%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                    <div class="progress-box">
                        <h3 class="progress-box__title">Business Inovation</h3>
                        <span class="progress-box__number">90%</span>
                        <div class="progress-box__progress">
                            <div class="progress-box__bar" role="progressbar" style="width: 90%" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
    Blog Area
    ==============================-->
    <section class="vs-blog-wrapper  space-top space-extra-bottom" data-bg-src="{{ asset('canvas/assets/img/bg/blog-bg-1-1.jpg') }}">
        <div class="container  wow fadeInUp" data-wow-delay="0.2s">
            <div class="row justify-content-center text-center">
                <div class="col-xl-6">
                    <div class="title-area">
                        <span class="sec-subtitle">Our Happy Customers</span>
                        <h2 class="sec-title h1">Recent Projects</h2>
                    </div>
                </div>
            </div>
            <div class="row vs-carousel" data-slide-show="3" data-md-slide-show="2">
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('canvas/assets/img/blog/blog-1-1.jpg') }}  " alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>24 Feb, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Contrary to popular belief ipsum is not simply </a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('canvas/assets/img/blog/blog-1-4.jpg') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>30 Mar, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Lorem ipsum placeholder text commonly used</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('canvas/assets/img/blog/blog-1-2.jpg') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>31 Jul, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">From its medieval to the digital learn everything</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4">
                    <div class="vs-blog blog-style1">
                        <div class="blog-img">
                            <img src="{{ asset('canvas/assets/img/blog/blog-1-3.jpg') }}" alt="Blog Image" class="w-100">
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <a href="blog.html"><i class="far fa-calendar"></i>26 Aug, 2022</a>
                                    <a href="blog.html"><i class="fal fa-user"></i>by admin</a>
                                </div>
                                <h3 class="blog-title h5"><a href="blog-details.html">Global Business Goal Make Life Easy From Tech</a></h3>
                                <a href="blog-details.html" class="link-btn">Read Details<i class="far fa-arrow-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--==============================
			Footer Area
	==============================-->
    <footer class="footer-wrapper footer-layout1" data-bg-src="{{ asset('canvas/assets/img/shape/bg-footer-1-1.jpg') }}">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-map-marker-alt"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Head office address</span>
                                <div class="footer-info_link">Gedung Graha Krama Yudha Lt. 4 Unit B Jl. Hj. Tutty Alawiyah no. 43, Kel. Duren Tiga, Kec. Pancoran DKI Jakarta - Jakarta Selatan 12760</div>
                                <span class="footer-info_label">Branch office address</span>
                                <div class="footer-info_link">Jl. Tarupala Gang 2 No 2 RT 24 RW 04 Kec. Pakisaji, Keluaran Kebonagung, Kabupaten Malang, Jawa Timur 65165</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 footer-info_group">
                        <div class="footer-info">
                            <div class="footer-info_icon"><i class="fal fa-clock"></i></div>
                            <div class="media-body">
                                <span class="footer-info_label">Working Hours WIB</span>
                                <div class="footer-info_link">Weekdays 08.00 - 21.00<br>Weekend 10.00 - 18.00<br>Sunday Closed</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="widget-area">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">About Us</h3>
                            <div class="vs-widget-about">
                                <p class="footer-text" style="text-align: justify;">A professional software house established in 2019, we experienced provide Digital and IT solutions for organizations. We served numbers of clients accross Indonesia from SME, Enterprise and Government. Our passion and intuitiveness help the business growth seamlessly.</p>
                                <div class="footer-social">
                                    <a href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-instagram"></i></a>
                                    <a href="#"><i class="fab fa-behance"></i></a>
                                    <a href="#"><i class="fab fa-youtube"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Links</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">About Us</a></li>
                                    <li><a href="#">Our Mission</a></li>
                                    <li><a href="#">Meet The Teams</a></li>
                                    <li><a href="#">Our Projects</a></li>
                                    <li><a href="#">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-2 col-xl-auto">
                        <div class="widget widget_nav_menu  footer-widget">
                            <h3 class="widget_title">Explore</h3>
                            <div class="menu-all-pages-container">
                                <ul class="menu">
                                    <li><a href="#">What we Offer</a></li>
                                    <li><a href="#">Our Story</a></li>
                                    <li><a href="#">Latest Posts</a></li>
                                    <li><a href="#">Help Center</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4 col-xl-auto">
                        <div class="widget footer-widget">
                            <h3 class="widget_title">Office Maps</h3>
                            <div class="footer-map">
                            <iframe  title="office location map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.0241718589114!2d106.82590461135096!3d-6.2605461937018365!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f37d942851e3%3A0xe99ce2e714d0a5!2sPT.SAID%20KRAMA%20YUDHA!5e0!3m2!1sid!2sid!4v1730714088653!5m2!1sid!2sid" height="180" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright-wrap">
            <div class="container">
                <p class="copyright-text">Copyright <i class="fal fa-copyright"></i> 2019 - {{date('Y')}} - All rights reserved by <a class="text-white" href="https://erayadigital.co.id/">PT. Eraya Digital Solusindo</a>.</p>
            </div>
        </div>
    </footer>
@endsection
@section('css_load')
@endsection
@section('js_load')
@endsection
