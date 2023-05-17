@extends('layouts.app')

@section('title')
Dataset
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Dataset</li>
    </ol>
</nav>

<section class="container mb-5 pt-lg-5" id="benefits">
    <h2 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4">Apa yang ingin anda lakukan ?</h2>
    <div class="swiper pt-3" data-swiper-options='{
        "slidesPerView": 1,
        "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
        },
        "breakpoints": {
            "500": {
            "slidesPerView": 2
            },
            "991": {
            "slidesPerView": 3
            }
        }
        }'>
        <div class="swiper-wrapper">
            <style>
                .gambar {
                    width: 60%
                }

                .sumber {
                    margin-left: 16%
                }

                @media screen and (max-width: 992px) {
                    .sumber {
                        margin-left: -1%
                    }
                }
            </style>
            @guest
            <div class="swiper-slide border-end-lg px-3 sumber">
                <div class=" text-center">
                    <a href="">
                        <img class="gambar" src="{{ asset('assets/frontend/img/data/permintaan-data.b84e96b3.png') }}"
                            width="48" alt="Team icon" class="d-block mb-4 mx-auto">
                    </a>
                    <h4 class="mb-2 pb-1">Permintaan Data</h4>
                </div>
            </div>
            @endguest
            @auth
            <div class="swiper-slide border-end-lg px-3">
                <div class="text-center">
                    <a href="">
                        <img class="gambar" src="{{ asset('assets/frontend/img/data/permintaan-data.b84e96b3.png') }}"
                            width="48" alt="Team icon" class="d-block mb-4 mx-auto">
                    </a>
                    <h4 class="mb-2 pb-1">Permintaan Data</h4>
                </div>
            </div>
            @endauth
            <div class="swiper-slide border-end-lg px-3">
                <div class="text-center">
                    <a href="">
                        <img class="gambar" src="{{ asset('assets/frontend/img/data/download (1).png') }}" width="48"
                            alt="Award icon" class="d-block mb-4 mx-auto">
                    </a>
                    <h4 class="mb-2 pb-1">Unduh Data</h4>
                </div>
            </div>
        </div>
        <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
    </div>
</section>

@endsection