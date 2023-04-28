@extends('layouts.app')

@section('title')
Layanan
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">SIMPAS</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>SIMPAS.</h1>
</section>

<section class="jarallax" data-jarallax data-speed="0.4">
    <div class="jarallax-img" style="background-image: url({{ asset('assets/frontend/img/profile/1659515771.jpg') }});">
    </div>
    <div class="d-none d-xxl-block" style="height: 800px;"></div>
    <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
    <div class="d-md-none" style="height: 400px;"></div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <h2 class="h1 mb-4">About</h2>
                <p class="fs-lg mb-0" style="text-indent: 20px">SIMPAS kepanjangan dari Sistem Informasi Pengawasan
                    Ketenagakerjaan. Aplikasi web ini merupakan aplikasi pengawasan ketenagakerjaan di Provinsi Sulawesi
                    Selatan.<br><br>
                    Kunjungi Link ( <a href="https://disnakertrans.sulselprov.go.id/simpas" target="_blank">SIMPAS</a> )
                </p>
            </div>
        </div>
    </div>
</section>
@endsection