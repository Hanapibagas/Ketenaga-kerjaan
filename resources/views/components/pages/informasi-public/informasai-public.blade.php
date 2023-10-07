@extends('layouts.app')

@section('title')
Informamsi Public
@endsection

@push('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
@endpush

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
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-header-data.14a37054.png');
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
        <li class="breadcrumb-item active" aria-current="page">Informasi Publik</li>
    </ol>
</nav>

<div class="container">
    <style>
        .gambar {
            width: 1000px;
            height: 480px;
            margin-left: 150px
        }

        @media screen and (max-width: 992px) {
            .gambar {
                height: 200px;
                margin-left: -1px;
            }
        }
    </style>
    <img class="gambar" src="{{ asset('assets/frontend/img/data/1660202107.jpg') }}" alt="" srcset="">
</div>
<br>

<div class="helo">
    <div class="container pb-4 mb-2 mb-lg-3">
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-lg-5 col-md-4">
                <h1 class="mb-2 mb-md-0">Informasi Berkala</h1>
            </div>
            <div class="col-lg-7 col-md-8">
                <form action="{{ route('pencarian_infromasi_berkala') }}" class="row gy-2">
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
                            <input type="text" name="search" class="form-control pe-5 rounded"
                                placeholder="Search the informasi berkala...">
                            <i
                                class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row row-cols-lg-12 row-cols-sm-12 row-cols-1 gy-md-4 gy-2">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        @foreach ( $berkala as $data )
                        <tr>
                            <th>{{ $data->nama }}</th>
                            <th>
                                <a href="{{ $data->link }}" target="_blank">{{ $data->nama_link }}</a>
                            </th>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="test">
    <div class="container pb-4 mb-2 mb-lg-3">
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-lg-5 col-md-4">
                <h1 class="mb-2 mb-md-0">Informasi Serta Merta</h1>
            </div>
            <div class="col-lg-7 col-md-8">
                <form action="{{ route('pencarian_infromasi_serta_merta') }}" class="row gy-2">
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
                            <input type="text" name="search" class="form-control pe-5 rounded"
                                placeholder="Search the informasi serta merta...">
                            <i
                                class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row row-cols-lg-12 row-cols-sm-12 row-cols-1 gy-md-4 gy-2">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        @foreach ( $sertamerta as $data )
                        <tr>
                            <th>{{ $data->nama }}</th>
                            <th><a target="_blank" href="{{ $data->link }}">{{ $data->nama_link }}</a></th>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
        {{-- <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">
            @foreach ( $sertamerta as $data )
            <div class="col pb-3">
                <article class="card border-0 shadow-sm h-100">
                    <div class="card-body pb-4">
                        <h3 class="h5 mb-0">
                            <a>{{ $data->nama }}</a>
                        </h3>
                    </div>
                    <div class="card-footer py-4">
                        <i class="bx bx-link fs-xl me-1"></i>
                        <a href="{{ $data->link }}" target="_blank">Kunjungi Link </a>
                    </div>
                </article>
            </div>
            @endforeach
        </div> --}}
    </div>
</div>

<div class="helo">
    <div class="container pb-4 mb-2 mb-lg-3">
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-lg-5 col-md-4">
                <h1 class="mb-2 mb-md-0">Informasi Tersedia Setiap Saat</h1>
            </div>
            <div class="col-lg-7 col-md-8">
                <form action="{{ route('pencarian_infromasi_setiap_saat') }}" class="row gy-2">
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
                            <input type="text" name="search" class="form-control pe-5 rounded"
                                placeholder="Search the setiap saat...">
                            <i
                                class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row row-cols-lg-12 row-cols-sm-12 row-cols-1 gy-md-4 gy-2">
            <div class="table-responsive">
                <table class="table table-striped table-bordered">
                    <thead>
                        @foreach ( $setiapsaat as $data )
                        <tr>
                            <th>{{ $data->nama }}</th>
                            <th>
                                <a href="{{ $data->link }}" target="_blank">{{ $data->nama_link }}</a>
                            </th>
                        </tr>
                        @endforeach
                    </thead>
                </table>
            </div>
        </div>
        {{-- <div class="row row-cols-lg-3 row-cols-sm-2 row-cols-1 gy-md-4 gy-2">
            @foreach ( $setiapsaat as $data )
            <div class="col pb-3">
                <article class="card border-0 shadow-sm h-100">
                    <div class="card-body pb-4">
                        <h3 class="h5 mb-0">
                            <a>{{ $data->nama }}</a>
                        </h3>
                    </div>
                    <div class="card-footer py-4">
                        <i class="bx bx-download fs-xl me-1"></i>
                        <a href="storage/{{ $data->file }}" target="_blank">download</a>
                    </div>
                </article>
            </div>
            @endforeach
        </div> --}}
    </div>
</div>
@endsection

@push('js')
@endpush