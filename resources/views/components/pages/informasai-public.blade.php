@extends('layouts.app')

@section('title')
Informamsi Public
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Informasi Publik</li>
    </ol>
</nav>
<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Informasi Berkala</h1>
</section>
<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Informasi Serta Merta</h1>
</section>
<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Informasi Tersedia Setiap Saat</h1>
</section>
@endsection