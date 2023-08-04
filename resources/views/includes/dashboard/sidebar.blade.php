<div class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="{{ route('index_home') }}">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" style="width: 30px" alt="logo" />
            <h3 style="font-size: 18px; margin-top: 10px">Dashboard Ketenagakerjaan {{ Auth::user()->roles }}</h3>
        </a>
    </div>
    <nav class="sidebar-nav">
        <ul>
            <li class="nav-item {{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="{{ route('index_dashboard') }}">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22">
                            <path
                                d="M17.4167 4.58333V6.41667H13.75V4.58333H17.4167ZM8.25 4.58333V10.0833H4.58333V4.58333H8.25ZM17.4167 11.9167V17.4167H13.75V11.9167H17.4167ZM8.25 15.5833V17.4167H4.58333V15.5833H8.25ZM19.25 2.75H11.9167V8.25H19.25V2.75ZM10.0833 2.75H2.75V11.9167H10.0833V2.75ZM19.25 10.0833H11.9167V19.25H19.25V10.0833ZM10.0833 13.75H2.75V19.25H10.0833V13.75Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Dashboard
                    </span>
                </a>
            </li>
            <span class="divider">
                <hr />
            </span>
            <li
                class="nav-item nav-item-has-children {{ request()->is('sertiap-saat-oprator') || request()->is('sertiap-saat-oprator/create') || request()->is('sertiap-saat-oprator/update/*') || request()->is('serta-merta-oprator') || request()->is('serta-merta-oprator/create') || request()->is('serta-merta-oprator/update/*') || request()->is('berkala-oprator') || request()->is('berkala-oprator/create') || request()->is('berkala-oprator/update/*') ? 'active' : '' }}">
                <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                    aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                        </svg>
                    </span>
                    <span class="text">Informasi Publik</span>
                </a>
                <ul id="ddmenu_2" class="collapse dropdown-nav">
                    <li>
                        <a href="{{ route('index_berkala') }}"
                            class="{{ request()->is('berkala-oprator') || request()->is('berkala-oprator/create') || request()->is('berkala-oprator/update/*') ? 'active' : '' }}">
                            Berkala </a>
                    </li>
                    <li>
                        <a href="{{ route('index_serta_merta') }}"
                            class="{{ request()->is('serta-merta-oprator') || request()->is('serta-merta-oprator/create') || request()->is('serta-merta-oprator/update/*') ? 'active' : '' }}">Serta
                            Merta </a>
                    </li>
                    <li>
                        <a href="{{ route('index_setiap_saat') }}"
                            class="{{ request()->is('sertiap-saat-oprator') || request()->is('sertiap-saat-oprator/create') || request()->is('sertiap-saat-oprator/update/*') ? 'active' : '' }}">Tersedia
                            Setiap Saat </a>
                    </li>
                </ul>
            </li>
            <span class="divider">
                <hr />
            </span>
            <li
                class="nav-item {{ request()->is('infografis-oprator') || request()->is('infografis-oprator/create') || request()->is('infografis-oprator/update/*')  ? 'active' : '' }}">
                <a href="{{ route('dashboard_infografis') }}">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Infografis
                    </span>
                </a>
            </li>
            {{-- <li
                class="nav-item {{ request()->is('berita-oprator') || request()->is('berita-oprator/create') || request()->is('berita-oprator/update/*') ? 'active' : '' }}">
                <a href="{{ route('dashboard_berita') }}">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Berita
                    </span>
                </a>
            </li> --}}
            <li
                class="nav-item {{ request()->is('publikasi-oprator') || request()->is('publikasi-oprator/create') || request()->is('publikasi-oprator/*') ? 'active' : '' }}">
                <a href="{{ route('dashboard_publikasi') }}">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Publikasi
                    </span>
                </a>
            </li>
            {{-- <li
                class="nav-item {{ request()->is('pengumuman-oprator') || request()->is('pengumuman-oprator/create') || request()->is('pengumuman-oprator/*') ? 'active' : '' }}">
                <a href="{{ route('index_pengumuman') }}">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Pengumuman
                    </span>
                </a>
            </li> --}}
            {{-- <li
                class="nav-item {{ request()->is('organisasi-oprator') || request()->is('organisasi-oprator/create') || request()->is('organisasi-oprator/*') ? 'active' : '' }}">
                <a href="{{ route('index_organisasi_admin') }}">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Struktur organisasi
                    </span>
                </a>
            </li> --}}
            <li
                class="nav-item {{ request()->is('staf-oprator') || request()->is('staf-oprator/create') || request()->is('staf-oprator/details/*') || request()->is('staf-oprator/update/*') ? 'active' : '' }}">
                <a href="{{ route('index_staf') }}">
                    <span class="icon">
                        <svg width="18" height="20" viewBox="0 0 18 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M16.3333 19.1666H1.66667C1.42355 19.1666 1.19039 19.07 1.01849 18.8981C0.846577 18.7262 0.75 18.493 0.75 18.2499V1.74992C0.75 1.5068 0.846577 1.27365 1.01849 1.10174C1.19039 0.929829 1.42355 0.833252 1.66667 0.833252H16.3333C16.5764 0.833252 16.8096 0.929829 16.9815 1.10174C17.1534 1.27365 17.25 1.5068 17.25 1.74992V18.2499C17.25 18.493 17.1534 18.7262 16.9815 18.8981C16.8096 19.07 16.5764 19.1666 16.3333 19.1666ZM15.4167 17.3333V2.66659H2.58333V17.3333H15.4167ZM5.33333 5.41658H12.6667V7.24992H5.33333V5.41658ZM5.33333 9.08325H12.6667V10.9166H5.33333V9.08325ZM5.33333 12.7499H9.91667V14.5833H5.33333V12.7499Z" />
                        </svg>
                    </span>
                    <span class="text">
                        Data Pegawai
                    </span>
                </a>
            </li>
            <span class="divider">
                <hr />
            </span>
            <li
                class="nav-item nav-item-has-children {{ request()->is('setting-logo') || request()->is('setting-footer') || request()->is('setting-profile-dinas') || request()->is('setting-prakata-kepala-dinas') || request()->is('setting-banner') ? 'active' : '' }}">
                <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_5"
                    aria-controls="ddmenu_5" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M3.66675 4.58325V16.4999H19.2501V4.58325H3.66675ZM5.50008 14.6666V6.41659H8.25008V14.6666H5.50008ZM10.0834 14.6666V11.4583H12.8334V14.6666H10.0834ZM17.4167 14.6666H14.6667V11.4583H17.4167V14.6666ZM10.0834 9.62492V6.41659H17.4167V9.62492H10.0834Z" />
                        </svg>
                    </span>
                    <span class="text"> Setting Web </span>
                </a>
                <ul id="ddmenu_5" class="collapse dropdown-nav">
                    <li>
                        <a class="{{ request()->is('setting-logo') ? 'active' : '' }}"
                            href="{{ route('get.IndexLogo') }}"> Logo </a>
                    </li>
                    <li>
                        <a class="{{ request()->is('setting-banner') ? 'active' : '' }}"
                            href="{{ route('get.IndexBanner') }}">Banner</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('setting-prakata-kepala-dinas') ? 'active' : '' }}"
                            href="{{ route('get.IndexPrakata') }}">Prakata kepala dinas</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('setting-profile-dinas') ? 'active' : '' }}"
                            href="{{ route('get.IndexProfile') }}">Profile</a>
                    </li>
                    <li>
                        <a class="{{ request()->is('setting-footer') ? 'active' : '' }}"
                            href="{{ route('get.IndexFooter') }}">Footer</a>
                    </li>
                </ul>
            </li>
            <span class="divider">
                <hr />
            </span>
        </ul>
    </nav>
</div>