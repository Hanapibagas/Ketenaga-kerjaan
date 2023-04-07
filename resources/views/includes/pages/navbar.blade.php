<header class="header navbar navbar-expand-lg bg-light navbar-sticky">
    <div class="container px-3">
        <a href="index.html" class="navbar-brand pe-3">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" width="47" alt="Silicon">
            KETENAGAKERJAAN
        </a>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <style>
                .perubahan {
                    margin-left: 32%
                }

                @media screen and (max-width: 992px) {
                    .perubahan {
                        margin-left: 1px
                    }
                }
            </style>
            <div class="offcanvas-body perubahan">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item {{ request()->is('/') ? 'active' : '' }}">
                        <a href="{{ route('index_home') }}" class="nav-link">Beranda</a>
                    </li>
                    <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}">
                        <a href="{{ route('profile_home') }}" class="nav-link">Profile</a>
                    </li>
                    <li class="nav-item {{ request()->is('ppid') ? 'active' : '' }}">
                        <a href="{{ route('ppid_home') }}" class="nav-link">PPID</a>
                    </li>
                    <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link">Dataset</a>
                    </li>
                    <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link">Infografis</a>
                    </li>
                    <li class="nav-item">
                        <a href="docs/getting-started.html" class="nav-link">Berita</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Lainnya</a>
                        <ul class="dropdown-menu">
                            <li><a href="account-details.html" class="dropdown-item">Informasi</a></li>
                            <li><a href="account-security.html" class="dropdown-item">Publikasi</a></li>
                            <li><a href="account-notifications.html" class="dropdown-item">Layanan</a></li>
                            <li><a href="account-messages.html" class="dropdown-item">Pengumuman</a></li>
                            <li><a href="account-signup.html" class="dropdown-item">Login</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
</header>