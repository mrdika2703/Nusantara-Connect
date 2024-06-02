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
            @foreach ($homes as $home)
                <div class="carousel-item active">
                    <img src="{{ $home['gambar-home1'] }}" class="d-block w-100" alt="...">
                </div>
            @endforeach
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

    <main class="MainContent">
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

                <div class="text-center">
                    <div class="row justify-content-center">
                        <a href="" class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title" style="text-decoration: none">Kesenian</h5>
                                    <p class="card-text" style="text-decoration: none">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>

                        <a href="" class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Kuliner</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>

                        <a href="" class="col">
                            <div class="card" style="width: 15rem;">
                                <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Tradisi</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up
                                        the
                                        bulk of the card's content.</p>
                                </div>
                            </div>
                        </a>


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
                            <div class="">
                                <h2><b>Gallery</b></h2>
                                <h1>Indonesia</h1>
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

                <div class="row justify-content-center">
                    <div class="spacee card" style="width: 15rem;">
                        <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hari Batik</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="spacee card" style="width: 15rem;">
                        <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hari Batik</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="spacee card" style="width: 15rem;">
                        <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hari Batik</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                    <div class="spacee card" style="width: 15rem;">
                        <img src="images/slideshow/ex.png" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title">Hari Batik</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the
                                bulk of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </main>

    </x-home>
