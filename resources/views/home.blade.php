<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
        {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.css" />
        <link href="https://fonts.cdnfonts.com/css/cabinet-grotesk" rel="stylesheet">
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/style.css') }}">
        <link rel="icon" type="image/png" href="{{ asset('img/favicon.png') }}">
    </head>
    <body class="hero-anime">

      <header class="navigation-wrap bg-light start-header start-style">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="navbar navbar-expand-md navbar-light">

                <a class="navbar-brand" href="https://front.codes/" target="_blank">Talaga Paca</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto py-4 py-md-0">
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 active">
                      <a class="nav-link" href="#">Beranda</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="#">Atraksi Wisata</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="#">Fasilitas</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="#">Produk Lokal</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="#">Event Wisata</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="#">Publikasi</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="#">Akses & Narahubung</a>
                    </li>
                    {{-- <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                      <div class="dropdown-menu">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <a class="dropdown-item" href="#">Something else here</a>
                        <a class="dropdown-item" href="#">Another action</a>
                      </div>
                    </li> --}}
                  </ul>
                </div>
                <div class="collapse navbar-collapse" id="langBtn" style="justify-content: right">
                    <div class="pl-4 pl-md-0 ml-0 ml-md-4">
                      <a onclick="showLanguages()" class="lang-drpdwn-btn nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">EN <img class="mb-1" src="img/en.png" height="19"></a>
                      <div class="dropdown-language">
                        <a class="dropdown-item" href="#">English</a>
                        <a class="dropdown-item" href="#">Indonesia</a>
                      </div>
                    
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <section id="jumbotron" class="section full-height">
        <div class="absolute-center">
          <div class="section">
            <div class="container">
              <div class="row" data-aos="fade-down" data-aos-duration="2000">
                <div class="col-12" >
                  <h1 class="jumbotron-title">Explore <br>Talaga Paca</h1>
                  <p style="margin:auto;color:white; max-width:800px">Aptent convallis risus amet ac quam malesuada magnis non auctor gravida phasellus, molestie. Ullamcorper magna placerat at tortor. Sem euismod dictum nec ac conubia. Ullamcorper. Fermentum.</p>
                </div>
              </div>
              <div class="col-12 text-center mt-4">
                <button class="learn-more">
                  <span class="circle" aria-hidden="true">
                    <span class="icon arrow"></span>
                  </span>
                  <span class="button-text">Learn More</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </section>
      <div class="slider">
        <div class="slide-track">
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/1.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/2.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/3.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/4.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/5.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/6.png" height="100" width="250" alt="" />
          </div>
          <div class="slide">
            <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/557257/7.png" height="100" width="250" alt="" />
          </div>
        </div>
      </div>
      <section id="popular" >
        <div data-aos="fade-down" data-aos-duration="2000">
        <h3 class="text-center mb-4 text-title">Tempat Populer</h3>
        <div class="container carousel">
          <div class="carousel-card">
            <img src="img/jungle.jpg">
          </div>
          <div class="carousel-card">
            <img src="img/gua.jpg">
          </div>
          <div class="carousel-card">
            <img src="img/perahu.jpg">
          </div>
          <div class="carousel-card">
            <img src="img/jungle2.jpg">
         </div>
        </div>
      </div>
      </section>
      <section id="about">
        <div >
        <h1 class="text-center mb-4 text-title" style="text-transform: uppercase">Tentang Desa <br>Talaga Paca</h1>
        <p class="text-center w-50 m-auto text-description">Desa Talaga Paca terdiri dari 210 kepala keluarga, 95% memiliki matapencaharian utama sebagai petani. Sebelum tahun 1980-an, masyarakat Talaga Paca merupakan Komunitas Adat Terpencil (KAT) yang tinggal di hutan dengan berburu dan meramu hasil hutan. Pemerintah menyebut masyarakat asli Talaga Paca dengan istilah Tugutil, namun mereka menyebut diri sebagai o hongana ma nyawa yang secara harafiah berarti “orang hutan” atau orang yang berasal dari hutan.</p>
        </div>
      </section>
      <div class="my-5 py-5">
      </div>
      <footer class="footer-distributed">
        
        <div class="container">
          <div class="row">
            <div class="col-md-4 col-sm-12">
    
              <h3>Talaga Paca</h3>
      
              <p class="footer-links">
                Aptent convallis risus amet ac quam malesuada magnis non auctor gravida phasellus, molestie.
              </p>
              <hr style="border-top: 1px solid white;">
              <div class="footer-company-name d-flex" style="color: white">
                <img src="img/phone.svg" style="height: 3.5vw">
                <div>
                  Phone <br>
                  <b>+68 123456789</b>
                </div>
              </div>
            </div>
      
            <div class="menu-footer col-md-4 col-sm-12">
              <ul class="row">
                <li class="col-6">
                  <a href="#">Tentang</a>
                </li>
                <li class="col-6">
                  <a href="#">Fasilitas</a>
                </li>
                <li class="col-6">
                  <a href="#">Akses</a>
                </li>
                <li class="col-6">
                  <a href="#">Event</a>
                </li>
                <li class="col-6">
                  <a href="#">Wisata</a>
                </li>
                <li class="col-6">
                  <a href="#">Publikasi</a>
                </li>
                
              </ul>
      
            </div>
      
            <div class="col-md-4 col-sm-12">
      
              <h3>Follow Us</h3>
      
              <div class="footer-icons">
      
                <a href="#"><i class="fa-brands fa-facebook"></i></a>
                <a href="#"><i class="fa-brands fa-twitter"></i></a>
                <a href="#"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-brands fa-tiktok"></i></a>
      
              </div>
      
            </div>
          </div>
        </div>
  
      </footer>

    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script> --}}
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.slick/1.6.0/slick.min.js"></script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
