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

            <div class="carousel-item active">
                @if (!empty($HomeSlide))
                    @foreach ($HomeSlide as $item)
                        <img src="{{ $item->gambar_home1 }}" class="d-block w-100" alt="...">
                    @endforeach
                @else
                    <p>No active home found.</p>
                @endif
            </div>

            <div class="carousel-item">
                @if (!empty($HomeSlide))
                    @foreach ($HomeSlide as $item)
                        <img src="{{ $item->gambar_home2 }}" class="d-block w-100" alt="...">
                    @endforeach
                @else
                    <p>No active home found.</p>
                @endif
            </div>

            <div class="carousel-item">
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

    <br>

    <main class="fetaure-page">
        <div class="container">
            <div class="container-fluid">
                <h5>Pustaka Indonesia</h5>
                <h1><b>Map Indonesia</b></h1>
                <p>Peta Indonesia adalah representasi grafis dari wilayah geografis Indonesia. Biasanya, peta tersebut
                    mencakup pulau-pulau utama seperti Jawa, Sumatra, Kalimantan, Sulawesi, dan Papua, serta ribuan
                    pulau
                    kecil lainnya. Peta tersebut juga menunjukkan batas-batas administratif provinsi, kabupaten, dan
                    kota-kota di seluruh Indonesia.</p>

                <br>
                    
                <div class="row text-center justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                               <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                            <h5 class="mt-3">Tradisi</h5>
                            <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p> 
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                                <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                            <h5 class="mt-3">Kesenian</h5>
                            <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                                <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                                <h5 class="mt-3 text-maroon">Kuiner</h5>
                                <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            
        </div>

        <br>

        <div class="visit">
            <br>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-4">
                        <h2 style="color: white">Kunjungi</h2>
                    </div>
                    <div class="col-4">
                        <div class="row float-right">
                            <a href="" class="btn btn-light btn-md">Cek Lokasi</a>
                        </div>
                    </div>
                </div>

                <div class="line"></div>

                <div class="container-fluid">
                    <div class="row align-items-center" style="color: white">
                        <div class="col">
                            <div class="" >
                                <h2 style="color: white"><b>Gallery</b></h2>
                                <h1 style="color: white">Indonesia</h1>
                                <br>
                                <div style="text-align: justify; padding-right : 85px; margin-right : 85px;">
                                    <p>Budaya Indonesia yang kaya berpadu dengan teknologi yang interaktif: sebuah
                                        galeri yang menyenangkan untuk dijajaki.</p>
                                </div>
                            </div>

                        </div>
                        <div class="col">
                            <div class="">
                                <img src="images/slideshow/ex.png" class="img-fluid rounded" alt="...">
                            </div>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>

        <br>

        <div class="container">
            <div class="text-center">
                <div class=" container-fluid">
                    <h1 style="color : #770D0D; margin: 25px 0 ;"><b>Jadwal Budaya</b> Indonesia</h1>
                </div>

                <div class="row text-center justify-content-center">
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                                <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                                <h5 class="mt-3">Hari Batik</h5>
                                <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                                <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                                <h5 class="mt-3">Hari Pancasila</h5>
                                <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                                <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                                <h5 class="mt-3">Idul Fitri</h5>
                                <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                            </a>
                            
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="about-block-item mb-5 mb-lg-0">
                            <a href="">
                                <img src="images/slideshow/ex.png" alt="" class="img-fluid w-75">
                                <h5 class="mt-3">Hari Waisak</h5>
                                <p>Voluptate aperiam esse possimus maxime repellendus, nihil quod accusantium .</p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    </x-home>
