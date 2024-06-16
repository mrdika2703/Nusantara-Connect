<x-home.layout>
    <br>
    <br>

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <span class="text-white" style="opacity: 0.0">All Doctors</span>
                        <h1 class="text-capitalize mb-5 text-lg" style="opacity: 0.0">Specalized doctors</h1>

                        <!-- <ul class="list-inline breadcumb-nav">
                  <li class="list-inline-item"><a href="index.html" class="text-white">Home</a></li>
                  <li class="list-inline-item"><span class="text-white">/</span></li>
                  <li class="list-inline-item"><a href="#" class="text-white-50">All Doctors</a></li>
                </ul> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section doctors">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2>TOKOH</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Biografi singkat mengenai tokoh bersejarah yang ada di Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
                @forelse ($tokoh as $tokoh)
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <div
                                        style="position: relative; width: 100%; padding-bottom: 133.33%;">
                                        <img style="position: absolute; top: 0; left: 0; bottom: 0; right: 0; width: 100%; height: 100%; object-fit: cover;"
                                            src="{{ asset($tokoh->gambar_tokoh) }}" alt="tokoh-image"
                                            class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h5 class="mb-0"><a
                                        href="{{ route('home.tokoh.detil', ['tokoh' => $tokoh->id]) }}">{{ Str::limit($tokoh->nama_tokoh, 20) }}</a>
                                </h5>
                                <p>{{ $tokoh->provinsi->nama_provinsi }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <img src="images/slideshow/ex.png" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="/tokoh/detail">Nama Tokoh</a></h4>
                                <p>Provinsi Tokoh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <img src="images/slideshow/ex.png" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="/tokoh/detail">Nama Tokoh</a></h4>
                                <p>Provinsi Tokoh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <img src="images/slideshow/ex.png" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="/tokoh/detail">Nama Tokoh</a></h4>
                                <p>Provinsi Tokoh</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <img src="images/slideshow/ex.png" alt="doctor-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="/tokoh/detail">Nama Tokoh</a></h4>
                                <p>Provinsi Tokoh</p>
                            </div>
                        </div>
                    </div>
                @endforelse

            </div>
        </div>
    </section>



</x-home.layout>
