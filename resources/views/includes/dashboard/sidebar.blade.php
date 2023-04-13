<div class="sidebar-nav-wrapper">
    <div class="navbar-logo">
        <a href="{{ route('index_home') }}">
            <img src="{{ asset('assets/frontend/img/logo.png') }}" style="width: 30px" alt="logo" />
            <h3 style="font-size: 18px; margin-top: 10px">Dashboard Ketenagakerjaan</h3>
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
                class="nav-item nav-item-has-children {{ request()->is('dashboard/unduhdata') || request()->is('dashboard/unduhdata/create') || request()->is('dashboard/unduhdata/update/*') ? 'active' : '' }}">
                <a href="#0" class="collapsed" data-bs-toggle="collapse" data-bs-target="#ddmenu_2"
                    aria-controls="ddmenu_2" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M12.8334 1.83325H5.50008C5.01385 1.83325 4.54754 2.02641 4.20372 2.37022C3.8599 2.71404 3.66675 3.18036 3.66675 3.66659V18.3333C3.66675 18.8195 3.8599 19.2858 4.20372 19.6296C4.54754 19.9734 5.01385 20.1666 5.50008 20.1666H16.5001C16.9863 20.1666 17.4526 19.9734 17.7964 19.6296C18.1403 19.2858 18.3334 18.8195 18.3334 18.3333V7.33325L12.8334 1.83325ZM16.5001 18.3333H5.50008V3.66659H11.9167V8.24992H16.5001V18.3333Z" />
                        </svg>
                    </span>
                    <span class="text">Dataset</span>
                </a>
                <ul id="ddmenu_2" class="collapse dropdown-nav">
                    <li>
                        <a href="projects.html">
                            <span class="text">
                                Form permintaan data
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('dashboard_unduhdata') }}">
                            <span class="text">
                                Form dataset
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="pricing.html">
                            <span class="text">
                                Form data integrasi
                            </span>
                        </a>
                    </li>
                </ul>
            </li>
            <span class="divider">
                <hr />
            </span>
            <li
                class="nav-item {{ request()->is('dashboard/infografis') || request()->is('dashboard/infografis/create') || request()->is('dashboard/infografis/update/*')  ? 'active' : '' }}">
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
            <li
                class="nav-item {{ request()->is('dashboard/berita') || request()->is('dashboard/berita/create') || request()->is('dashboard/berita/update/*') ? 'active' : '' }}">
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
            </li>
            <li
                class="nav-item {{ request()->is('dashboard/publikasi') || request()->is('dashboard/publikasi/create') || request()->is('dashboard/berita/publikasi/*') ? 'active' : '' }}">
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
            <span class="divider">
                <hr />
            </span>
        </ul>
    </nav>
</div>