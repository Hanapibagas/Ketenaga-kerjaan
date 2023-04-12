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
            <li class="breadcrumb-item">
                <a href="{{ route('unduh_data') }}">Unduh Data</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dataset Details</li>
        </ol>
    </nav>

    <article class="card border-0 shadow-sm overflow-hidden mb-4" style="margin-top: 40px">
        <div class="row g-0">
            <div class="col-sm-8">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        By: admin
                        <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $details->tanggal }}</span>
                    </div>
                    <h3 class="h4">
                        {{ $details->title }}
                    </h3>
                    <p>
                        {!! $details->deskripsi !!}
                    </p>
                    <hr class="my-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center text-muted">
                            <i class="bx bx-download fs-xl me-1"></i>
                            <a target="_blank" href="/storage/{{ $details->file }}">download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>

    <section style="margin-top: 4%" class="container pb-4 mb-2 mb-lg-3">
        <h1>Data Lainnya</h1>
    </section>

    @foreach ( $datset as $files )
    <article class="card border-0 shadow-sm overflow-hidden mb-4">
        <div class=" row g-0">
            <div class="col-sm-8">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        By: admin
                        <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $files->tanggal }}</span>
                    </div>
                    <h3 class="h4">
                        <a href="{{ route('details_dataset', $files->slug ) }}">{{ $files->title }}</a>
                    </h3>
                    <p>
                        {!! $files->deskripsi !!}
                    </p>
                    <hr class="my-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center text-muted">
                            <i class="bx bx-download fs-xl me-1"></i>
                            <a target="_blank" href="/storage/{{ $files->file }}">download</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
    @endforeach
</div>

@endsection