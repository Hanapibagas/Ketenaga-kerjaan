@extends('layouts.app')

@section('title')
Profile
@endsection
{{--
@push('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
@endpush --}}

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
                        Sulawesi Selatan adalah salah satu unit kerja yang melaksanakan urusan pemerintahan bidang
                        tenaga kerja dan urusan pemerintahan bidang transmigrasi sesuai dengan Peraturan Daerah Provinsi
                        Sulawesi Selatan Nomor 11 Tahun 2019 tentang Perubahan atas Peraturan Daerah Provinsi Sulawesi
                        Selatan Nomor 10 Tahun 2016 tentang Pembentukan dan Susunan Perangkat Daerah yang kemudian
                        ditindaklanjuti dengan : <br> <br>

                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 17 Tahun 2018</b> tentang Organisasi dan Tata Kerja
                        Unit Pelaksana Teknis Balai Pelatihan Kerja pada Dinas Tenaga Kerja dan Transmigrasi Provinsi
                        Sulawesi Selatan ; <br>
                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 18 Tahun 2018</b> tentang Organisasi dan Tata Kerja
                        Unit Pelaksana Teknis Pengawasan Ketenagakerjaan dan Keselamatan Kerja Wilayah pada Dinas Tenaga
                        Kerja dan Transmigrasi Provinsi Sulawesi Selatan ;<br>
                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 68 Tahun 2020</b> tentang Organisasi dan Tata Kerja
                        Unit Layanan Terpadu Satu Atap Pekerja Migran Indonesia pada Dinas Tenaga Kerja dan Transmigrasi
                        Provinsi Sulawesi Selatan ; dan <br>
                        <b>Peraturan Gubernur Sulawesi Selatan Nomor 07 Tahun 2023</b> tentang Kedudukan, Susunan
                        Organisasi, Tugas dan Fungsi serta Tata Kerja Perangkat Daerah Provinsi Sulawesi Selatan.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- <section class="container d-sm-flex align-items-center justify-content-between pb-4 mb-2 mb-lg-3">
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
</section> --}}

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
                <div class="card-body text-center p-3">
                    <a type="button" data-toggle="modal" data-target="#exampleModal-{{ $data->id }}"
                        style="text-decoration: none">
                        <h3 class="fs-lg fw-semibold pt-1 mb-2" style="text-transform:uppercase;">{{ $data->nama }}</h3>
                        <p style="color: grey" class="fs-sm mb-0">{{ $data->tempat_melaksanakan_tugas }}</p>
                    </a>
                </div>
            </div>
        </div>
        @endforeach

        <!-- Modal -->
        @foreach ( $profiles as $data )
        <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" raria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-body" style="text-align: center">
                        <style>
                            .cardheader {
                                background: url('assets/frontend/img/card-bg.jpg');
                                background-size: cover;
                                height: 135px;
                            }
                        </style>
                        <div class="cardheader"></div>
                        <style>
                            .avatar {
                                position: relative;
                                top: -50px;
                                margin-bottom: -50px;
                            }
                        </style>
                        <div class="avatar">
                            <img style="width: 100px; height: 100px; max-width: 100px; max-height: 100px; border-radius: 50%; border: 5px solid rgba(255, 255, 255, .5)"
                                src="{{ asset('assets/frontend/img/unnamed.jpg') }}" alt="">
                        </div>
                        <div class="info">
                            <div class="title">Nama</div>
                            <div class="desc">Jabatan : </div>
                            <div class="desc">pangkat : </div>
                            <div class="desc">Pendidikan : </div>
                            <hr>
                            <div class="desc">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste aliquid blanditiis maxime
                                eius consequuntur neque est iusto atque, obcaecati maiores inventore expedita nisi
                                voluptas voluptates sint doloremque rem eveniet itaque?
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button style="margin-right: 183px; " type="button" class="btn btn-secondary"
                            data-dismiss="modal">Tutup</button>
                    </div>
                </div>
            </div>
        </div>
        @endforeach

    </div>
</section>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
{{-- <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
    integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
</script> --}}
@endpush