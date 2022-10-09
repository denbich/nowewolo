@extends('layouts.home')

@section('title') @lang('Strona główna') @endsection

@section('content') 

<header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        {{-- <h1><a href="index.html">Vesperr</a></h1> --}}
        <!-- Uncomment below if you prefer to use an image logo -->
        <a href="{{ route('home.index') }}"><img src="{{ url('/assets/img/logo.svg') }}" alt="" class="img-fluid my-2" style="min-height:65px;"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">@lang('Strona główna')</a></li>
          <li><a class="nav-link scrollto" href="#about">@lang('O nas')</a></li>
          <li><a class="nav-link scrollto" href="#services">@lang('Nasze projekty')</a></li>
          <li><a class="nav-link scrollto" href="#contact">@lang('Kontakt')</a></li>
          {{-- <li><a class="nav-link scrollto d-none" href="#portfolio">Portfolio</a></li>
          <li><a class="nav-link scrollto" href="#team">Zespół</a></li>
          <li><a class="nav-link scrollto d-none" href="#pricing">Pricing</a></li>
          <li class="dropdown d-none"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li> --}}
          <li><a class="getstarted" href="#{{-- https://volit.pl/language/{{ session('locale') }} --}}">@lang('Narzędzie VOLIT - wkrótce!')</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1 data-aos="fade-up">Stowarzyszenie Nowe Wolo</h1>
          <h2 data-aos="fade-up" data-aos-delay="400">@lang('Zajmujemy rozwojem oraz promocją wolontariatu w Polsce!')</h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="#{{-- https://volit.pl/language/{{ session('locale') }} --}}" class="btn-get-started scrollto">@lang('Narzędznie VOLIT - wkrótce!')</a>
            <a href="#contact" class="btn-get-started scrollto">@lang('Dołącz do nas!')</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="{{ url('assets/img/team.svg') }}" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients clients">
      <div class="container">

        <div class="row">

            <div class="col-lg-2 col-md-4 col-6">
              <img src="{{ url('/assets/img/partners/volit.svg?#') }}" class="img-fluid" alt="" data-aos="zoom-in">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <img src="{{ url('/assets/img/partners/mosirrybnik.svg') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="100">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
              <img src="{{ url('/assets/img/partners/rybnik.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="200">
            </div>
  
            <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ url('/assets/img/partners/volit.svg?#') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="300">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ url('/assets/img/partners/mosirrybnik.svg') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="400">
              </div>
    
              <div class="col-lg-2 col-md-4 col-6">
                <img src="{{ url('/assets/img/partners/rybnik.png') }}" class="img-fluid" alt="" data-aos="zoom-in" data-aos-delay="500">
              </div>
    
  
          </div>

      </div>
    </section><!-- End Clients Section -->

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>@lang('O nas')</h2>
        </div>

        <div class="row content">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="150">
            <p>@lang('Stowarzyszenie Nowe Wolo powstało w 2022 roku. Pomagamy w organizacji oraz sami organizujemy wolontariat na różnych wydarzeniach. Organizujemy różne spotkania oraz szkolenia jak i dla wolontariuszy jak i dla koordynatorów.')</p>
            <p>@lang('Każda zainteresowana organizacja lub osoba współpracą z nami może z nami się skontaktować, tylko kliknij przycisk poniżej!')</p>
            <a href="#contact" class="btn-get-started mt-2 mb-3">@lang('Kontakt')</a>
            <p>@lang('Nasze media społecznościowe:')</p>
            <div class="social-links">
                <a href="https://facebook.com/nowewolo" class="h2 mx-1"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/nowewolo" class="h2 mx-1"><i class="bi bi-instagram"></i></a>
              </div>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0" data-aos="fade-up" data-aos-delay="300">
            <img src="{{ url('/assets/img/main.png') }}" class="img-fluid" alt="">
            {{-- <a href="#" class="btn-learn-more">Learn More</a> --}}
          </div>
        </div>

      </div>
    </section><!-- End About Us Section -->

    {{-- <!-- ======= Counts Section ======= -->
    <section id="counts" class="counts">
      <div class="container">

        <div class="row">
          <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-xl-start" data-aos="fade-right" data-aos-delay="150">
            <img src="assets/img/counts-img.svg" alt="" class="img-fluid">
          </div>

          <div class="col-xl-7 d-flex align-items-stretch pt-4 pt-xl-0" data-aos="fade-left" data-aos-delay="300">
            <div class="content d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-emoji-smile"></i>
                    <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Happy Clients</strong> consequuntur voluptas nostrum aliquid ipsam architecto ut.</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-journal-richtext"></i>
                    <span data-purecounter-start="0" data-purecounter-end="99" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Projects</strong> adipisci atque cum quia aspernatur totam laudantium et quia dere tan</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-clock"></i>
                    <span data-purecounter-start="0" data-purecounter-end="3" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Years of experience</strong> aut commodi quaerat modi aliquam nam ducimus aut voluptate non vel</p>
                  </div>
                </div>

                <div class="col-md-6 d-md-flex align-items-md-stretch">
                  <div class="count-box">
                    <i class="bi bi-award"></i>
                    <span data-purecounter-start="0" data-purecounter-end="15" data-purecounter-duration="1" class="purecounter"></span>
                    <p><strong>Awards</strong> rerum asperiores dolor alias quo reprehenderit eum et nemo pad der</p>
                  </div>
                </div>
              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End Counts Section --> --}}

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="#">@lang('Promocja')</a></h4>
              <p class="description">@lang('Jest to najważniesze działanie, by jak najwięcej osób usłyszało o możliwościach udziału.')</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="#">@lang('Organizacja')</a></h4>
              <p class="description">@lang('Niejedna impreza kulturalno-sportowa przebiega znakomicie, gdy są na niej wolontariusze. Jeśli potrzebujesz organizacji wolontariatu na twojej imprezie, zgłoś się do nas!')</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="#">@lang('Wsparcie')</a></h4>
              <p class="description">@lang('Wspieranie jest również ważne, pomagamy innym organizacjom w jaknajlepszej organizacji.')</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="#">@lang('Edukacja')</a></h4>
              <p class="description">@lang('Prowadzimy szereg szkoleń jak i dla wolontariuszy jak i dla koordynatorów!')</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= More Services Section ======= -->
    <section id="more-services" class="more-services">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
            <h2>@lang('Nasze projekty')</h2>
            <p>@lang('Lista projektów, które prowadzi nasze stowarzyszenie')</p>
          </div>
        <div class="row">
          <div class="col-md-6 d-flex align-items-stretch">
            <div class="card" style='background-image: url("assets/img/services-volit.png");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="#{{-- https://volit.pl/language/{{ session('locale') }} --}}">@lang('Narzędzie VOLIT  - wkrótce!')</a></h5>
                <p class="card-text">@lang('Najlepsze narzędzie w Polsce do organizacji wolontariatu!')</p>
                <div class="read-more"><a href="#{{-- https://volit.pl/language/{{ session('locale') }} --}}"><i class="bi bi-arrow-right"></i> @lang('Zobacz więcej')</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="card" style='background-image: url("assets/img/more-services-2.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">@lang('Program szkoleń wolontariuszy i koordynatorów')</a></h5>
                <p class="card-text">@lang('Cykliczne szkolenia, które bardziej wspomogą pracę jak i koordynatorów jak i wolontariuszy.')</p>
                {{-- <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div> --}}
              </div>
            </div>

          </div>
          {{-- <div class="col-md-6 d-flex align-items-stretch mt-4">
            <div class="card" style='background-image: url("assets/img/more-services-3.jpg");' data-aos="fade-up" data-aos-delay="100">
              <div class="card-body">
                <h5 class="card-title"><a href="">Nive Lodo</a></h5>
                <p class="card-text">Nemo enim ipsam voluptatem quia voluptas sit aut odit aut fugit, sed quia magni dolores.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div>
          <div class="col-md-6 d-flex align-items-stretch mt-4 ">
            <div class="card" style='background-image: url("assets/img/more-services-4.jpg");' data-aos="fade-up" data-aos-delay="200">
              <div class="card-body">
                <h5 class="card-title"><a href="">Pale Treda</a></h5>
                <p class="card-text">Nostrum eum sed et autem dolorum perspiciatis. Magni porro quisquam laudantium voluptatem.</p>
                <div class="read-more"><a href="#"><i class="bi bi-arrow-right"></i> Read More</a></div>
              </div>
            </div>
          </div> --}}
        </div>

      </div>
    </section><!-- End More Services Section -->

    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>@lang('Lista organizacji korzystających z narzędzia VOLIT')</h2>
          <p>@lang('Każda organizacja i każdy wolontariusz może zarejestrować się bezpłatnie!')</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-3 col-md-4">
            <div class="icon-box">
                <img src="{{ url('/assets/img/partners/mosirrybnikicon.svg') }}" class="p-1 me-2" style="max-height: 45px;" alt="">
              <h3><a href="https://mosir.rybnik.pl">MOSiR Rybnik</a></h3>
            </div>
          </div>
          {{-- <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-bar-chart-box-line" style="color: #5578ff;"></i>
              <h3><a href="">Dolor Sitema</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-md-0">
            <div class="icon-box">
              <i class="ri-calendar-todo-line" style="color: #e80368;"></i>
              <h3><a href="">Sed perspiciatis</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4 mt-lg-0">
            <div class="icon-box">
              <i class="ri-paint-brush-line" style="color: #e361ff;"></i>
              <h3><a href="">Magni Dolores</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-database-2-line" style="color: #47aeff;"></i>
              <h3><a href="">Nemo Enim</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-gradienter-line" style="color: #ffa76e;"></i>
              <h3><a href="">Eiusmod Tempor</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-file-list-3-line" style="color: #11dbcf;"></i>
              <h3><a href="">Midela Teren</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-price-tag-2-line" style="color: #4233ff;"></i>
              <h3><a href="">Pira Neve</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-anchor-line" style="color: #b2904f;"></i>
              <h3><a href="">Dirada Pack</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-disc-line" style="color: #b20969;"></i>
              <h3><a href="">Moton Ideal</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-base-station-line" style="color: #ff5828;"></i>
              <h3><a href="">Verdo Park</a></h3>
            </div>
          </div>
          <div class="col-lg-3 col-md-4 mt-4">
            <div class="icon-box">
              <i class="ri-fingerprint-line" style="color: #29cc61;"></i>
              <h3><a href="">Flavor Nivelanda</a></h3>
            </div>
          </div> --}}
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Testimonials Section ======= -->
    {{-- <section id="testimonials" class="testimonials section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Testimonials</h2>
          <p>Magnam dolores commodi suscipit eum quidem consectetur velit</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                  <h3>Saul Goodman</h3>
                  <h4>Ceo &amp; Founder</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                  <h3>Sara Wilsson</h3>
                  <h4>Designer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                  <h3>Jena Karlis</h3>
                  <h4>Store Owner</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                  <h3>Matt Brandon</h3>
                  <h4>Freelancer</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-wrap">
                <div class="testimonial-item">
                  <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                  <h3>John Larson</h3>
                  <h4>Entrepreneur</h4>
                  <p>
                    <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                    Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                    <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                  </p>
                </div>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section --> --}}

    <!-- ======= Portfolio Section ======= -->
    {{-- <section id="portfolio" class="portfolio">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Portfolio</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="400">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-1.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 1</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-1.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-2.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-2.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-3.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 2</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-3.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-4.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 2</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-4.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-5.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 2</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-5.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 2"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-6.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>App 3</h4>
                <p>App</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-6.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="App 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-7.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 1</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-7.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 1"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-8.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Card 3</h4>
                <p>Card</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-8.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Card 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/portfolio-9.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Web 3</h4>
                <p>Web</p>
                <div class="portfolio-links">
                  <a href="assets/img/portfolio/portfolio-9.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="Web 3"><i class="bx bx-plus"></i></a>
                  <a href="portfolio-details.html" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section --> --}}

    <!-- ======= Team Section ======= -->
    {{-- <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Team</h2>
          <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem</p>
        </div>

        <div class="row">

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>William Anderson</h4>
                <span>CTO</span>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
            <div class="member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
              <div class="member-info">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section --> --}}

    <!-- ======= F.A.Q Section ======= -->
    {{-- <section id="faq" class="faq">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Non consectetur a erat nam at lectus urna duis?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="200">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="300">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="400">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Aperiam itaque sit optio et deleniti eos nihil quidem cumque. Voluptas dolorum accusantium sunt sit enim. Provident consequuntur quam aut reiciendis qui rerum dolorem sit odio. Repellat assumenda soluta sunt pariatur error doloribus fuga.
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

        <div class="row faq-item d-flex align-items-stretch" data-aos="fade-up" data-aos-delay="500">
          <div class="col-lg-5">
            <i class="ri-question-line"></i>
            <h4>Tempus quam pellentesque nec nam aliquam sem et tortor consequat?</h4>
          </div>
          <div class="col-lg-7">
            <p>
              Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
            </p>
          </div>
        </div><!-- End F.A.Q Item-->

      </div>
    </section><!-- End F.A.Q Section --> --}}

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Skontaktuj się z nami</h2>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="contact-about">
              <h3>Stowarzyszenie Nowe Wolo</h3>
              <p>NIP: 6423240217 <br> REGON: 523231654</p>
              <p>@lang('Stowarzyszenie jest zarejestrowane w rejestrze stowarzyszeń zwykłych miasta Rybnik.')</p>
              <div class="social-links">
                {{-- <a href="#" class="twitter d-none"><i class="bi bi-twitter"></i></a> --}}
                <a href="https://facebook.com/nowewolo" class="facebook"><i class="bi bi-facebook"></i></a>
                <a href="https://instagram.com/nowewolo" class="instagram"><i class="bi bi-instagram"></i></a>
                {{-- <a href="#" class="linkedin d-none"><i class="bi bi-linkedin"></i></a> --}}
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0" data-aos="fade-up" data-aos-delay="200">
            <div class="info">
              <div>
                <i class="ri-map-pin-line"></i>
                <p>@lang('Adres korespodencyjny:')<br>ul. Chwałowicka 27e/9 <br>44-200 Rybnik</p>
              </div>

              <div>
                <i class="ri-mail-send-line"></i>
                <p><a href="mailto:biuro@nowewolo.pl">biuro@nowewolo.pl</a></p>
              </div>

              <div>
                <i class="ri-phone-line"></i>
                <p><a href="tel:+48530403181">+48 530 403 181</a></p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-12" data-aos="fade-up" data-aos-delay="300">
              @if (session('sent_message') == true)
              <div class="alert alert-success alert-dismissible" role="alert">
                <div>@lang('Wiadomość została wysłana! Dziękujemy.')</div>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
              </div>
              @endif
            <form action="{{ route('home.send-message') }}" method="post" role="form">
                @csrf
              <div class="form-group">
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" id="name" placeholder="@lang('Twoje imię i nazwisko')" max="255" required>
                @error('name')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" placeholder="@lang('Twój email')" max="255" required>
                @error('email')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <input type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" id="subject" placeholder="@lang('Temat')" max="255" required>
                @error('subject')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <textarea class="form-control @error('message') is-invalid @enderror" name="message" rows="5" placeholder="@lang('wiadomość')" style="resize: none;" maxlength="255" required></textarea>
                <small>@lang('Maksymalnie 255 znaków')</small>
                @error('message')
                    <div class="text-danger w-100 d-block">
                        {{ $message }}
                    </div>
                 @enderror
              </div>
              <div class="form-group">
                <input type="checkbox" name="check" id="check" required>
                <label class="" for="check">@lang('Akceptuję') <a href="{{ route('home.privacy-policy') }}">@lang('politykę prywatności')</a></label>
              </div>
              
              <div class="text-center"><button class="btn-submit" type="submit">@lang('Wyślij wiadomość')</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="row d-flex align-items-center">
        <div class="col-lg-6 text-lg-left text-center">
          <div class="copyright">
            2022 - {{ date('Y') }} &copy; <strong>Stowarzyszenie Nowe Wolo</strong>. All Rights Reserved
          </div>
        </div>
        <div class="col-lg-6">
          <nav class="footer-links text-lg-right text-center pt-2 pt-lg-0">
            <a href="#intro" class="scrollto">@lang('Strona główna')</a>
            <a href="#about" class="scrollto">@lang('O nas')</a>
            <a href="{{ route('home.privacy-policy') }}">@lang('Polityka prywatności')</a>
            <a href="#">@lang('Regulamin stowarzyszenia')</a>
          </nav>
        </div>
      </div>
    </div>
  </footer>

@endsection