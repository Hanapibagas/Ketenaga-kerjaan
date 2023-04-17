@extends('layouts.app')

@section('title')
Pengumuman
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Pengumuman</li>
    </ol>
</nav>

<section class="container d-md-flex align-items-center justify-content-between pb-3">
    <h1 class="text-nowrap mb-md-4 pe-md-5">Pengumuman</h1>
</section>

<section class="container pb-5 mb-2 mb-md-4 mb-lg-5">
    <div class="row pb-lg-3">
        @foreach ( $pengumuman as $data )
        <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ Storage::url($data->gambar) }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="storage/{{ $data->file }}" target="_blank" class="stretched-link">{{ $data->title }}</a>
                    </h2>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
