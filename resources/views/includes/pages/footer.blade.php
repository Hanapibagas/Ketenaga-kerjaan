<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-4 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}" width="47" alt="Silicon">
                    KETENAGAKERJAAN
                </div>
                <p class="fs-sm pb-lg-3 mb-4">Jl. Perintis Kemerdekaan No. 69 KM. 12, Tamalanrea, Kec. Tamalanrea, Kota
                    Makassar, Sulawesi Selatan 90245. <a
                        href="mailto:disnakertrans@sulselprov.go.id">disnakertrans@sulselprov.go.id</a></p>
            </div>
            <div class="col-xl-6 col-lg-7 col-md-5 offset-xl-2 offset-md-1 pt-4 pt-md-1 pt-lg-0">
                <div id="footer-links" class="row">
                    <div class="col-lg-4">
                        <h6 class="mb-2">
                            <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                data-bs-toggle="collapse">Useful Links</a>
                        </h6>
                        <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#useful-links">
                            <ul class="nav flex-column pb-lg-1 mb-lg-3">
                                <li class="nav-item"><a href="{{ route('index_home') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Beranda</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('profile_home') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Profile
                                    </a>
                                </li>
                                <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">PPID</a>
                                </li>
                                <li class="nav-item"><a href="{{ route('index_dataset') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Dataset</a>
                                </li>
                                <li class="nav-item"><a href="#"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Layanan</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <h6 class="mb-2">
                            <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                data-bs-toggle="collapse">Socials</a>
                        </h6>
                        <div id="social-links" class="collapse d-lg-block" data-bs-parent="#social-links">
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="{{ route('index_infografis') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Infografis</a></li>
                                <li class="nav-item"><a href="{{ route('index_berita') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Berita</a></li>
                                <li class="nav-item"><a href="{{ route('index_informasi_public') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Informasi</a></li>
                                <li class="nav-item"><a href="{{ route('index_publikasi') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Publikasi</a></li>
                                <li class="nav-item"><a href="{{ route('pengumuman') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Pengumuman</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-3">
                        <h6 class="mb-2">
                            <a href="#social-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                                data-bs-toggle="collapse">Socials</a>
                        </h6>
                        <div id="social-links" class="collapse d-lg-block" data-bs-parent="#social-links">
                            <ul class="nav flex-column mb-2 mb-lg-0">
                                <li class="nav-item"><a href="{{ route('login') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Login</a></li>
                                <li class="nav-item"><a href="{{ route('register') }}"
                                        class="nav-link d-inline-block px-0 pt-1 pb-2">Register</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
            &copy; All rights reserved. Made by
            <a class="nav-link d-inline-block p-0" href="https://github.com/Hanapibagas" target="_blank" rel="noopener">
                Not Found 404</a>
        </p>
    </div>
</footer>