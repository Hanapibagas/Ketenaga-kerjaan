@extends('layouts.app')

@section('title')
Profile
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

    .about {
        margin-top: -100px;
    }

    @media screen and (max-width: 992px) {
        .about {
            margin-top: -60px;
        }
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Profil Dinas Tenaga Kerja dan Transmigrasi.</h1>
</section>

<div class="helo">
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row about">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h1 mb-4">About</h2>
                    <p class="fs-lg mb-0" style="text-indent: 20px">Dinas Tenaga Kerja dan Transmigrasi Provinsi
                        Sulawesi
                        Selatan adalah salah satu
                        unit kerja yang melaksanakan urusan pemerintahan bidang tenaga kerja dan urusan pemerintahan
                        bidang
                        transmigrasi sesuai dengan Peraturan Daerah Provinsi Sulawesi Selatan Nomor 11 Tahun 2019
                        tentang
                        Perubahan atas Peraturan Daerah Provinsi Sulawesi Selatan Nomor 10 Tahun 2016 tentang
                        Pembentukan
                        dan Susunan Perangkat Daerah yang kemudian ditindaklanjuti dengan : <br> <br>

                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 17 Tahun 2018</b> tentang Organisasi dan Tata Kerja
                        Unit
                        Pelaksana Teknis Balai Pelatihan Kerja pada Dinas Tenaga Kerja dan Transmigrasi Provinsi
                        Sulawesi
                        Selatan ; <br>
                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 18 Tahun 2018</b> tentang Organisasi dan Tata Kerja
                        Unit
                        Pelaksana Teknis Pengawasan Ketenagakerjaan dan Keselamatan Kerja Wilayah pada Dinas Tenaga
                        Kerja
                        dan Transmigrasi Provinsi Sulawesi Selatan ;<br>
                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 68 Tahun 2020</b> tentang Organisasi dan Tata Kerja
                        Unit
                        Layanan Terpadu Satu Atap Pekerja Migran Indonesia pada Dinas Tenaga Kerja dan Transmigrasi
                        Provinsi
                        Sulawesi Selatan ; dan <br>
                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 50 Tahun 2021</b> tentang Kedudukan, Susunan
                        Organisasi, Tugas
                        dan Fungsi serta Tata Kerja Perangkat Daerah Provinsi Sulawesi Selatan.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

<section class="container d-sm-flex align-items-center justify-content-between pb-4 mb-2 mb-lg-3">
    <h1 class="mb-sm-0 me-sm-3">Profile Kepala Dinas</h1>
</section>

<section class="bg-secondary py-5 test">
    <div class="container py-2 py-md-4 py-lg-5">
        <div class="row">
            <div class="col-md-4">
                <div class="position-relative d-flex h-100">
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center"
                        style="background-image: url({{ asset('assets/frontend/img/profile/kepala-dinas.jpg') }});">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
                    <span
                        class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                        <i class="bx bxs-quote-left"></i>
                    </span>
                    <blockquote class="card-body mt-2 mb-0">
                        <p class="fs-lg">Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius
                            mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt
                            imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat
                            tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris.</p>
                    </blockquote>
                    <figcaption class="card-footer border-0 d-sm-flex pt-0 mt-n3 mt-lg-0">
                        <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-4">
                            <img src="{{ asset('assets/frontend/img/profile/kepala-dinas.jpg') }}" width="48"
                                class="d-md-none rounded-circle" alt="Ralph Edwards">
                            <div class="ps-3 ps-md-0">
                                <h5 class="fw-semibold lh-base mb-0">Ardiles Saggaf, S.STP, M.Si</h5>
                                <span class="fs-sm text-muted">Kepala Dinas Tenaga Kerja dan Transmigrasi Pemerintah
                                    Provinsi Sulawesi Selatan</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>

<section class="container py-5 my-md-3 my-lg-5">
    <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
        <h1 class="me-3">Profile Pegawai</h1>
        <div class="position-relative" style="min-width: 300px;">
            <form action="{{ route('cari_data_pegarawai') }}">
                <input type="text" name="search" class="form-control pe-5" placeholder="Search courses">
                <i class="bx bx-search text-nav fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </form>
        </div>
    </div>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
        @foreach ( $profiles as $data )
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="https://ui-avatars.com/api/?name={{ $data->nama }} " class="rounded" style="width: 400px"
                        alt="Jenny Wilson">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="{{ $data->facebook }}"
                                class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="{{ $data->instagram }}"
                                class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                <i class="bx bxl-instagram"></i>
                            </a>
                            <a href="{{ $data->twitter }}"
                                class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2" style="text-transform:uppercase;">{{ $data->nama }}</h3>
                    <p class="fs-sm mb-0">{{ $data->tempat_melaksanakan_tugas }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection