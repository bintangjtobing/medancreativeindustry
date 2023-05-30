<!DOCTYPE html>
<html dir="ltr" lang="en-US">

<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="IE=edge">
    <meta name="author" content="Medan Creative Industry">
    <meta name="description"
        content="Living in creative industry by Medan Creative Industry. Managed by: Boxity Central Indonesia, Meand Creative Group, Serikat Kreatif
        Demokrasi, and Komunitas Suka Desain.">

    <!-- Font Imports -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700&family=Merriweather:wght@400;700&family=Material+Symbols+Outlined&display=swap"
        rel="stylesheet">

    <!-- Core Style -->
    <link rel="stylesheet" href="{!! asset('webpage/style.css?' . rand(10000, 99999)) !!}">

    <!-- Font Icons -->
    <link rel="stylesheet" href="{!! asset('webpage/css/font-icons.css?' . rand(10000, 99999)) !!}">

    <!-- Niche Demos -->
    <link rel="stylesheet" href="{!! asset('webpage/demos/conference/conference.css?' . rand(10000, 99999)) !!}">
    <link rel="shortcut icon" href="https://res.cloudinary.com/danv3vc3x/image/upload/v1685472300/icon_zptzpo.png"
        type="image/png">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{!! asset('webpage/css/custom.css?' . rand(10000, 99999)) !!}">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Document Title
 ============================================= -->
    <title>MEDANCREATIVEBIGDAY2023</title>
    {{-- Meta --}}
    <meta name="og:title" property="og:title" content="MEDANCREATIVEBIGDAY2023" />
    <meta name="og:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="og:type" property="og:type" content="website" />
    <meta name="og:image" property="og:image"
        content="https://res.cloudinary.com/danv3vc3x/image/upload/v1685476629/cover_mcbd2023_aiwl5n.jpg" />
    <meta name="og:description" property="og:description"
        content="Living in creative industry by Medan Creative Industry. Managed by: Boxity Central Indonesia, Meand Creative Group, Serikat Kreatif
        Demokrasi, and Komunitas Suka Desain." />
    <meta name="twitter:card" content="MEDANCREATIVEBIGDAY2023" />
    <meta name="twitter:title" property="og:title" content="MEDANCREATIVEBIGDAY2023" />
    <meta name="twitter:url" property="og:url" content="{{ Request::url() }}" />
    <meta name="twitter:type" property="og:type" content="website" />
    <meta name="twitter:image" property="og:image"
        content="https://res.cloudinary.com/danv3vc3x/image/upload/v1685476629/cover_mcbd2023_aiwl5n.jpg" />
    <meta name="twitter:description" property="og:description"
        content="Living in creative industry by Medan Creative Industry. Managed by: Boxity Central Indonesia, Meand Creative Group, Serikat Kreatif
        Demokrasi, and Komunitas Suka Desain." />
    <link rel="canonical" href="{{ Request::url() }}/" />
    <link rel="shortcut icon" href="https://res.cloudinary.com/danv3vc3x/image/upload/v1685472300/icon_zptzpo.png"
        type="image/png" sizes="64x64" />
    <meta name="og:email" content="info@medancreativeindustry.com" />
    <meta name="og:phone_number" content="02129021873" />
    <meta name="og:latitude" content="-6.1465558" />
    <meta name="og:longitude" content="106.7843094" />
    <meta name="og:street-address" content="Grand Silipi Tower, Jl. Jend Jl. Jelambar Barat No.22-24" />
    <meta name="og:locality" content="DKI Jakarta" />
    <meta name="og:region" content="ID" />
    <meta name="og:postal-code" content="11480" />
    <meta name="og:country-name" content="Indonesia" />

</head>

<body class="stretched">

    <!-- Document Wrapper
 ============================================= -->
    <div id="wrapper">

        <!-- Header
  ============================================= -->
        <header id="header" class="responsive-sticky-header transparent-header dark header-size-sm"
            data-sticky-shrink="false">
            <div id="header-wrap">
                <div class="container">
                    <div class="header-row justify-content-lg-between">

                        <!-- Logo
      ============================================= -->
                        <div id="logo" class="me-lg-0">
                            <a href="/" data-scrollto="#slider">
                                <img class="logo-default" srcset="{!! asset('webpage/demos/conference/images/logo.png') !!}, {!! asset('webpage/demos/conference/images/logo@2x.png') !!} 2x"
                                    src="{!! asset('webpage/demos/conference/images/logo@2x.png?' . rand(10000, 99999)) !!}" alt="MCBD2023 Logo">
                                <img class="logo-dark" srcset="{!! asset('webpage/demos/conference/images/logo-dark.png') !!}, {!! asset('webpage/demos/conference/images/logo-dark@2x.png') !!} 2x"
                                    src="{!! asset('webpage/demos/conference/images/logo-dark@2x.png?' . rand(10000, 99999)) !!}" alt="MCBD2023 Logo">
                            </a>
                        </div><!-- #logo end -->

                        <div class="primary-menu-trigger">
                            <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                                <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                            </button>
                        </div>

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container one-page-menu" data-easing="easeInOutExpo" data-speed="1250"
                                data-offset="160">
                                <li class="menu-item"><a class="menu-link ls-1 text-uppercase" href="#section-about"
                                        data-href="#section-about">
                                        <div>About</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link ls-1 text-uppercase" href="#"
                                        data-href="#section-speakers">
                                        <div>Speakers</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link ls-1 text-uppercase" href="#"
                                        data-href="#section-schedule">
                                        <div>Schedule</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link ls-1 text-uppercase" href="#"
                                        data-href="#section-tickets">
                                        <div>Tickets</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link ls-1 text-uppercase" href="#"
                                        data-href="#section-sponsors">
                                        <div>Sponsors</div>
                                    </a></li>
                                <li class="menu-item"><a class="menu-link ls-1 text-uppercase" href="#"
                                        data-href="#section-location">
                                        <div>Location</div>
                                    </a></li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                        <!-- Primary Navigation
      ============================================= -->
                        <nav class="primary-menu">

                            <ul class="menu-container header-button">
                                <li class="menu-item">
                                    <a href="#section-tickets"
                                        class="button ls-1 text-uppercase fw-semibold button-effect m-0"
                                        data-class="down-lg:px-1" data-scrollto="#section-tickets">Buy Tickets</a>
                                </li>
                            </ul>

                        </nav><!-- #primary-menu end -->

                    </div>
                </div>
            </div>
            <div class="header-wrap-clone"></div>
        </header><!-- #header end -->

        <!-- Hero/Slider
  ============================================= -->
        <section id="slider" class="slider-element min-vh-60 min-vh-md-100 include-header"
            style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.8)), url('{!! asset('webpage/demos/conference/images/hero-2.jpg') !!}') no-repeat center center / cover;">
            <div class="slider-inner">

                <div class="vertical-middle">
                    <div class="container dark py-5 py-md-0">
                        <div class="row justify-content-between mt-5 col-mb-50">
                            <div class="col-lg-6 parallax" data-0="transform: translateY(0px); opacity: 1"
                                data-300="transform: translateY(50px); opacity: 0">
                                <span class="gradient-underline h4">Medan Creative Industry Presents</span>
                                <h2 class="fw-bold display-2 mb-0">MEDANCREATIVE<br>#BIGDAY2023</h2>
                            </div>
                            <div class="col-lg-6 d-flex align-items-lg-end flex-column parallax text-start text-lg-end mb-5 mb-lg-0"
                                data-0="transform: translateY(0px)" data-700="transform: translateY(-50px)">
                                <div class="mt-auto">
                                    <h2 class="mb-2 gradient-text" style="font-weight:bolder;">October 13-14, 2023
                                    </h2>
                                    <h4 class="fw-normal">Tiara Convention Hall - Tulip Room<br>Jl. Cut Mutia No.1,
                                        Sumatera Utara 20152, Indonesia</h4>
                                    <a href="#section-tickets"
                                        class="button ls-1 text-uppercase fw-semibold button-xxlarge button-white button-gradient m-0"
                                        data-scrollto="#section-tickets">Get Tickets Now</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- #Slider end -->

        <!-- Content
  ============================================= -->
        <section id="content" style="background-color: #000;">
            <div class="content-wrap pt-0" style="overflow: visible;">

                <!-- Section About
    ============================================= -->
                <div id="section-about" class="section page-section bg-transparent pt-0">

                    <div class="container">

                        <div class="mb-5 dark">
                            <span class="display-4 fw-bold gradient-underline font-primary">Event Detail</span>
                        </div>

                        <div class="clear"></div>

                        <div class="row justify-content-around dark">
                            <div class="col-md-6">
                                <p class="text-white-50">
                                    Permasalahan yang saat ini yang exist di Indonesia, dan maupun di global, oleh, dan
                                    kepada Startup, dan pelaku kreativitas yaitu ketidakbijakan dalam memutuskan
                                    masuknya investment dalam pelaku startup ataupun pelaku kreativitas, sehingga
                                    mengakibatkan kurangnya inovasi produk, menurunnya inovasi keuangan dalam
                                    meningkatkan valuasi startup, kekurangan arah dalam mencapai visi tiap pelaku
                                    kreativitas dan startup. Oleh karena itu, perlu adanya kesadaran semua pihak untuk
                                    mengembangkan kreativitas dan pelaku startup yang sudah ada di Kota Medan.
                                </p>
                                <p class="text-white-50">
                                    Dalam rangka meningkatkan semangat dan kemampuan pemuda/i dalam bidang karya
                                    kreativitas, kurangnya suasana atmosfir, sedikit banyaknya pemuda yang berbakat dan
                                    bertalenta kreatif yang tidak mendapat dukungan perhatian dari pihak instansi,
                                    pemerintah dan yang lainnya, serta fasilitas, kurang adanya wadah untuk kolaborasi
                                    antar pemuda berbakat serta untuk menjadi ajang bukti bahwa kota Medan masih
                                    memiliki jiwa kreativitas yang tinggi dan memiliki jiwa mandiri dalam berbisnis
                                    usaha yang tinggi di era modern 4.0. Pameran dan latihan pitching ini juga bertujuan
                                    untuk appreciation pada pemuda/i yang masih memiliki jiwa bergejolak pada
                                    kreativitas akan karya yang ditampilkan, dan sebagai market engagement & evaluation
                                    bagi pelaku startup yang memiliki potensi bisnis besar di masa 2-5 tahun kedepan.
                                </p>
                                <p class="text-white-50">
                                    Dengan diadakannya pameran ini, diharapkan para pengunjung dapat mengapresiasi karya
                                    seni dari para mahasiswa/i dan siswa/i, dan dapat mengenal lebih lagi dengan startup
                                    yang mungkin saja pengunjung minat untuk bisa berkontribusi dalam gabung ke startup
                                    maupun, menjadi market-relation yang baik pada pelaku startup di kota Medan.
                                    Berkaitan dengan hal tersebut di atas, maka kami perlu mengadakan kegiatan pameran
                                    karya dan pitching practice di lokasi Pos Bloc yang beralamat di Kesawan, Kota Medan
                                    dengan judul Medan Creative Big Day 2023 yang diselenggarakan oleh pelaku
                                    startup yang bernama, Boxity, dan MeAndCreative Group.
                                </p>
                                <h4 class="font-body ls-1 text-uppercase">Tujuan Event</h4>
                                <ul>
                                    <li>
                                        Pusat apresiasi, dan kesadaran akan masih ada nya pelaku kreatif yang
                                        tersembunyi dan yang berbakat di kota Medan, terhadap pelaku kreatif.
                                    </li>
                                    <li>
                                        Wadah sharing-knowledge, antara pelaku kreatif yang dimulai dari siswa/i,
                                        mahasiswa/i, dan pengunjung
                                    </li>
                                    <li>
                                        Wadah market-engagement dan market-relation bagi para pelaku startup, dan
                                        pengunjung.
                                    </li>
                                    <li>
                                        Sharing inovasi bagi pelaku startup, pelaku kreatif, dan pengunjung dalam
                                        pengembangan produk bisnis di kota Medan.
                                    </li>
                                </ul>

                            </div>

                            <div class="col-md-5">
                                <div class="about-img position-relative">
                                    <div class="my-3 my-lg-0">
                                        <div class="gradient-bg"><img src="{!! asset('webpage/demos/conference/images/about/2.jpg?' . rand(10000, 99999)) !!}"
                                                alt="About Image"></div>
                                    </div>
                                    <div data-0="top: 160px" data-end="top: 120px">
                                        <div class="gradient-bg"><img src="{!! asset('webpage/demos/conference/images/about/1.jpg?' . rand(10000, 99999)) !!}"
                                                alt="About Image"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div><!-- #section-about end -->

                <div class="clear"></div>

                <!-- Section Speakers
    ============================================= -->
                <div id="section-speakers" class="section page-section bg-transparent pt-0 mt-6">
                    <div class="container">
                        <div class="mb-5 dark d-flex flex-wrap justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Speakers</span>
                        </div>
                        <div class="row mx-auto dark" style="max-width: 1000px;">
                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!! asset('webpage/demos/conference/images/speakers/1.jpg?' . rand(10000, 99999)) !!}" alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Bintang Tobing</h4><span>CEO Boxity</span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!! asset('webpage/demos/conference/images/speakers/2.jpg?' . rand(10000, 99999)) !!}" alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Aditya, ST</h4><span>DreamARCH</span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!! asset('webpage/demos/conference/images/speakers/3.jpg?' . rand(10000, 99999)) !!}" alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Heri Siregar</h4><span>Founder MeAndCreative
                                            Group</span>
                                    </div>
                                </div>
                            </a>

                            <a href="#" class="team col-lg-4 col-sm-6 mb-5">
                                <div class="team-image">
                                    <img src="{!! asset('webpage/demos/conference/images/speakers/4.jpg?' . rand(10000, 99999)) !!}" alt="John Doe">
                                </div>
                                <div class="team-desc">
                                    <div class="team-title">
                                        <h4 class="gradient-text">Ronaldo</h4><span>Founder Serikat Kreatif
                                            Demokrasi</span>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div><!-- #section-speaker end -->

                <div class="clear"></div>

                <!-- Section Schedule
    ============================================= -->
                <div id="section-schedule" class="section page-section bg-transparent pt-0 mt-5 clearix">
                    <div class="container">
                        <div class="mb-5 dark d-flex justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Schedule</span>
                        </div>

                        <div class="schedule-wrap mx-auto rounded" style="max-width: 1000px;">

                            <ul class="nav canvas-alt-tabs tabs-alt tabs-bb tabs nav-tabs nav-fill mb-5"
                                id="tab-9" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="canvas-tab-1" data-bs-toggle="pill"
                                        data-bs-target="#tabs-1" type="button" role="tab"
                                        aria-controls="canvas-tab-1" aria-selected="true">13th <span
                                            class="d-none d-md-inline-block">October</span></button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="canvas-tab-2" data-bs-toggle="pill"
                                        data-bs-target="#tabs-2" type="button" role="tab"
                                        aria-controls="canvas-tab-2" aria-selected="false">14th <span
                                            class="d-none d-md-inline-block">October</span></button>
                                </li>
                            </ul>

                            <div id="canvas-tab-alt-content" class="tab-content">
                                <div class="tab-pane fade show active" id="tabs-1" role="tabpanel"
                                    aria-labelledby="canvas-tabs-1-tab" tabindex="0">
                                    <dl class="row dark mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">8:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Registration And Breakfast</div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Opening Remarks And Keynote<small>- Piff
                                                    Jenkins</small></div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Web Accessible Designs<small>- Will
                                                    Barrow</small></div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">11:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Delicious Lunch<small>- Cafeteria</small></div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">12.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">MCBD2023 Rest API<small>- Desmond Eagle</small>
                                            </div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.00 pm</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Building Communities<small>- Jack Steve</small>
                                            </div>
                                        </dd>

                                    </dl>
                                </div>
                                <div class="tab-pane fade" id="tabs-2" role="tabpanel"
                                    aria-labelledby="canvas-tabs-2-tab" tabindex="0">
                                    <dl class="row dark mb-0">

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">9:00 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Why To Attend Event</div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Surprise Event<small>- Gunther Beard</small>
                                            </div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">10.00 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Hiring The Right Way in Ecosystem<small>- Will
                                                    Barrow</small></div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">11:30 am</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Delicious Lunch<small>- Cafeteria</small></div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">12.45 pm</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Panel Discussion: Future of Canvas<small>- Will
                                                    Barrow</small></div>
                                        </dd>

                                        <dt class="col-sm-3">
                                            <div class="schedule-time font-primary">2.30 pm</div>
                                        </dt>
                                        <dd class="col-sm-9">
                                            <div class="schedule-desc">Why Should I Choose Customer Support<small>-
                                                    Indigo Violet</small></div>
                                        </dd>

                                    </dl>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- #section-scedule end -->

                <div class="clear"></div>

                <!-- Section Tickets
    ============================================= -->
                <div id="section-tickets" class="section page-section bg-transparent pt-0">
                    <div class="container">
                        <div class="mb-5 dark d-flex justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Tickets</span>
                        </div>
                    </div>


                    <div class="position-relative">

                        <div class="container">
                            <div class="row pricing align-items-center">

                                <div class="col-lg-3 col-sm-6">
                                    <div class="pricing-box text-center">
                                        <div class="pricing-title title-sm">
                                            <h3 class="text-transform-none ls-0">Early Bird(Full Event)</h3>
                                            <span>Valid until 28th Sept</span>
                                        </div>
                                        <div class="pricing-price early-bird-pricing font-primary fw-bold">
                                            <span class="price-unit">IDR</span>50rb
                                        </div>
                                        <div class="pricing-action px-5">
                                            <a href="#"
                                                class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy
                                                Ticket</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 mt-4 mt-sm-0">
                                    <div class="pricing-box text-center">
                                        <div class="pricing-title title-sm">
                                            <h3 class="text-transform-none ls-0">1 Day Pass</h3>
                                            <span class="text-transform-none">Valid until 12th October</span>
                                        </div>
                                        <div class="pricing-price 1-day-pricing font-primary fw-bold">
                                            <span class="price-unit">IDR</span>75rb
                                        </div>
                                        <div class="pricing-action px-5">
                                            <a href="#"
                                                class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy
                                                Ticket</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                                    <div class="pricing-box text-center">
                                        <div class="pricing-title title-sm">
                                            <h3 class="text-transform-none ls-0">2 Days Pass</h3>
                                            <span class="text-transform-none">Valid until 11th October</span>
                                        </div>
                                        <div class="pricing-price 2-day-pricing font-primary fw-bold">
                                            <span class="price-unit">IDR</span>100rb
                                        </div>
                                        <div class="pricing-action px-5">
                                            <a href="#"
                                                class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy
                                                Ticket</a>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-3 col-sm-6 mt-4 mt-lg-0">
                                    <div class="pricing-box text-center">
                                        <div class="pricing-title title-sm">
                                            <h3 class="text-transform-none ls-0">Full Event</h3>
                                            <span class="text-transform-none">Valid until 13th October</span>
                                        </div>
                                        <div class="pricing-price full-pricing font-primary fw-bold">
                                            <span class="price-unit">IDR</span>130rb
                                        </div>
                                        <div class="pricing-action px-5">
                                            <a href="#"
                                                class="button ls-1 text-uppercase fw-semibold button-large button-gradient w-100 m-0">Buy
                                                Ticket</a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="dotted-bg"
                            style="background: url('{!! asset('webpage/demos/conference/images/dotted-bg.svg') !!}') repeat center center / contain; min-height: 75%">
                        </div>
                    </div>

                    <div class="container mt-6">
                        <div class="mx-auto dark text-center" style="max-width: 850px">
                            <h3 class="display-4 gradient-text">Bingung?</h3>
                            <p class="lead">Acara kreatif ini dirancang seinformatif dan semenarik mungkin, sehingga
                                orang dapat belajar tentang tren terkini di industri ini tanpa merasa kewalahan.</p>
                            <a href="#"
                                class="button ls-1 text-uppercase fw-semibold button-xxlarge button-white button-light button-gradient-hover mt-4">Contact
                                Us</a>
                        </div>
                    </div>
                </div><!-- #section-tickets end -->

                <div class="clear"></div>

                <!-- Section Sponsors
    ============================================= -->
                <div id="section-sponsors" class="section page-section bg-transparent pt-0 mt-6">
                    <div class="container">
                        <div class="mb-5 dark d-flex justify-content-between align-items-center">
                            <span class="display-4 fw-bold gradient-underline mb-0">Sponsors</span>
                        </div>

                        <div class="mx-auto schedule-wrap text-center dark rounded shadow-lg"
                            style="max-width: 1050px; background-color: #000">
                            <h4 class="font-body mb-5">Heroic Sponsors</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/cnn.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/github.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/google.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/paypal.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/vimeo.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/slack.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a></div>
                            </div>
                            <div class="line"></div>
                            <h4 class="font-body mb-5">Diamond Sponsors</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/linkedin.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/nat-geo.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/jetblue.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/zillow.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/amazon.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                            </div>
                            <div class="line"></div>
                            <h4 class="font-body mb-5">Platinum Sponsors</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/linkedin.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/nat-geo.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/jetblue.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/zillow.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/amazon.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                            </div>
                            <div class="line"></div>
                            <h4 class="font-body mb-5">Media Partners</h4>
                            <div class="d-flex flex-wrap align-items-center">
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/ps.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/skype.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a></div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/jetblue.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                                <div class="flex-fill p-3"><a href="#"><img src="{!! asset('webpage/demos/conference/images/sponcors/netflix.svg?' . rand(10000, 99999)) !!}"
                                            alt="Brands"></a>
                                </div>
                            </div>
                            <div class="line"></div>
                            <h3 class="gradient-text" style="text-transform:capitalize;"><b>Memanggil semua
                                    Sponsor!!!<br>Bantu kami membuat Acara Kami
                                    Menyenangkan!</b></h3>
                            <p class="mx-auto text-muted" style="max-width: 600px">Kami dengan senang hati mengundang
                                Anda untuk mensponsori acara kreatif yang akan datang di Medan pada tahun 2023. Acara
                                ini akan menampilkan berbagai program, termasuk seminar, pertarungan pitching, kelas
                                master, pameran seni, permainan, dan banyak lagi. Ini adalah peluang besar untuk
                                menjangkau banyak kalangan profesional kreatif dan bisnis di Indonesia.</p>
                            <a href="#"
                                class="button ls-1 text-uppercase fw-semibold button-xlarge button-white button-gradient mt-4">Sponsor
                                Us?</a>
                        </div>
                    </div>
                    <div class="dotted-bg"
                        style="background: url('{!! asset('webpage/demos/conference/images/dotted-bg.svg') !!}') repeat center center / contain; min-height: 25%; top: 90%; right: 0; left: auto; width: 50%">
                    </div>
                </div><!-- #section-Sponsors end -->

                <div class="clear"></div>

                <!-- Section Location
    ============================================= -->
                <div id="section-location" class="section page-section bg-transparent p-0 mb-0"
                    style=" overflow: visible">

                    <div class="position-relative">
                        <div class="container-bg">
                            <div class="container">
                                <div class="row justify-content-between dark">
                                    <div class="col-md-4 mb-4">
                                        <h3 class="gradient-underline d-inline-flex mb-5">Gallery</h3>
                                        <div class="masonry-thumbs row row-cols-3 grid-container"
                                            data-lightbox="gallery">
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/1.jpg?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/1.jpg?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 1"></a>
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/2.jpg?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/2.jpg?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 2"></a>
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/3.jpg?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/3.jpg?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 3"></a>
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/4.jpg?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/4.jpg?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 4"></a>
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/5.jpg?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/5.jpg?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 5"></a>
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/6.png?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/6.png?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 6"></a>
                                            <a class="grid-item" href="{!! asset('webpage/demosconference/images/venue/full/7.png?' . rand(10000, 99999)) !!}"
                                                data-lightbox="gallery-item"><img src="{!! asset('webpage/demos/conference/images/venue/7.png?' . rand(10000, 99999)) !!}"
                                                    alt="Gallery Thumb 7"></a>
                                        </div>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <h3 class="gradient-underline d-inline-flex mb-5">Our Address</h3>
                                        <h4 class="fw-normal">Tiara Convention Hall - Tulip Room<br>Jl. Cut Mutia No.1,
                                            Sumatera Utara 20152, Indonesia</h4>
                                        <h4 class="mb-2"> +62 812 6284 5980</h4>
                                        <h4 class="mb-2">info@mediacreativeindustry.com</h4>
                                    </div>
                                    <div class="col-md-3 mb-4">
                                        <h3 class="gradient-underline d-inline-flex mb-5">Follow Us</h3>
                                        <div class="d-block">
                                            <a href="/social/facebook"
                                                class="social-icon mb-3 rounded-circle border-0 bg-facebook"
                                                title="Facebook">
                                                <i class="fa-brands fa-facebook-f"></i>
                                                <i class="fa-brands fa-facebook-f"></i>
                                            </a>

                                            <a href="/social/instagram"
                                                class="social-icon mb-3 rounded-circle border-0 bg-instagram"
                                                title="Instagram">
                                                <i class="fa-brands fa-instagram"></i>
                                                <i class="fa-brands fa-instagram"></i>
                                            </a>
                                            <a href="/social/gmail"
                                                class="social-icon mb-3 rounded-circle border-0 bg-google"
                                                title="Google Mail">
                                                <i class="fa-brands fa-google"></i>
                                                <i class="fa-brands fa-google"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div><!-- #section-location end -->

            </div>
        </section><!-- #content end -->

        <!-- Footer
  ============================================= -->
        <footer id="footer" class="dark"
            style="background: linear-gradient(to bottom, rgba(255,255,255,.1), rgba(255,255,255,.03)); border-top-color: #222">
            <div class="container">

                <!-- Footer Widgets
    ============================================= -->
                <div class="footer-widgets-wrap">
                    <div class="row">

                        <div class="col-lg-4">

                            <div class="widget">
                                <div class="row">
                                    <div class="col-lg-8 mb-4" style="color:#888;">
                                        <img src="{!! asset('webpage/demos/conference/images/logo-h.png?' . rand(10000, 99999)) !!}" alt="MCI Logo" class="d-block"
                                            height="100">
                                        <p>Living in creative industry by Medan Creative Industry</p>

                                        <a href="/social/facebook"
                                            class="social-icon si-small border-0 rounded-circle bg-facebook">
                                            <i class="fa-brands fa-facebook-f"></i>
                                            <i class="fa-brands fa-facebook-f"></i>
                                        </a>

                                        <a href="/social/instagram"
                                            class="social-icon si-small border-0 rounded-circle bg-instagram">
                                            <i class="fa-brands fa-instagram"></i>
                                            <i class="fa-brands fa-instagram"></i>
                                        </a>
                                        </a>

                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

            </div>

            <!-- Copyrights
   ============================================= -->
            <div id="copyrights" class="bg-transparent pt-0">
                <div class="container">

                    <div class="w-100 text-center text-md-start">
                        Copyrights &copy; 2023 Medan Creative Industry. All Rights Reserved by Boxity.<br>
                        <div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy
                                Policy</a></div>
                    </div>

                </div>
            </div><!-- #copyrights end -->
        </footer><!-- #footer end -->

    </div><!-- #wrapper end -->

    <!-- Go To Top
 ============================================= -->
    <div id="gotoTop" class="uil uil-angle-up"></div>

    <!-- JavaScripts
 ============================================= -->
    <script src="{!! asset('webpage/js/jquery.js?' . rand(10000, 99999)) !!}"></script>
    <script src="{!! asset('webpage/js/functions.js?' . rand(10000, 99999)) !!}"></script>

    <!-- Parallax Script
 ============================================= -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/skrollr/0.6.30/skrollr.min.js"></script>
    <script>
        !SEMICOLON.Mobile.any() && skrollr.init({
            forceHeight: false
        });
    </script>

    <script>
        jQuery(document).ready(function() {
            // Ticket Price Changed Script
            var elementEarlyBird = jQuery("#early-bird-person"),
                element1Day = jQuery("#1-day-pricing-person"),
                element2Day = jQuery("#2-day-pricing-person"),
                elementFull = jQuery("#full-pricing-person");

            elementEarlyBird.on('change', function() {
                pricingEarlyBird = jQuery(this).prop('value');
                jQuery('.early-bird-pricing').html('$' + (pricingEarlyBird * 39));
            });

            element1Day.on('change', function() {
                pricing1day = jQuery(this).prop('value');
                jQuery('.1-day-pricing').html('$' + (pricing1day * 29));
            });

            element2Day.on('change', function() {
                pricing2Day = jQuery(this).prop('value');
                jQuery('.2-day-pricing').html('$' + (pricing2Day * 49));
            });

            elementFull.on('change', function() {
                pricingFull = jQuery(this).prop('value');
                jQuery('.full-pricing').html('$' + (pricingFull * 69));
            });
        });
    </script>

</body>

</html>
