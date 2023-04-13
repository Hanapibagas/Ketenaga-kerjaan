@extends('layouts.app')

@section('title')
Dataset
@endsection

@section('content')
<div class="container">
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('index_dataset') }}">Dataset</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Unduh Data</li>
        </ol>
    </nav>

    <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
        <h1 class="me-3">Unduh Data</h1>
        <div class="position-relative" style="min-width: 300px;">
            <form action="">
                <input type="text" class="form-control pe-5" placeholder="Search courses">
                <i class="bx bx-search text-nav fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </form>
        </div>
    </div>

    <div class="row row-cols-1 row-cols-sm-2 row-cols-lg-3 gx-3 gx-md-4 mt-n2 mt-sm-0">
        <style>
            .download {
                margin-left: 40%
            }

            @media screen and (max-width: 992px) {
                .download {
                    margin-left: 130px
                }
            }
        </style>
        @foreach ( $datset as $files )
        <div class="col pb-1 pb-lg-3 mb-4">
            <article class="card h-100 border-0 shadow-sm">
                <div class="card-body pb-3">
                    <h3 class="h5 mb-2" style="margin-top: 20px">
                        <a href="{{ route('details_dataset', $files->slug ) }}">{{ $files->title }}</a>
                    </h3>
                    <p class="fs-sm mb-2">{!! $files->deskripsi !!}</p>
                </div>
                <div class="card-footer d-flex align-items-center fs-sm text-muted py-4">
                    <div class="d-flex align-items-center me-4">
                        {{ $files->tanggal }}
                    </div>
                    <div class="d-flex align-items-center me-4 download">
                        <i class="bx bx-download fs-xl me-1"></i>
                        <a target="_blank" href="/storage/{{ $files->file }}">download</a>
                    </div>
                </div>
            </article>
        </div>
        @endforeach
    </div>
</div>
@endsection