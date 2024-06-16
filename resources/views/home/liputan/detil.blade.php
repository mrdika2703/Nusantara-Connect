<x-home.layout>

    <br>
    <br>
    <br>


    <section class="section blog-wrap">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 mb-5">
                            <h4><a href="/liputan" class=""><i class="icofont-simple-left ml-2"></i>Back</a></h4>
                            @method('PUT')
                            @csrf
                            <br>
                            <div class="single-blog-item">
                                <div class="ratio ratio-16x9">
                                    <img src="{{ asset( $liputan->gambar_liputan ) }}" alt="image" class="img-fluid">
                                </div>

                                <div class="blog-item-content mt-5">
                                    <div class="blog-item-meta mb-3">
                                        <span class="text-black text-capitalize mr-3">
                                            <i class="icofont-calendar mr-1"></i> {{ \Carbon\Carbon::parse($liputan->created_at)->translatedFormat('d F Y') }}
                                        </span>
                                        <span class="text-black text-capitalize mr-3">
                                            <i class="icofont-location-pin mr-1"></i>
                                            {{ $liputan->provinsi->nama_provinsi }}
                                        </span>
                                    </div>

                                    <h2 class="mb-4 text-md" style="color: #770D0D"><b>{{ $liputan->nama_liputan }}</b></h2>

                                    <p>{{ $liputan->penjelasan_liputan }}</p>

                                    <blockquote class="quote">
                                        Pahami berita dan jangan sebarkan Hoax
                                    </blockquote>

                                    <div class="mt-5 clearfix">
                                        <ul class="float-left list-inline tag-option"> 
                                            <li class="list-inline-item"><a>#{{ $liputan->jenis_budaya }}</a></li>
                                            <li class="list-inline-item"><a>#{{ $liputan->provinsi->nama_provinsi }}</a></li>
                                           </ul>        
                                    </div>

                                </div>
                            </div>
                        </div>


                        {{-- <div class="col-lg-12">
                            <form class="comment-form my-5" id="comment-form">
                                <h4 class="mb-4">Tulis Saran Anda</h4>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="name" id="name"
                                                placeholder="Name:">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" type="text" name="mail" id="mail"
                                                placeholder="Email:">
                                        </div>
                                    </div>
                                </div>


                                <textarea class="form-control mb-4" name="comment" id="comment" cols="30" rows="5"
                                    placeholder="Comment"></textarea>

                                <input class="btn btn-main-2 btn-round-full" type="submit" name="submit-contact"
                                    id="submit_contact" value="Submit Message">
                            </form>
                        </div> --}}
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
        </div>
    </section>

</x-home.layout>
