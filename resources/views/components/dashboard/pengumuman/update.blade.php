@extends('layouts.dashboard')

@section('title')
Pengumunan
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Pengumuman</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_pengumuman') }}">
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
                        <h6 class="mb-25">Pengumuman</h6>
                        <form action="{{ route('update_pengumuman', $pengumuman->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Judul</label>
                                        <input type="text" value="{{ $pengumuman->title }}" name="title"
                                            placeholder="Masukkan Judul" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Gambar</label>
                                        <small>Pilih gambar jika ingin mengubah</small>
                                        <input name="gambar" type="file" value="{{ $pengumuman->gambar }}">
                                        @if ( $pengumuman->gambar )
                                        <img src="{{ Storage::url($pengumuman->gambar) }}" alt=""
                                            style="width: 150px; margin-top: 10px" class="img-thumbnail">
                                        @else
                                        <p>Gambar Tidak Sedia</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>File</label>
                                        <small>Pilih file jika ingin mengubah</small>
                                        <input name="file" type="file" value="{{ $pengumuman->file }}">
                                        @if ( $pengumuman->file )
                                        @else
                                        <p>File Tidak Sedia</p>
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