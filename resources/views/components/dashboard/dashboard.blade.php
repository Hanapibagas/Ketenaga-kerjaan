@extends('layouts.dashboard')

@section('title')
Dashboard {{ Auth::user()->roles }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Dashboard {{ Auth::user()->roles }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-database"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Berita</h6>
                    <h3 class="text-bold mb-10">{{ $jumlahdataberita }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-database"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Publikasi</h6>
                    <h3 class="text-bold mb-10">{{ $jumlahdatapublikasi }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-database"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Pengumuman</h6>
                    <h3 class="text-bold mb-10">{{ $jumlahdatapengumuman }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-database"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Data Pegawai</h6>
                    <h3 class="text-bold mb-10">{{ $jumlahdatapegawai }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-database"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Infografis</h6>
                    <h3 class="text-bold mb-10">{{ $jumlahdatainfografis }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
