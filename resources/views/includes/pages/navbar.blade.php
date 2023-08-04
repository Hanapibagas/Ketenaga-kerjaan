<header class="header navbar navbar-expand-lg bg-light navbar-sticky">
    <div class="container px-3">
        <a href="{{ route('index_home') }}" class="navbar-brand pe-3">
            @php
            use App\Models\Logo;
            $logo = Logo::first();
            @endphp
            <img src="{{ Storage::url($logo->logo) }}" width="47" alt="Silicon">
            {{ $logo->nama }}
        </a>
        <style>
            .offcanvas {
                margin-left: -100px;
            }
        </style>
        <div id="navbarNav" class="offcanvas offcanvas-end">
            <div class="offcanvas-header border-bottom">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <style>
                .perubahan {
                    margin-left: 550px;
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
                    <li
                        class="nav-item {{ request()->is('profile') || request()->is('profil-pencarian-data-pegawai') ? 'active' : '' }}">
                        <a href="{{ route('profile_home') }}" class="nav-link">Profile</a>
                    </li>
                    <li
                        class="nav-item {{ request()->is('dataset') || request()->is('dataset/details/*') || request()->is('dataset/pencacrian-data') || request()->is('dataset/filter-tahun-dataset/*') ? 'active' : '' }}">
                        <a href="{{ route('index_dataset_home') }}" class="nav-link">Dataset</a>
                    </li>
                    <li
                        class="nav-item {{ request()->is('infografis') || request()->is('infografis/*') ? 'active' : '' }}">
                        <a href="{{ route('index_infografis') }}" class="nav-link">Infografis</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle {{ request()->is('simpas') || request()->is('permintaan-data') || request()->is('permintaan-data/guest') || request()->is('permohonan-informasi-publik/form-pengaduan-publik') || request()->is('lapor') || request()->is('keran-sulsel') || request()->is('permohonan-keberatan-informasi-publik') || request()->is('permohonan-informasi-publik') ? 'active' : '' }}"
                            data-bs-toggle="dropdown">Layanan</a>
                        <ul class="dropdown-menu">
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
                            @guest
                            <li>
                                <a href="{{ route('permintaan_home_guest') }}"
                                    class="dropdown-item {{ request()->is('permintaan-data/guest') ? 'active' : '' }}">Permintaan
                                    Data</a>
                            </li>
                            @endguest

                            @auth
                            <li>
                                <a href="{{ route('permintaan_data_home') }}"
                                    class="dropdown-item {{ request()->is('permintaan-data') ? 'active' : '' }}">Permintaan
                                    Data</a>
                            </li>
                            @endauth
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
                                <a href="{{ route('rekapitulasi_home') }}"
                                    class="dropdown-item {{ request()->is('rekapitulasi-permohonan-informasi-publik') || request()->is('rekapitulasi-permohonan-informasi-publik/filter-tahun') ? 'active' : '' }}">Rekapitulasi
                                    Informasi Publik</a>
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