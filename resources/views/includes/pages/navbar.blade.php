<header class="header navbar navbar-expand-lg bg-light navbar-sticky">
    <div class="container px-3">
        <a href="{{ route('index_home') }}" class="navbar-brand pe-3">
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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('ppid/profile-ppid') || request()->is('ppid/rekapitulasi-permohonan-informasi-publik') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">PPID</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('ppid_home') }}"
                                    class="dropdown-item {{ request()->is('ppid/profile-ppid') ? 'active' : '' }}">Profile
                                    PPID</a>
                            </li>
                            <li>
                                <a href="{{ route('rekapitulasi_home') }}"
                                    class="dropdown-item {{ request()->is('ppid/rekapitulasi-permohonan-informasi-publik') ? 'active' : '' }}">Rekapitulasi
                                    Permohonan Informasi Publik</a>
                            </li>
                        </ul>
                    </li>
                    <li
                        class="nav-item {{ request()->is('data') || request()->is('data/guest') || request()->is('data/unduh-data') || request()->is('data/unduh-data/*') || request()->is('data/data-integrasi') ? 'active' : '' }}">
                        <a href="{{ route('index_dataset_home') }}" class="nav-link">Dataset</a>
                    </li>
                    <li
                        class="nav-item {{ request()->is('infografis') || request()->is('infografis/*') ? 'active' : '' }}">
                        <a href="{{ route('index_infografis') }}" class="nav-link">Infografis</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('simpas') || request()->is('permohonan-informasi-publik/form-pengaduan-publik') || request()->is('lapor') || request()->is('keran-sulsel') || request()->is('permohonan-keberatan-informasi-publik') || request()->is('permohonan-informasi-publik') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="https://disnakertrans.sulselprov.go.id/simpas"
                                    class="dropdown-item {{ request()->is('simpas') ? 'active' : '' }}">SIMPAS</a>
                            </li>
                            <li>
                                <a href="{{ route('permohonan_publik') }}"
                                    class="dropdown-item {{ request()->is('permohonan-informasi-publik') || request()->is('permohonan-informasi-publik/form-pengaduan-publik') ? 'active' : '' }}">Permohonan
                                    Informasi Publik</a>
                            </li>
                            <li>
                                <a href="{{ route('keberatan_publik') }}"
                                    class="dropdown-item {{ request()->is('permohonan-keberatan-informasi-publik') ? 'active' : '' }}">Pengajuan
                                    Keberatan Informasi Publik</a>
                            </li>
                            <li>
                                <a href="{{ route('keran_sulsel') }}"
                                    class="dropdown-item {{ request()->is('keran-sulsel') ? 'active' : '' }}">KERAN
                                    SULSEL</a>
                            </li>
                            <li>
                                <a href="{{ route('lapor') }}"
                                    class="dropdown-item {{ request()->is('lapor') ? 'active' : '' }}">LAPOR!</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('informasi-public') || request()->is('login') || request()->is('pengumuman') || request()->is('berita') || request()->is('berita/*') || request()->is('publikasi') || request()->is('publikasi/*') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Lainnya</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{ route('index_informasi_public') }}"
                                    class="dropdown-item {{ request()->is('informasi-public') ? 'active' : '' }}">Informasi</a>
                            </li>
                            <li>
                                <a href="{{ route('index_publikasi') }}"
                                    class="dropdown-item {{ request()->is('publikasi') ? 'active' : '' }}">Publikasi</a>
                            </li>
                            <li>
                                <a href="{{ route('index_berita') }}" class="dropdown-item {{ request()->is('berita')
                                    || request()->is('berita/*') ? 'active' : '' }}">Berita</a>
                            </li>
                            <li>
                                <a href=" {{ route('pengumuman') }}"
                                    class="dropdown-item {{ request()->is('pengumuman') ? 'active' : '' }}">Pengumuman</a>
                            </li>
                            <li>
                                <a href="{{ route('login') }}"
                                    class="dropdown-item {{ request()->is('login') ? 'active' : '' }}">Login</a>
                            </li>
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