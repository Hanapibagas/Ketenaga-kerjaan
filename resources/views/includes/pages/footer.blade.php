<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-5 col-md-6">
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="{{ asset('assets/frontend/img/logo.png') }}" width="47" alt="Silicon">
                    KETENAGAKERJAAN
                </div>
                <p class="fs-sm pb-lg-3 mb-4" style="text-indent: 20px">Disnakertrans Prov Sulsel
                    Satu Data Ketenagakerjaan dan Ketransmigrasian dimaksud untuk mengatur penyelenggaraan tata kelola
                    data yang dihasilkan oleh Dinas Tenaga Kerja dan Transmigrasi Provinsi Sulawesi Selatan dan Dinas
                    yang diberikan wewenang dalam urusan ketenagakerjaan dan ketransmigrasian di Kabupaten/Kota agar
                    pengelolaan dan pengembangan data memenuhi prinsip-prinsip Satu Data Indonesia.
                    Sementara itu, penyerbarluasan informasi dan dokumentasi dimaksud untuk mengatur penyelenggaraan
                    keterbukaan informasi publik sesuai amanat Undang-Undang No. 14 tahun 2008.
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
                <p class="fs-sm pb-lg-3 mb-4 tanda" style="text-indent: 20px">Jalan Perintis Kemerdekaan Nomor 69 KM.
                    12, Kecamatan Tamalanrea, Kota Makassar, Sulawesi Selatan 90245
                </p>
                <div class="sosmed-icon flex flex-row mt-7" style="margin-top: -20px;">
                    <a class="mr-9" href="mailto: disnakertrans@sulselprov.go.id" target="_blank"
                        rel="noopener noreferrer">
                        <img style="width: 30px;" src="{{ asset('assets/frontend/img/mail.png') }}" alt="">
                    </a>
                    <a style="margin-left: 9px;" class="mr-9" href="https://www.instagram.com/sulselprov.disnakertrans/"
                        target="_blank" rel="noopener noreferrer">
                        <img style="width: 30px;" src="{{ asset('assets/frontend/img/instagram.png') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
        <p class="nav d-block fs-xs text-center text-md-start pb-2 pb-lg-0 mb-0">
            &copy; All rights reserved. Made by
            <a class="nav-link d-inline-block p-0" href="https://github.com/Hanapibagas" target="_blank" rel="noopener">
                PT. LINY JAYA INFORMATIKA</a>
        </p>
    </div>
</footer>