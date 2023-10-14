<x-main-layout>

    <section style="padding-top:10rem;padding-bottom:10rem;" id="about-expand">
        <div class="text-left">
            <h1 class=" mb-4 text-title w-50" style="text-transform: uppercase">{{ __('text.publikasi.title') }}</h1>
            <p style="color: #146C94" class="text-justify w-50 m-auto text-description">
            <iframe width="688" height="387" src="https://www.youtube.com/embed/mdozRSkQ_tY" title="Ekowisata Talaga Paca - Halmahera Utara">
			</iframe>
             </p>
            </br>
            <h3 class=" mb-4 text-subtitle w-50" >  {{ __('text.publikasi.artikel2') }} </h3>
            <p style="color: #146C94" class="text-justify w-50 m-auto text-description">
            {{ __('text.publikasi.konten_artikel2') }}
             </p>
            </br>
        <div class="w-50 m-auto">
        <button onclick="window.location='{{ url("/atraksi-wisata/keliling-danau") }}'" class="btn btn-black-transparent">BACA JURNAL <i class="fa-solid fa-arrow-right"></i></button>
        </div>			
        </div>   
      </section>
</x-main-layout>