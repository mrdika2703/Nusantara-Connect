<x-home.layout>

    <br>
    <br>

    <section class="page-title bg-1">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="block text-center">
                        <h1 class="text-capitalize mb-5 text-lg">Budaya Indonesia</h1>

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
                        <img
                        @if (!empty($pustaka->gambar_pustaka))
                        src="{{ asset($pustaka->gambar_pustaka) }}"
                        @else
                        src="{{ asset('images/slideshow/ex.png') }}"
                        @endif
                        alt="pustaka-image" class="img-fluid w-100">
    
                        <div class="info-block mt-4">
                            <h4 class="mb-0">{{ $pustaka->nama_pustaka }}</h4>
                            <p>Asal Daerah : {{ $pustaka->provinsi->nama_provinsi }}</p>
                        </div>
                    </div>
                </div>
    
                <div class="col-lg-8 col-md-6">
                    <div class="doctor-details mt-4 mt-lg-0">
                        <h2 class="text-md" style="color: #770D0D"><span style="color: black">Budaya </span>{{ $pustaka->nama_pustaka }}</h2>
                        <div class="divider my-4"></div>
                        <p>{{ $pustaka->penjelasan_pustaka }}</p>
    
                        <a href="{{ 
                        request()->is('pustaka/*/detail') ? '/pustaka' : 
                        (request()->is('tradisi/*/detail') ? '/tradisi' : 
                        (request()->is('kuliner/*/detail') ? '/kuliner' : 
                        (request()->is('kesenian/*/detail') ? '/kesenian' : ''))) 
                        }} " class="btn btn-main-2 btn-round-full mt-3">Back<i class="icofont-simple-right ml-2  "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-home.layout>