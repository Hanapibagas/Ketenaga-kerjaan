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
        <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ asset('assets/frontend/img/grid/01.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="portfolio-single-project.html" class="stretched-link">Astronaut &amp; Flashing Neon
                            Lights</a>
                    </h2>
                    <div class="card-portfolio-meta">
                        <span class="text-muted">3D Render / Graphic Design / Motion Design</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-7 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ asset('assets/frontend/img/grid/02.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="portfolio-single-project.html" class="stretched-link">Scene of Sunglasses &amp;
                            Headphone on Human Head</a>
                    </h2>
                    <div class="card-portfolio-meta pb-1">
                        <span class="text-muted">NFT / Graphic Design / Art / Identity / Motion Design</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ asset('assets/frontend/img/grid/03.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="portfolio-single-project.html" class="stretched-link">Plaster Antique Sculpture in a
                            Pop Art Style</a>
                    </h2>
                    <div class="card-portfolio-meta">
                        <span class="text-muted">NFT / Graphic Design / Art / 3D</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ asset('assets/frontend/img/grid/04.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="portfolio-single-project.html" class="stretched-link">Big Blue Whale Shape</a>
                    </h2>
                    <div class="card-portfolio-meta">
                        <span class="text-muted">3D Pollygonal Shape / Graphic Design / Art</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-5 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ asset('assets/frontend/img/grid/05.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="portfolio-single-project.html" class="stretched-link">3D Shape Illustration</a>
                    </h2>
                    <div class="card-portfolio-meta">
                        <span class="text-muted">3D Design / Illustration / Art</span>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-md-7 mb-2">
            <div class="card card-portfolio">
                <div class="card-img">
                    <img src="{{ asset('assets/frontend/img/grid/06.jpg') }}" alt="Image">
                </div>
                <div class="card-body">
                    <h2 class="h4 mb-2">
                        <a href="portfolio-single-project.html" class="stretched-link">Mannequin Hands Holding Phone</a>
                    </h2>
                    <div class="card-portfolio-meta">
                        <span class="text-muted">NFT / Graphic Design / Art / 3D</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection