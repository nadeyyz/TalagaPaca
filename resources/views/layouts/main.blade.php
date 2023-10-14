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

        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css"
        integrity="sha256-p4NxAoJBhIIN+hmNHrzRCf9tD/miZyoHS5obTRR9BMY="
        crossorigin=""/>
        <!-- Make sure you put this AFTER Leaflet's CSS -->
        <script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"
        integrity="sha256-20nQCchB9co0qIjJZRGuk2/Z9VM+kNiyxNV1lvTlZBo="
        crossorigin=""></script>
    </head>
    <body class="hero-anime">

      <header class="navigation-wrap bg-light start-header start-style">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav class="navbar navbar-expand-md navbar-light">

                <a class="navbar-brand" href="/">Talaga Paca</a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav ml-auto py-4 py-md-0">
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Request::routeIs('home') ? 'active' : '' }}">
                      <a class="nav-link" href="/">{{ __('text.menu.berenda') }}</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Request::routeIs('atraksi-wisata') ? 'active' : '' }}">
                      <a class="nav-link" href="/atraksi-wisata">{{ __('text.menu.atraksi') }}</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4 {{ Request::routeIs('fasilitas') ? 'active' : '' }} ">
                      <a class="nav-link" href="/fasilitas">{{ __('text.menu.fasilitas') }}</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="/comming-soon">{{ __('text.menu.produk') }}</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="/comming-soon">{{ __('text.menu.event') }}</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="/comming-soon">{{ __('text.menu.publikasi') }}</a>
                    </li>
                    <li class="nav-item pl-4 pl-md-0 ml-0 ml-md-4">
                      <a class="nav-link" href="/comming-soon">{{ __('text.menu.akses') }}</a>
                    </li>
                  </ul>
                </div>
                <div class="collapse navbar-collapse" id="langBtn" style="justify-content: right">
                    <div class="pl-4 pl-md-0 ml-0 ml-md-4">
                        {{-- <a onclick="showLanguages()" class="lang-drpdwn-btn nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                            EN <img class="mb-1" src="{{ asset('img/en.png') }}" height="19"></a>
                        <div class="dropdown-language">
                            <a class="dropdown-item" href="#">English</a>
                            <a class="dropdown-item" href="#">Indonesia</a>
                        </div> --}}
                        <div id="imgLang" style="display: inline">
                            <img class="mb-1" src="{{ asset('img/en.png') }}" height="19">
                        </div>
                        <select id="selectLang" class="Langchange">
                            <option value="en" {{ session()->get('locale') == 'en' ? 'selected' : '' }}>En <img class="mb-1" src="{{ asset('img/en.png') }}" height="19"></option>
                            <option value="id" {{ session()->get('locale') == 'id' ? 'selected' : '' }}>Id <img class="mb-1" src="{{ asset('img/id.png') }}" height="19"></option>
                        </select>
                    </div>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </header>

      <main>
        {{$slot}}
      </main>

      <footer class="footer-distributed">

        <div class="container">
          <div class="row-footer row">
            <div class="col-md-4 col-sm-12">

              <h3>Talaga Paca</h3>

              <p class="footer-links">
                {{ substr(__('text.konten_jumbotron'), 0, 64) }}
            </p>
              <hr style="border-top: 1px solid white;">
              <div class="footer-company-name d-flex" style="color: white">
                <img src="{{ asset('img/phone.svg') }}" style="height: 2rem">
                <div>
                  Phone <br>
                  <b>+68 123456789</b>
                </div>
              </div>
            </div>

            <div class="menu-footer col-md-4 col-sm-12">
              <ul class="row">
                <li class="col-6">
                  <a href="/about">{{ __('text.menu.tentang') }}</a>
                </li>
                <li class="col-6">
                  <a href="/comming-soon">{{ __('text.menu.fasilitas') }}</a>
                </li>
                {{-- <li class="col-6">
                  <a href="/comming-soon">{{ __('text.menu.akses') }}</a>
                </li> --}}
                <li class="col-6">
                  <a href="/comming-soon">{{ __('text.menu.event') }}</a>
                </li>
                <li class="col-6">
                  <a href="/comming-soon">{{ __('text.menu.produk') }}</a>
                </li>
                <li class="col-6">
                  <a href="/comming-soon">{{ __('text.menu.publikasi') }}</a>
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
    <script type="text/javascript">
        var url = "{{ route('LangChange') }}";
        var imgLang = $('#imgLang');
        var selectLang=  $(".Langchange");

        $(".Langchange").change(function(){
            window.location.href = url + "?lang="+ $(this).val();
        });
        console.log(selectLang.find(":selected").val())
        if (selectLang.find(":selected").val()=='en') {
                imgLang.html('')
                imgLang.append(`<img class="mb-1" src="{{ asset('img/en.png') }}" height="19">`);
        } else {
                imgLang.html('')
                imgLang.append(`<img class="mb-1" src="{{ asset('img/id.png') }}" height="19">`);
        }

    </script>
    <script src="{{ asset('js/script.js') }}"></script>
</html>
