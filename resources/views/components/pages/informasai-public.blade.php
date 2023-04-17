@extends('layouts.app')

@section('title')
Informamsi Public
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Informasi Publik</li>
    </ol>
</nav>

<div class="container pb-4 mb-2 mb-lg-3">
    <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
        <div class="col-lg-5 col-md-4">
            <h1 class="mb-2 mb-md-0">Informasi Berkala</h1>
        </div>
        <div class="col-lg-7 col-md-8">
            <form class="row gy-2">
                <div class="col-lg-7 col-sm-6">
                    <style>
                        .pencarian {
                            margin-left: 310px;
                        }

                        @media screen and (max-width: 767px) {
                            .pencarian {
                                margin-left: 2px;
                            }
                        }
                    </style>
                    <div class="input-group pencarian">
                        <input type="text" class="form-control pe-5 rounded" placeholder="Search the blog...">
                        <i
                            class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">
        <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
                <div class="card-body pb-4">
                    <h3 class="h5 mb-0">
                        <a>Informasi tentang kedudukan atau domisili, alamat lengkap, ruang
                            lingkup kegiatan, maksud dan tujuan, tugas dan fungsi Dinas Tenaga Kerja dan Transmigrasi
                            Provinsi Sulawesi Selatan</a>
                    </h3>
                </div>
                <div class="card-footer py-4">
                    <i class="bx bx-download fs-xl me-1"></i>
                    <a href="" target="_blank">download</a>
                </div>
            </article>
        </div>
        <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
                <div class="card-body pb-4">
                    <h3 class="h5 mb-0">
                        <a>Cascading Dinas Tenaga Kerja dan Transmigrasi Provinsi Sulawesi Selatan</a>
                    </h3>
                </div>
                <div class="card-footer py-4">
                    <i class="bx bx-download fs-xl me-1"></i>
                    <a href="" target="_blank">download</a>
                </div>
            </article>
        </div>
    </div>
</div>

<div class="container pb-4 mb-2 mb-lg-3">
    <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
        <div class="col-lg-5 col-md-4">
            <h1 class="mb-2 mb-md-0">Informasi Serta Merta</h1>
        </div>
        <div class="col-lg-7 col-md-8">
            <form class="row gy-2">
                <div class="col-lg-7 col-sm-6">
                    <style>
                        .pencarian {
                            margin-left: 310px;
                        }

                        @media screen and (max-width: 767px) {
                            .pencarian {
                                margin-left: 2px;
                            }
                        }
                    </style>
                    <div class="input-group pencarian">
                        <input type="text" class="form-control pe-5 rounded" placeholder="Search the blog...">
                        <i
                            class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">

        <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
                <div class="card-body pb-4">
                    <h3 class="h5 mb-0">
                        <a>5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                    </h3>
                </div>
                <div class="card-footer py-4">
                    <i class="bx bx-download fs-xl me-1"></i>
                    <a href="" target="_blank">download</a>
                </div>
            </article>
        </div>
    </div>
</div>

<div class="container pb-4 mb-2 mb-lg-3">
    <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
        <div class="col-lg-5 col-md-4">
            <h1 class="mb-2 mb-md-0">Informasi Tersedia Setiap Saat</h1>
        </div>
        <div class="col-lg-7 col-md-8">
            <form class="row gy-2">
                <div class="col-lg-7 col-sm-6">
                    <style>
                        .pencarian {
                            margin-left: 310px;
                        }

                        @media screen and (max-width: 767px) {
                            .pencarian {
                                margin-left: 2px;
                            }
                        }
                    </style>
                    <div class="input-group pencarian">
                        <input type="text" class="form-control pe-5 rounded" placeholder="Search the blog...">
                        <i
                            class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">

        <div class="col pb-3">
            <article class="card border-0 shadow-sm h-100">
                <div class="card-body pb-4">
                    <h3 class="h5 mb-0">
                        <a href="blog-single.html">5 Bad Landing Page Examples &amp; How We Would Fix Them</a>
                    </h3>
                </div>
                <div class="card-footer py-4">
                    <i class="bx bx-download fs-xl me-1"></i>
                    <a href="" target="_blank">download</a>
                </div>
            </article>
        </div>
    </div>
</div>
@endsection

@push('js')
@endpush