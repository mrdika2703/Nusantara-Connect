{{-- <nav class="navbar navbar-expand-lg fixed-top bg-maroon" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#"><strong>Nusantara</strong> Connect</a>
            <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('pustaka', 'tradisi', 'kesenian', 'kuliner') ? 'active' : '' }} dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Pustaka Budaya</a>
                    <ul class="dropdown-menu bg-maroon">
                        <li><a class="dropdown-item" href="/pustaka">Pustaka</a></li>
                        <li><a class="dropdown-item" href="/tradisi">Tradisi</a></li>
                        <li><a class="dropdown-item" href="/kesenian">Kesenian</a></li>
                        <li><a class="dropdown-item" href="/kuliner">Kuliner</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tokoh') ? 'active' : '' }}" href="/tokoh">Tokoh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('liputan') ? 'active' : '' }}" href="/liputan">Liputan Budaya</a>
                </li>
                
            </ul>
            <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                <a class="nav-link">Telkom University Surabaya</a>
            </div>
        </div>
    </div>
</nav> --}}
<nav class="navbar navbar-expand-lg navigation fixed-top bg-maroon" id="navbar" style="color: white;" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#" style="margin-top: 0%">
            <img src="{{ asset('NusantaraConnect.png') }}" alt="" class="img-fluid w-50">
        </a>

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarmain"
            aria-controls="navbarmain" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icofont-navigation-menu"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarmain">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" href="/">Home</a>
                </li>

                {{-- <li class="nav-item dropdown">
                    <a class="nav-link {{ request()->is('pustaka', 'tradisi', 'kesenian', 'kuliner') ? 'active' : '' }} dropdown-toggle" href="#" data-bs-toggle="dropdown"
                        aria-expanded="false">Pustaka Budaya <i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu bg-maroon">
                        <li><a class="dropdown-item" href="/pustaka">Pustaka</a></li>
                        <li><a class="dropdown-item" href="/tradisi">Tradisi</a></li>
                        <li><a class="dropdown-item" href="/kesenian">Kesenian</a></li>
                        <li><a class="dropdown-item" href="/kuliner">Kuliner</a></li>
                    </ul>
                </li> --}}

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->is('pustaka', 'tradisi', 'kesenian', 'kuliner') ? 'active' : '' }}" href="#" id="" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Pustaka Budaya<i class="icofont-thin-down"></i></a>
                    <ul class="dropdown-menu" aria-labelledby="dropdown02">
                        <li><a class="dropdown-item" href="/pustaka">Pustaka</a></li>
                        <li><a class="dropdown-item" href="/tradisi">Tradisi</a></li>
                        <li><a class="dropdown-item" href="/kesenian">Kesenian</a></li>
                        <li><a class="dropdown-item" href="/kuliner">Kuliner</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('tokoh') ? 'active' : '' }}" href="/tokoh">Tokoh</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->is('liputan') ? 'active' : '' }}" href="/liputan">Liputan Budaya</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
