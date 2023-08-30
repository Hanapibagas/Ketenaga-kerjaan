@extends('layouts.app')

@section('title')
Layanan
@endsection

@section('content')
<style>
    .test {
        background-repeat: no-repeat;
        background-position: top left;
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-side-data.24d7ba5a.png');
    }

    .helo {
        background-position: top right;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-side-info.1c2950dc.png');
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Permohonan
            Informasi Publik</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Permohonan Informasi Publik.</h1>
</section>

<div class="test">
    <div class="container">
        <style>
            .gambar {
                width: 1000px;
                height: 350px;
                margin-left: 150px
            }

            @media screen and (max-width: 992px) {
                .gambar {
                    height: 200px
                }
            }
        </style>
        <img class="gambar" src="{{ Storage::url($informasi->gambar) }}" alt="">
    </div>
</div>

<div class="helo">
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h1 mb-4">About</h2>
                    <p class="fs-lg mb-0">
                        Jumlah permohonan informasi publik yang diterima: {{ $jumlahpemohon }}
                        <hr> <br>
                        {!! $informasi->deskripsi !!} <br><br>
                        Klik Link untuk mengajukan Permohonan Informasi Publik (<a
                            href="{{ route('form_permohonan_publik') }}">Klik di sini</a>)
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection