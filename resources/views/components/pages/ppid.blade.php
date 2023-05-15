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
        <li class="breadcrumb-item">
            PPID
        </li>
        <li class="breadcrumb-item active" aria-current="page">Profile PPID</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Profil PPID.</h1>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <style>
                    .about {
                        margin-top: -110px
                    }

                    @media screen and (max-width: 992px) {
                        .about {
                            margin-top: -70px
                        }
                    }
                </style>
                <h2 class="h1 mb-4 about">About</h2>
                <p class="fs-lg mb-0" style="text-indent: 20px">PPID adalah kepanjangan dari Pejabat Pengelola Informasi
                    dan Dokumentasi, dimana PPID berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh
                    badan publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik. Dengan keberadaan
                    PPID maka masyarakat yang akan menyampaikan permohonan informasi lebih mudah dan tidak berbelit
                    karena dilayani lewat satu pintu. Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat
                    yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan
                    informasi di badan publik.
                </p>
            </div>
        </div>
    </div>
</section>
@endsection
