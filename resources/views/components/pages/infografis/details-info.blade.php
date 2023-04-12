@extends('layouts.app')

@section('title')
Infografis
@endsection

@section('content')
<div class="container">
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('index_infografis') }}">Infografis</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Infografis Details</li>
        </ol>
    </nav>

    <article class="card border-0 shadow-sm overflow-hidden mb-4" style="margin-top: 40px">
        <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                style="background-image: url({{ Storage::url($infografis->gambar) }}); min-height: 15rem;">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        {{ $infografis->type_infografis }}
                        <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $infografis->tanggal }}</span>
                    </div>
                    <h3 class="h4">
                        {{ $infografis->title }}
                    </h3>
                    <p>
                        {!! $infografis->deskripsi !!}
                    </p>
                    <hr class="my-4">
                    {{-- <div class="d-flex align-items-center justify-content-between">
                        <div class="d-flex align-items-center text-muted">
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-like fs-lg me-1"></i>
                                <span class="fs-sm">8</span>
                            </div>
                            <div class="d-flex align-items-center me-3">
                                <i class="bx bx-comment fs-lg me-1"></i>
                                <span class="fs-sm">7</span>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="bx bx-share-alt fs-lg me-1"></i>
                                <span class="fs-sm">4</span>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </article>
</div>
@endsection
