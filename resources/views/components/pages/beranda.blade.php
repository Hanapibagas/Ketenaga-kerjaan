@extends('layouts.app')

@section('title')
Beranda
@endsection

@section('content')
<style>
    .test {
        background-repeat: no-repeat;
        background-position: top left;
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-side-data.24d7ba5a.png');
    }

    .biru {
        background-position: top right;
        background-repeat: no-repeat;
        background-image: url('assets/frontend/img/data/bg-header-data.14a37054.png');
    }

    .helo {
        background-position: top right;
        background-repeat: no-repeat;
        background-image: url('assets/frontend/img/data/bg-side-info.1c2950dc.png');
    }
</style>

<section class="jarallax position-relative d-flex align-items-center min-vh-100 mb-5 py-lg-5 pt-5 trans biru">
    <div class="container position-relative zindex-5 py-5">
        <div class="row justify-content-md-start justify-content-center">
            <div
                class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
                <div class="mb-md-5 pb-xl-5 mb-4">
                    <h3 class="display-2 mb-md-5 mb-3 pb-3">
                        Welcome To Website <span class="text-gradient-primary">Disnakertrans</span>
                        Prov. SulSel
                    </h3>
                    <style>
                        form {
                            width: 100%;
                            max-width: 790px;
                            padding-top: 24vh;
                            margin-top: -15%
                        }

                        form .inner-form {
                            display: -ms-flexbox;
                            display: flex;
                            width: 100%;
                            -ms-flex-pack: justify;
                            justify-content: space-between;
                            -ms-flex-align: center;
                            align-items: center;
                            box-shadow: 0px 8px 20px 0px rgba(0, 0, 0, 0.15);
                            border-radius: 34px;
                            overflow: hidden;
                            margin-bottom: 30px;
                        }

                        form .inner-form .input-field {
                            height: 68px;
                        }

                        form .inner-form .input-field input {
                            height: 100%;
                            background: transparent;
                            border: 0;
                            display: block;
                            width: 100%;
                            padding: 10px 0;
                            font-size: 16px;
                            color: #000;
                        }

                        form .inner-form .input-field input.placeholder {
                            color: #222;
                            font-size: 16px;
                        }

                        form .inner-form .input-field input:-moz-placeholder {
                            color: #222;
                            font-size: 16px;
                        }

                        form .inner-form .input-field input::-webkit-input-placeholder {
                            color: #222;
                            font-size: 16px;
                        }

                        form .inner-form .input-field input:hover,
                        form .inner-form .input-field input:focus {
                            box-shadow: none;
                            outline: 0;
                        }

                        form .inner-form .input-field.first-wrap {
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-align: center;
                            align-items: center;
                            background: #d9f1e3;
                        }

                        form .inner-form .input-field.first-wrap input {
                            -ms-flex-positive: 1;
                            flex-grow: 1;
                        }

                        form .inner-form .input-field.first-wrap .svg-wrapper {
                            min-width: 80px;
                            display: -ms-flexbox;
                            display: flex;
                            -ms-flex-pack: center;
                            justify-content: center;
                            -ms-flex-align: center;
                            align-items: center;
                        }

                        form .inner-form .input-field.first-wrap svg {
                            width: 36px;
                            height: 36px;
                            fill: #222;
                        }

                        form .inner-form .input-field.second-wrap {
                            min-width: 216px;
                        }

                        form .inner-form .input-field.second-wrap .btn-search {
                            height: 100%;
                            width: 100%;
                            white-space: nowrap;
                            font-size: 16px;
                            color: #fff;
                            border: 0;
                            cursor: pointer;
                            position: relative;
                            z-index: 0;
                            background: #003dad;
                            transition: all .2s ease-out, color .2s ease-out;
                            font-weight: 300;
                        }

                        form .inner-form .input-field.second-wrap .btn-search:hover {
                            background: #013594;
                        }

                        form .inner-form .input-field.second-wrap .btn-search:focus {
                            outline: 0;
                            box-shadow: none;
                        }

                        form .info {
                            font-size: 15px;
                            color: #ccc;
                            padding-left: 26px;
                        }

                        @media screen and (max-width: 992px) {
                            form {
                                margin-top: -40%
                            }

                            form .inner-form .input-field {
                                height: 50px;
                            }
                        }

                        @media screen and (max-width: 767px) {
                            form {
                                margin-top: -40%
                            }

                            form .inner-form .input-field.first-wrap .svg-wrapper {
                                min-width: 40px;
                                display: -ms-flexbox;
                                display: flex;
                                -ms-flex-pack: center;
                                justify-content: center;
                                -ms-flex-align: center;
                                align-items: center;
                                padding: 0 10px;
                            }

                            form .inner-form .input-field.first-wrap svg {
                                width: 26px;
                                height: 26px;
                                fill: #222;
                            }

                            form .inner-form .input-field.second-wrap {
                                min-width: 100px;
                            }

                            form .inner-form .input-field.second-wrap .btn-search {
                                font-size: 13px;
                            }
                        }
                    </style>
                    <div class="d-md-flex align-items-md-start">
                        <form>
                            <div class="inner-form">
                                <div class="input-field first-wrap">
                                    <div class="svg-wrapper">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                            viewBox="0 0 24 24">
                                            <path
                                                d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z">
                                            </path>
                                        </svg>
                                    </div>
                                    <input id="search" type="text" placeholder="Kata kunci pencari data ..." />
                                </div>
                                <div class="input-field second-wrap">
                                    <button class="btn-search" type="button">SEARCH</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div
                    class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
                    <a href="#benefits" data-scroll data-scroll-offset="100"
                        class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3">
                        <i class="bx bx-chevron-down"></i>
                    </a>
                    <span class="fs-sm">Discover more</span>
                </div>
            </div>

            <div class="col-sm-6 col-sm-6 col-9 order-md-2 order-1">
                <img src="{{ asset('assets/frontend/img/logo.png') }}"
                    style="width: 60%; margin-left: 26%; margin-top: " alt="" srcset="">
            </div>
        </div>
    </div>
</section>

<div class="test">
    <section class="container pb-4 pb-lg-5 mb-3" id="benefits">
        <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3">
            <h2 class="mb-0">Slide foto</h2>

            <div class="d-md-flex d-none ms-4">
                <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2">
                    <i class="bx bx-chevron-left"></i>
                </button>
                <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2">
                    <i class="bx bx-chevron-right"></i>
                </button>
            </div>
        </div>
        <div class="swiper mx-n2" data-swiper-options='{
                    "slidesPerView": 2,
                    "navigation": {
                        "prevEl": "#prev-brand",
                        "nextEl": "#next-brand"
                    },
                    "loop": true,
                    "pagination": {
                        "el": ".swiper-pagination",
                        "clickable": true
                    },
                    "breakpoints": {
                        "500": {
                        "slidesPerView": 3,
                        "spaceBetween": 8
                        },
                        "650": {
                        "slidesPerView": 4,
                        "spaceBetween": 8
                        },
                        "900": {
                        "slidesPerView": 5,
                        "spaceBetween": 8
                        },
                        "1100": {
                        "slidesPerView": 6,
                        "spaceBetween": 8
                        }
                    }
                    }'>
            <div class="swiper-wrapper">
                @foreach ( $berita as $data )
                <div class="swiper-slide py-3">
                    <a class="card card-body card-hover px-2 mx-2">
                        <img src="{{ Storage::url($data->gambar) }}" class="d-block mx-auto my-2" width="154"
                            alt="Brand">
                    </a>
                </div>
                @endforeach
            </div>
            <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
        </div>
    </section>
</div>

<div class="helo">
    <section class="container mb-5 pt-2 pb-3 py-md-4 py-lg-5">
        <h2 class="h1 pb-2 pb-lg-0 mb-4 mb-lg-5 text-center">Prakata dari Kepala Dinas</h2>
        <div class="row">
            <div class="col-md-8">
                <div class="card border-0 shadow-sm p-4 p-xxl-5 mb-4 me-xxl-4">
                    <div class="pb-4 mb-2">
                        <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                            <i class="bx bxs-quote-left"></i>
                        </span>
                    </div>
                    <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                                "spaceBetween": 24,
                                "pager": true,
                                "tabs": true,
                                "navigation": {
                                "prevEl": ".page-prev",
                                "nextEl": ".page-next"
                                }
                            }'>
                        <div class="swiper-wrapper">
                            <div class="swiper-slide h-auto" data-swiper-tab="#author-1">
                                <figure class="card h-100 position-relative border-0 bg-transparent">
                                    <blockquote class="card-body p-0 mb-0">
                                        <p class="fs-lg mb-0" style="text-indent: 20px">Website ini dibuat sebagai salah
                                            satu media informasi, agar
                                            masyarakat mendapatkan informasi yang cukup mengenai pelayanan perizinan,
                                            potensi daerah, peluang investasi, promosi, dan realisasi investasi sesuai
                                            tugas
                                            yang diamanahkan (Peraturan Gubernur No.50 Tahun 2021) tentang kedudukan,
                                            susunan organisasi, tugas, fungsi serta tata kerja perangkat daerah. Bahwa
                                            hak
                                            memperoleh informasi merupakan hak asasi manusia dan keterbukaan informasi
                                            publik merupakan salah satu ciri negara demokratis yang berorientasi pada
                                            peningkatan kualitas kinerja organisasi yang berkualitas, profesional, dan
                                            tata
                                            kelola pemerintahan yang berbasis elektronik. Dinas Tenaga Kerja dan
                                            Transmigrasi Provinsi Sulawesi Selatan, menyajikan data dan informasi serta
                                            pelayanan yang berkualitas, sehingga mendorong iklim investasi yang kondusif
                                            untuk pertumbuhan ekonomi dan kesejahteraan masyarakat. Dengan adanya
                                            website
                                            ini, kami menyampaikan terima kasih kepada seluruh Perangkat Daerah
                                            Pemerintah
                                            Provinsi Sulawesi Selatan, Pemerintah Kabupaten/Kota serta kepada seluruh
                                            stakeholder yang telah memberikan dukungan penuh terhadap keberadaan website
                                            www.disnaker.sulselprov.go.id. Terima kasih
                                        </p>
                                    </blockquote>
                                    <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                                        <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                                            <img src="{{ asset('assets/frontend/img/profile/kepala-dinas.jpg') }}"
                                                width="48" class="rounded-circle" alt="Ralph Edwards">
                                            <div class="ps-3">
                                                <h5 class="fw-semibold lh-base mb-0">Ardiles Saggaf, S.STP, M.Si</h5>
                                                <span class="fs-sm text-muted">Kepala Dinas Tenaga Kerja dan
                                                    Transmigrasi
                                                    Pemerintah Provinsi Sulawesi Selatan</span>
                                            </div>
                                        </div>
                                    </figcaption>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 d-none d-md-block">
                <div class="swiper-tabs">
                    <div id="author-1" class="card bg-transparent border-0 swiper-tab active">
                        <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center"
                            style="background-image: url({{ asset('assets/frontend/img/profile/kepala-dinas.jpg') }});">
                        </div>
                        <div class="card-footer d-flex w-100 border-0 pb-0">
                            <div class="border-start-xl ps-xl-4 ms-xl-2">
                                <h5 class="fw-semibold lh-base mb-0">Ardiles Saggaf, S.STP, M.Si</h5>
                                <span class="fs-sm text-muted">Kepala Dinas Tenaga Kerja dan Transmigrasi Pemerintah
                                    Provinsi Sulawesi Selatan</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection