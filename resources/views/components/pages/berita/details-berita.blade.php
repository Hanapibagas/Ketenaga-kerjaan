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
                <a href="{{ route('index_berita') }}">Berita</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Berita Details</li>
        </ol>
    </nav>

    <section class="container pb-4 mb-2 mb-lg-3"> <br>
        <h1>{{ $berita->title }}</h1>
    </section>

    <section class="jarallax" data-jarallax data-speed="0.4">
        <div class="jarallax-img" style="background-image: url({{ Storage::url($berita->gambar) }});"></div>
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
                    <p class="fs-lg mb-0">{!! $berita->deskripsi !!}</p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection
