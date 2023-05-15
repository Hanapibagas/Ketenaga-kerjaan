<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-5 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}" width="47" alt="Silicon">
                    KETENAGAKERJAAN
                </div>
                <p class="fs-sm pb-lg-3 mb-4" style="text-indent: 20px">Satu Data Ketenagakerjaan dan Data Transmigrasi
                    dimaksudkan untuk mengatur
                    penyelenggaraan
                    tatakelola Data Ketenagakerjaan Data Transmigrasi yang dihasilkan oleh Instansi Pusat dan Instansi
                    Daerah agar
                    pengelolaan dan pengembangan data ketenagakerjaan memenuhi prinsip-prinsip Satu Data Indonesia.
                </p>
            </div>
            <div class="col-lg-2 col-md-6">
                <style>
                    .list {
                        margin-top: 75px
                    }

                    @media screen and (max-width: 992px) {
                        .icon {
                            margin-top: -8px
                        }

                        .list {
                            margin-top: -8px
                        }
                    }
                </style>
                <h6 class="mb-2 icon">
                    <a href="#useful-links" class="d-block text-dark dropdown-toggle d-lg-none py-2"
                        data-bs-toggle="collapse">See More</a>
                </h6>
                <div id="useful-links" class="collapse d-lg-block" data-bs-parent="#useful-links">
                    <ul class="nav flex-column pb-lg-1 mb-lg-3 list">
                        <li class="nav-item"><a href="{{ route('index_home') }}"
                                class="nav-link d-inline-block px-0 pt-1 pb-2">Tentang</a>
                        </li>
                        <li class="nav-item"><a href="{{ route('profile_home') }}"
                                class="nav-link d-inline-block px-0 pt-1 pb-2">Peta
                            </a>
                        </li>
                        <li class="nav-item"><a href="#" class="nav-link d-inline-block px-0 pt-1 pb-2">Hubungi kami</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-5 col-md-6">
                <style>
                    .tanda {
                        margin-top: 75px
                    }

                    @media screen and (max-width: 992px) {
                        .tanda {
                            margin-top: 10px
                        }
                    }
                </style>
                <p class="fs-sm pb-lg-3 mb-4 tanda" style="text-indent: 20px">
                    Jl. Perintis Kemerdekaan No. 69 KM. 12, Tamalanrea, Kec. Tamalanrea, Kota Makassar, Sulawesi Selatan
                    90245.
                    <a href="mailto:disnakertrans@sulselprov.go.id">disnakertrans@sulselprov.go.id</a>
                </p>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
            &copy; All rights reserved. Made by
            <a class="nav-link d-inline-block p-0" href="https://github.com/Hanapibagas" target="_blank" rel="noopener">
                Next Up</a>
        </p>
    </div>
</footer>