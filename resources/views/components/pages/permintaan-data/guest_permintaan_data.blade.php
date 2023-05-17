@extends('layouts.app')

@section('title')
Dataset
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

    .one {
        background-position: top left;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url('assets/frontend/img/data/ornamen-form.13c7b047.png');
    }

    .tulisan {
        font-size: 40px
    }

    .gambar {
        margin-top: -20px;
        width: 300px;
    }
</style>

<div class="one">
    <section class="container mb-5 pt-lg-5">
        <h3 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4 tulisan">Permintaan Data</h3>
        <div class="swiper pt-3">
            <div class="swiper-wrapper">
                <div class="swiper-slide px-2">
                    <div class="text-center">
                        <img class="gambar" src="{{ asset('assets/frontend/img/data/login-rafiki.8e1de502.svg') }}"
                            width="48" alt="Bulb icon" class="d-block mb-4 mx-auto">
                        <h4 class="mb-2 pb-1">Silahkan login terlebih dahulu untuk melanjutkan permintaan data</h4>
                        <a href="{{ route('login') }}"
                            class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Login</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
        </div>
    </section>
</div>
@endsection