<x-home.layout>

    <br>
    <br>

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">Biografi Singkat</h1>

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

    <section class="section doctor-single">
        <div class="container">
            <div class="row">
                @method('PUT')
                @csrf
                <div class="col-lg-4 col-md-6">
                    <div class="doctor-img-block">
                        <img src="{{ asset($tokoh->gambar_tokoh) }}" alt="" class="img-fluid w-100">
    
                        <div class="info-block mt-4">
                            <h4 class="mb-0">{{ $tokoh->nama_tokoh }}</h4>
                            <p>Tanggal Lahir : {{ $tokoh->tanggal_lahir }}</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md" style="color: #770D0D"><span style="color: black">Perkenalkan </span>{{ $tokoh->nama_tokoh }}</h2>
                        <h4 style="color: black">{{ $tokoh->provinsi->nama_provinsi }}</h4>
                        <div class="divider my-4"></div>
                        <p>{{ $tokoh->penjelasan_tokoh }}</p>
    
                        <a href="/tokoh" class="btn btn-main-2 btn-round-full mt-3">Back<i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-home.layout>