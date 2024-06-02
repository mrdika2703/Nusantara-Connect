<nav class="navbar navbar-expand-lg fixed-top bg-maroon" data-bs-theme="dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample11"
            aria-controls="navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
            <a class="navbar-brand col-lg-3 me-0" href="#">Nusantara Connect</a>
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
</nav>