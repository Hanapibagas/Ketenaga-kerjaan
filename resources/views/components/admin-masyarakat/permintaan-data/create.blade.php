@extends('layouts.dashboardadminmasyarakat')

@section('title')
Permintaan Data
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Permintaan Data</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_permintaan_masyarakat') }}">
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
                        <h6 class="mb-25">Permintaan Data</h6>
                        <form action="{{ route('store_permintaan_data') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nama<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" name="nama" class="@error('nama') is-invalid @enderror"
                                            placeholder="Masukkan Nama" />
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input class="@error('email') is-invalid @enderror" type="text" name="email"
                                            placeholder="Masukkan Email" />
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Judul Dataset<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input class="@error('jenis_data') is-invalid @enderror" type="text"
                                            name="jenis_data" placeholder="Masukkan Judul Dataset" />
                                        @error('jenis_data')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Opd Produsen Data</label>
                                        <input class="" type="text" name="opd_produsen_data"
                                            placeholder="Masukkan Opd Produsen Data" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tujuan<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input class="@error('tujuan') is-invalid @enderror" type="text" name="tujuan"
                                            placeholder="Masukkan Tujuan" />
                                        @error('tujuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Deskripsi<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <textarea class="@error('deskripsi') is-invalid @enderror"
                                            name="deskripsi"></textarea>
                                        @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn primary-btn btn-hover m-2">
                                            Kirim Premintaan data Data
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