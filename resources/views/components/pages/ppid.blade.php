@extends('layouts.app')

@section('title')
PPID
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">PPID</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Profil PPID.</h1>
</section>

<section class="jarallax" data-jarallax data-speed="0.4">
    <div class="jarallax-img" style="background-image: url({{ asset('assets/frontend/img/profile/1666316353.png') }});">
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
                <p class="fs-lg mb-0" style="text-indent: 20px">PPID adalah kepanjangan dari Pejabat Pengelola Informasi
                    dan Dokumentasi, dimana PPID berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh
                    badan publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik. Dengan keberadaan
                    PPID maka masyarakat yang akan menyampaikan permohonan informasi lebih mudah dan tidak berbelit
                    karena dilayani lewat satu pintu. Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat
                    yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan
                    informasi di badan publik. <br> <br>
                    <b>Pembina PPID</b> <br>
                    Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi Sulawesi Selatan
                    <hr>
                    <b>PPID Pembantu</b><br>
                    Sekretaris Dinas Tenaga Kerja dan Transmigrasi Provinsi Sulawesi Selatan
                    <hr>
                    <b>Admin</b><br>
                    Nurhalimah,S.Hum
                    <hr>
                    <b>Bidang Klasifikasi Informasi</b><br>
                    Bidang Pembinaan, Pelatihan, Pemagangan, Penempatan, dan Perluasan Kesempatan Kerja
                    Bidang Hubungan Industrial
                    Bidang Pengawasan Ketenagakerjaan
                    Bidang Ketransmigrasian
                    <hr>
                    <b>Bidang Layanan Informasi dan Dokumentasi</b><br>
                    Sub Bagian Program
                    Sub Bagian Umum, Kepegawaian, dan Hukum
                    Sub Bagian Keuangan
                    <hr>
                    <b>Bidang Fasilitasi Sengketa Informasi</b><br>
                    Sub Bagian Umum, Kepegawaian, dan Hukum
                    <hr>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection