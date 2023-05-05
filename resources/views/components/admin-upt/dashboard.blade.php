@extends('layouts.dashboardadminupt')

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
                    <i class="lni lni-timer"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Permintaan data menunggu diverifikasi</h6>
                    <h3 class="text-bold mb-10">{{ $permintaan_menunggu }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-checkmark"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Permintaan data sudah diverifikasi</h6>
                    <h3 class="text-bold mb-10">{{ $permintaan_diterima }}</h3>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-4 col-sm-6">
            <div class="icon-card mb-30">
                <div class="icon purple">
                    <i class="lni lni-ban"></i>
                </div>
                <div class="content">
                    <h6 class="mb-10">Permintaan data ditolak</h6>
                    <h3 class="text-bold mb-10">{{ $permintaan_ditolak }}</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection