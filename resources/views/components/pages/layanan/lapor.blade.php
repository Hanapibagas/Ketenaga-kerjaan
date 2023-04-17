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
        <li class="breadcrumb-item active" aria-current="page">LAPOR!.</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>LAPOR!.</h1>
</section>

<section class="jarallax" data-jarallax data-speed="0.4">
    <div class="jarallax-img" style="background-image: url({{ asset('assets/frontend/img/profile/lapor.png') }});">
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
                <p class="fs-lg mb-0">Pengelolaan pengaduan pelayanan publik di setiap organisasi penyelenggara di
                    Indonesia belum terkelola secara efektif dan terintegrasi. Masing-masing organisasi penyelenggara
                    mengelola pengaduan secara parsial dan tidak terkoordinir dengan baik. Akibatnya terjadi duplikasi
                    penanganan pengaduan, atau bahkan bisa terjadi suatu pengaduan tidak ditangani oleh satupun
                    organisasi penyelenggara, dengan alasan pengaduan bukan kewenangannya. Oleh karena itu, untuk
                    mencapai visi dalam good governance maka perlu untuk mengintegrasikan sistem pengelolaan pengaduan
                    pelayanan publik dalam satu pintu. Tujuannya, masyarakat memiliki satu saluran pengaduan secara
                    Nasional. <br><br>

                    Untuk itu Pemerintah Republik Indonesia membentuk Sistem Pengelolaan Pengaduan Pelayanan Publik
                    Nasional (SP4N) - Layanan Aspirasi dan Pengaduan Online Rakyat (LAPOR!) adalah layanan penyampaian
                    semua aspirasi dan pengaduan masyarakat Indonesia melalui beberapa kanal pengaduan yaitu website
                    www.lapor.go.id, SMS 1708 (Telkomsel, Indosat, Three), Twitter @lapor1708 serta aplikasi mobile
                    (Android dan iOS). Lembaga pengelola SP4N-LAPOR! adalah Kementerian Pendayagunaan Aparatur Negara
                    dan Reformasi Birokrasi (Kementerian PANRB) sebagai Pembina Pelayanan Publik, Kantor Staf Presiden
                    (KSP) sebagai Pengawas Program Prioritas Nasional dan Ombudsman Republik Indonesia sebagai Pengawas
                    Pelayanan Publik. LAPOR! telah ditetapkan sebagai Sistem Pengelolaan Pengaduan Pelayanan Publik
                    Nasional (SP4N) berdasarkan Peraturan Presiden Nomor 76 Tahun 2013 dan Peraturan Menteri
                    Pendayagunaan Aparatur Negara dan Reformasi Birokrasi Nomor 3 Tahun 2015.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection