<footer class="footer pt-5 pb-4 pb-lg-5 mt-2 mt-md-0">
    <div class="container pt-lg-4">
        <div class="row pb-5">
            <div class="col-lg-5 col-md-6">
                @php
                use App\Models\Logo;
                use App\Models\Footer;
                $logo = Logo::first();
                $footer = Footer::first();
                @endphp
                <div class="navbar-brand text-dark p-0 me-0 mb-3 mb-lg-4">
                    <img src="{{ Storage::url($logo->logo) }}" width="47" alt="Silicon">
                    {{ $logo->nama }}
                </div>
                <p class="fs-sm pb-lg-3 mb-4" style="text-indent: 20px">
                    {{ $footer->nama }}
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
            {{-- <div class="col-lg-5 col-md-6">
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
            </div> --}}
            <div class="col-lg-5 col-md-6">
                <style>
                    .tanda {
                        margin-top: 75px
                    }

                    .tanda img {
                        max-width: 25px;
                        margin-top: 10px;
                    }

                    .email {
                        margin-top: 18px;
                    }

                    .email img {
                        max-width: 30px;
                    }

                    .ig {
                        margin-top: 14px;
                    }

                    .ig img {
                        max-width: 30px;
                        margin-top: 10px;
                    }

                    .tulisan {
                        margin-top: 10px;
                    }

                    @media screen and (max-width: 992px) {
                        .tanda {
                            margin-top: 10px
                        }
                    }
                </style>
                <div class="row tanda">
                    <div class="col-1">
                        <img src="{{ asset('assets/frontend/img/lokasi.png') }}" alt="" srcset="">
                    </div>
                    <div class="col-11">
                        {{ $footer->alamat }}
                    </div>
                </div>
                <div class="row email">
                    <div class="col-1">
                        <img src="{{ asset('assets/frontend/img/email.png') }}" alt="" srcset="">
                    </div>
                    <div class="col-11">
                        <a style="text-decoration: none; color: grey" href="mailto: {{ $footer->link_email }}"
                            target="_blank">{{ $footer->email }}</a>
                    </div>
                </div>
                <div class="row ig">
                    <div class="col-1">
                        <img src="{{ asset('assets/frontend/img/ig.png') }}" alt="" srcset="">
                    </div>
                    <div class="col-11 tulisan">
                        <a style="text-decoration: none; color: grey" href="{{ $footer->link_intagram }}"
                            target="_blank">{{
                            $footer->instagram }}</a>
                    </div>
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