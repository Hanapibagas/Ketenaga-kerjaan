@extends('layouts.dashboard')

@section('title')
Dataset
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Dataset</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard_infografis') }}">
                                        <i>
                                            <- Kembali </i>
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-layout-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-25">Dataset</h6>
                        <form action="{{ route('update_unduhdata', $unduhdata->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Judul</label>
                                        <input type="text" value="{{ $unduhdata->title }}" name="title"
                                            placeholder="Masukkan Judul" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tanggal</label>
                                        <input type="date" name="tanggal" value="{{ $unduhdata->tanggal }}"
                                            placeholder="Masukkan Tanggal" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Deskripsi</label>
                                        <textarea name="deskripsi">{!! $unduhdata->deskripsi !!}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Dokumen</label>
                                        <small>Pilih dokumen jika ingin mengubah</small>
                                        <input name="file" type="file" value="{{ $unduhdata->file }}">
                                        @if ( $unduhdata->file )
                                        <p style="margin-top: 10px"><i>{{ $unduhdata->file }}</i></p>
                                        @else
                                        <p>Dokumen Tidak Sedia</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn primary-btn btn-hover m-2">
                                            Simpan Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@push('add-script')
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
@endpush