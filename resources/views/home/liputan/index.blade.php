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


    <section class="section blog-wrap">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <div class="section-title">
                        <h2 style="color:#770D0D;">Liputan Budaya Indonesia</h2>
                        <div class="divider mx-auto my-4"></div>
                        <p>Berita berita yang tersebar di Indonesia tentang kebudayaan</p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        @forelse($liputan as $liputanItem)
                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="blog-item">
                                    <div class="blog-thumb ratio ratio-16x9">
                                        <img src="{{ $liputanItem->gambar_liputan }}" alt="liputan-image" class="img-fluid ">
                                    </div>

                                    <div class="blog-item-content">
                                        <div class="blog-item-meta mb-3 mt-4">
                                            <span class="text-black text-capitalize mr-3">
                                                <i class="icofont-calendar mr-1"></i> {{ \Carbon\Carbon::parse($liputanItem->created_at)->translatedFormat('d F Y') }}
                                            </span>
                                            <span class="text-black text-capitalize mr-3">
                                                <i class="icofont-location-pin mr-1"></i>
                                                {{ $liputanItem->provinsi->nama_provinsi }}
                                            </span>
                                        </div>

                                        <h2 class="mt-3 mb-3"><a
                                                href="{{ route('home.liputan.detil', ['liputan' => $liputanItem->id]) }}">{{ $liputanItem->nama_liputan }}</a>
                                        </h2>

                                        <p class="mb-4">{{ Str::limit($liputanItem->penjelasan_liputan, 90) }}</p>

                                        <a href="{{ route('home.liputan.detil', ['liputan' => $liputanItem->id]) }}"
                                            class="btn btn-main btn-icon btn-round-full">Lihat Detail <i
                                                class="icofont-simple-right ml-2  "></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="blog-item">
                                    <div class="blog-thumb">
                                        <img src="images/slideshow/slide1.jpg" alt="" class="img-fluid ">
                                    </div>

                                    <div class="blog-item-content">
                                        <div class="blog-item-meta mb-3 mt-4">
                                            <span class="text-black text-capitalize mr-3"><i
                                                    class="icofont-calendar mr-1"></i> 28th January</span>
                                        </div>

                                        <h2 class="mt-3 mb-3"><a href="/liputan/detail">Wisata Indonesia Terbaru</a>
                                        </h2>

                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                            Blanditiis aliquid architecto facere commodi cupiditate omnis voluptatibus
                                            inventore atque velit cum rem id assumenda quam recusandae ipsam ea porro,
                                            dicta
                                            ad.</p>

                                        <a href="/liputan/detail" class="btn btn-main btn-icon btn-round-full">Read More
                                            <i class="icofont-simple-right ml-2  "></i></a>
                                    </div>
                                </div>
                            </div>
                        @endforelse

                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="sidebar-wrap pl-lg-4 mt-5 mt-lg-0">

                        <div class="sidebar-widget category mb-3">
                            <h5 class="mb-4" style="color: #770D0D">Kategori</h5>
                            <ul class="list-unstyled">
                                <li class="align-items-center">
                                    <a>Tradisi</a>
                                    <span>({{ \App\Models\Liputan::where('jenis_budaya', 'tradisi')->count() }})</span>
                                </li>
                                <li class="align-items-center">
                                    <a>Kesenian</a>
                                    <span>({{ \App\Models\Liputan::where('jenis_budaya', 'kesenian')->count() }})</span>
                                </li>
                                <li class="align-items-center">
                                    <a>Kuliner</a>
                                    <span>({{ \App\Models\Liputan::where('jenis_budaya', 'kuliner')->count() }})</span>
                                </li>
                        </div>

                        <div class="sidebar-widget schedule-widget mb-3">
                            <h5 class="mb-4" style="color: #770D0D">jadwal Hari Budaya</h5>

                            <ul class="list-unstyled">
                                @forelse ($jadwal as $jadwal)
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a style="color: #222">{{ $jadwal->nama_jadwal }}</a>
                                        <span>{{ \Carbon\Carbon::parse($jadwal->tanggal_jadwal)->translatedFormat('d F Y') }}</span>
                                    </li>
                                @empty
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a style="color: #222">Hari Batik</a>
                                        <span>02 Oktober</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a style="color: #222">Hari Batik</a>
                                        <span>02 Oktober</span>
                                    </li>
                                    <li class="d-flex justify-content-between align-items-center">
                                        <a style="color: #222">Hari Batik</a>
                                        <span>02 Oktober</span>
                                    </li>
                                @endforelse
                            </ul>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-lg-8">
                    <nav class="pagination py-2 d-inline-block">
                        <div class="nav-links">
                            {{ $liputan->links('vendor.pagination.custom') }}
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>



</x-home.layout>
