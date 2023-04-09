@extends('layouts.app')

@section('title')
Berita
@endsection

@section('content')
<div class="container">
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('index_publikasi') }}">Publikasi</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Publikasi Details</li>
        </ol>
    </nav>

    <article class="card border-0 shadow-sm overflow-hidden mb-4" style="margin-top: 40px">
        <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                style="background-image: url({{ asset('assets/frontend/img/logo.png') }}); min-height: 15rem;">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        By: admin
                        <span class="fs-sm text-muted border-start ps-3 ms-3">05-01-2023</span>
                    </div>
                    <h3 class="h4">
                        Upah Minimum Provinsi Tahun 2023
                    </h3>
                    <p>
                        Mengawali tahun 2023, kami bagikan informasi mengenai Upah Minimum Provinsi (UMP) tahun 2023.
                        Perlu kalian ketahui UMP yang ditetapkan ini menggunakan formula yang diatur dalam Permenaker
                        Nomor 18 Tahun 2022 tentang Penetapan Upah Minimum Tahun 2023. Nilai upah minimum ini berlaku
                        efektif mulai 1 Januari 2023.
                        Ayo dilihat, berapa nilai upah minimum yang berlaku di wilayah kalian ...
                        Jangan lupa kunjungi Instagram kami @pusdatik.kemnaker untuk mendapatkan informasi
                        ketenagakerjaan lainnya.
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Assumenda, quae? Amet labore ad
                        dignissimos tempore, facilis voluptates praesentium iste eveniet impedit similique omnis
                        officia. Laboriosam, nostrum. Enim aut et nihil.
                    </p>
                    <hr class="my-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center text-muted">
                            <i class="bx bx-download fs-xl me-1"></i>
                            <a href="">download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection