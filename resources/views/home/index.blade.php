<x-home.layout>

    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active ratio ratio-21x9">
                @if (!empty($HomeSlide))
                    @foreach ($HomeSlide as $item)
                        <img src="{{ $item->gambar_home1 }}" class="d-block w-100" alt="...">
                    @endforeach
                @else
                    <p>No active home found.</p>
                @endif
            </div>

            <div class="carousel-item ratio ratio-21x9">
                @if (!empty($HomeSlide))
                    @foreach ($HomeSlide as $item)
                        <img src="{{ $item->gambar_home2 }}" class="d-block w-100" alt="...">
                    @endforeach
                @else
                    <p>No active home found.</p>
                @endif
            </div>

            <div class="carousel-item ratio ratio-21x9">
                @if (!empty($HomeSlide))
                    @foreach ($HomeSlide as $item)
                        <img src="{{ $item->gambar_home3 }}" class="d-block w-100" alt="...">
                    @endforeach
                @else
                    <p>No active home found.</p>
                @endif
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <section class="section about-page">
        <div class="container">
            @if (!empty($tekshome))
                @foreach ($tekshome as $teks)
                    <h5 style="color: #770D0D;">Pustaka Indonesia</h5>
                    <div class="row">
                        <div class="col-lg-4">
                            <h2 class="title-color" style="color: black">{{ $teks->judul_homes }}</h2>
                        </div>
                        <div class="col-lg-8">
                            <p>{{ $teks->penjelasan_homes }}</p>
                        </div>
                    </div>
                @endforeach
            @else
                <h5 style="color: #770D0D;">Pustaka Indonesia a</h5>
                <div class="row">
                    <div class="col-lg-4">
                        <h2 class="title-color" style="color: black">Sejarah Map Indonesia</h2>
                    </div>
                    <div class="col-lg-8">
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Incidunt, quod laborum alias. Vitae
                            dolorum, officia sit! Saepe ullam facere at, consequatur incidunt, quae esse, quis ut
                            reprehenderit dignissimos, libero delectus.</p>
                    </div>
                </div>
            @endif
        </div>
    </section>

    <section class="fetaure-page ">
        <div class="container">
            <div class="row text-center justify-content-center">
                
                @forelse ($budaya as $budayaItem)
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <div class="ratio ratio-4x3">
                            <img 
                            @if (!empty($budayaItem->gambar_pustaka))
                            src="{{ asset($budayaItem->gambar_pustaka) }}"
                            @else
                            src="{{ asset('images/slideshow/ex.png') }}"
                            @endif
                            alt="images" class="img-fluid">
                        </div>
                        
                        <a href="{{ route('home.pustaka.detil', ['pustaka' => $budayaItem->id]) }}">
                            <h4 class="mt-3">{{ $budayaItem->nama_pustaka }}</h4>
                        </a>
                        <p>{{ Str::limit($budayaItem->penjelasan_pustaka, 55) }}</p>
                    </div>
                </div>
                @empty
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                        <a href="">
                            <h4 class="mt-3">Tradisi</h4>
                        </a>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                        <a href="">
                            <h4 class="mt-3">Kesenian</h4>
                        </a>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="about-block-item mb-5 mb-lg-0">
                        <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                        <a href="">
                            <h4 class="mt-3">Kuliner</h4>
                        </a>
                        <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                    </div>
                </div>
                @endforelse

            </div>
        </div>
    </section>

    <br><br>

    <section class="section testimonial visit" style="padding: 15 0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-6">
                    <div class="section-title">
                        <h4 style="color: white">Kunjungi</h4>
                        <h2 class="mb-4" style="color: white">Gallery Indonesia Kaya</h2>
                        <div class="divider  my-4" style="background: white;"></div>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-6 offset-lg-6">
                    <p style="color: white">
                        Galeri Indonesia Kaya merupakan ruang edutainment budaya persembahan Bakti Budaya Djarum
                        Foundation yang berbasis teknologi digital dari Indonesia untuk Indonesia yang menyuguhkan
                        informasi kekayaan budaya nusantara. Mulai dari alat musik tradisional, mainan tradisional, baju
                        adat, sampai informasi tentang kuliner, pariwisata, tradisi dan kesenian dikemas secara digital
                        dan interaktif di tempat pertunjukan ini.
                    </p>
                    <p style="color: white">
                        Terletak di Grand Indonesia, Galeri Indonesia Kaya menawarkan alternatif dalam mempelajari
                        tradisi budaya Indonesia dengan cara yang lebih modern, menyenangkan, mudah dan gratis.
                    </p>
                    <div class="">
                        <a href="https://maps.app.goo.gl/xrYr7DR1v5e2VUL58" class="btnVisit">
                            <h4>Cek Lokasi<i class="icofont-simple-right ml-2 "></i></h4>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section team">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="section-title text-center">
                        <h2 class="mb-4">Jadwal Budaya Indonesia</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Hari hari budaya yang harus diikuti oleh masyarakat indonesai untuk melestarikan budaya
                            indonesia supaya tidak berhenti di kita</p>
                    </div>
                </div>
            </div>

            <div class="row">
                @if (!empty($jadwals))
                    @forelse ($jadwals as $jadwals)
                        <div class="col-lg-3 col-md-6">
                            <div class="about-block-item mb-5 mb-lg-0">
                                <div class=" ratio ratio-4x3">
                                    <img src="{{ asset($jadwals->gambar_jadwal) }}" alt="image" class="img-fluid w-100">
                                </div>
                                
                                <h4 class="mt-3">{{ $jadwals->nama_jadwal }}</h4>
                                <p>{{ \Carbon\Carbon::parse($jadwals->tanggal_jadwal)->translatedFormat('d F Y') }}</p>
                            </div>
                        </div>
                    @empty
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <img src="images/slideshow/ex.png" alt="" class="img-fluid w-100">
                            <h4 class="mt-3">Hari Batik</h4>
                            <p>22 Desember 2024</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <img src="images/slideshow/ex.png" alt="" class="img-fluid w-100">
                            <h4 class="mt-3">Hari Batik</h4>
                            <p>22 Desember 2024</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <img src="images/slideshow/ex.png" alt="" class="img-fluid w-100">
                            <h4 class="mt-3">Hari Batik</h4>
                            <p>22 Desember 2024</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <img src="images/slideshow/ex.png" alt="" class="img-fluid w-100">
                            <h4 class="mt-3">Hari Batik</h4>
                            <p>22 Desember 2024</p>
                        </div>
                    </div>
                    @endforelse
                @else
                
                @endif
            </div>
        </div>
    </section>

    </x-home>
