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
                        <h2>PUSTAKA</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Pustaka yang berisi penjelasan budaya budaya seperti Tradisi, Kesenian dan Kuliner yang ada di Indonesia</p>
                    </div>
                </div>
            </div>

            <div class="col-12 text-center  mb-5">
                <div class="btn-group btn-group-toggle " data-toggle="buttons">
                    <label class="btn active ">
                        <input type="radio" name="shuffle-filter" value="all" checked="checked" />Semua Budaya
                    </label>
                    <label class="btn ">
                        <input type="radio" name="shuffle-filter" value="cat1" />Tradisi
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat2" />Kesenian
                    </label>
                    <label class="btn">
                        <input type="radio" name="shuffle-filter" value="cat3" />Kuliner
                    </label>
                </div>
            </div>

            <div class="row shuffle-wrapper portfolio-gallery">
                
                @forelse ($pustaka as $pustakaItem)
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                    @if ($pustakaItem->jenis_budaya == 'tradisi')
                        data-groups="[&quot;cat1&quot;]"
                    @elseif ($pustakaItem->jenis_budaya == 'kesenian')
                        data-groups="[&quot;cat2&quot;]"
                    @elseif ($pustakaItem->jenis_budaya == 'kuliner')
                        data-groups="[&quot;cat3&quot;]"
                    @else
                        data-groups=""
                    @endif >
                        
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <div class="ratio ratio-4x3">
                                        <img
                                            @if (!empty($pustakaItem->gambar_pustaka))
                                            src="{{ asset($pustakaItem->gambar_pustaka) }}"
                                            @else
                                            src="{{ asset('images/slideshow/ex.png') }}"
                                            @endif
                                            alt="pustaka-image" class="img-fluid w-100">
                                    </div>
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h5 class="mb-0"><a
                                        href="
                                        {{ route('home.pustaka.detil', ['pustaka' => $pustakaItem->id]) }}
                                         ">{{ Str::limit($pustakaItem->nama_pustaka, 20) }}</a>
                                </h5>
                                <p>{{ $pustakaItem->provinsi->nama_provinsi }}</p>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                        data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                        <div class="position-relative doctor-inner-box">
                            <div class="doctor-profile">
                                <div class="doctor-img">
                                    <img src="images/slideshow/ex.png" alt="pustaka-image" class="img-fluid w-100">
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
                                    <img src="images/slideshow/ex.png" alt="pustaka-image" class="img-fluid w-100">
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
                                    <img src="images/slideshow/ex.png" alt="pustaka-image" class="img-fluid w-100">
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
                                    <img src="images/slideshow/ex.png" alt="pustaka-image" class="img-fluid w-100">
                                </div>
                            </div>
                            <div class="content mt-3">
                                <h4 class="mb-0"><a href="/tokoh/detail">Nama Tokoh</a></h4>
                                <p>Provinsi Tokoh</p>
                            </div>
                        </div>
                    </div>
                @endforelse

                {{-- <div class="col-lg-3 col-sm-6 col-md-6 mb-4 shuffle-item"
                    data-groups="[&quot;cat1&quot;,&quot;cat2&quot;]">
                    <div class="position-relative doctor-inner-box">
                        <div class="doctor-profile">
                            <div class="doctor-img">
                                <img src="images/slideshow/ex.png" alt="pustaka-image" class="img-fluid w-100">
                            </div>
                        </div>
                        <div class="content mt-3">
                            <h4 class="mb-0"><a href="doctor-single.html">Ir Soekarno</a></h4>
                            <p>22 Desember</p>
                        </div>
                    </div>
                </div> --}}
            </div>
            <div class="row justify-content-center text-center">
                <div class="col">
                    <nav class="pagination py-2 d-inline-block">
                        <div class="nav-links">
                            {{ $pustaka->links('vendor.pagination.custom') }}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
</x-home.layout>
