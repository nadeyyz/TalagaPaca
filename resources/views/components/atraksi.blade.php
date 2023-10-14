<x-main-layout>
    <section id="atraksi">
      <div class="">
        <div class="section" style="padding-top: 10%">
          <div class="container card p-5" style="margin: auto;width: 65%;border-radius:20px">

                <div class="px-3">
                    <h1 class="text-center mb-4 text-title" style="width:80%;text-transform: uppercase">{{ __('text.atraksi.title') }}</h1>
                   <div class="container-atraksi row">
                        <div class="col-12">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="img/jungle.jpg" class="img-atraksi">
                                    <span class="img-atraksi-title">Jungle Tracking</span>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="text-description text-sm">{{ substr(__('text.atraksi.konten_jungle'), 0, 155) }}...</div>
                                    <button onclick="window.location='{{ url("/atraksi-wisata/jungle-tracking") }}'" class="btn btn-black-transparent">Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="img/AtraksiWisata/BirdWatching/mahasiswa.jpg" class="img-atraksi">
                                    <span class="img-atraksi-title">Bird Watching</span>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="text-description text-sm">{{ substr(__('text.atraksi.konten_birdwatching'), 0, 155) }}...</div>
                                    <button onclick="window.location='{{ url("/atraksi-wisata/birdwatching") }}'" class="btn btn-black-transparent">Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="img/AtraksiWisata/Gua/TimPolandia.jpg" class="img-atraksi">
                                    <span class="img-atraksi-title">Gua</span>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="text-description text-sm">{{ substr(__('text.atraksi.konten_gua'), 0, 155) }}...</div>
                                    <button onclick="window.location='{{ url("/atraksi-wisata/gua") }}'" class="btn btn-black-transparent">Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mb-2">
                            <div class="row">
                                <div class="col-md-4 col-sm-12">
                                    <img src="img/AtraksiWisata/KelilingDanau/perahu2.jpg" class="img-atraksi">
                                    <span class="img-atraksi-title">Keliling Danau</span>
                                </div>
                                <div class="col-md-8 col-sm-12">
                                    <div class="text-description text-sm">{{ substr(__('text.atraksi.konten_keliling'), 0, 155) }}...</div>
                                    <button onclick="window.location='{{ url("/atraksi-wisata/keliling-danau") }}'" class="btn btn-black-transparent">Selengkapnya <i class="fa-solid fa-arrow-right"></i></button>
                                </div>
                            </div>
                        </div>
                   </div>

                </div>

          </div>
        </div>
      </div>
    </section>
    <div class="my-2 py-5">
    </div>
  </x-main-layout>
