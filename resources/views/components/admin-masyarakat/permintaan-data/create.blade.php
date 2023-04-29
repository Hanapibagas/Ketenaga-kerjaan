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
                                        <input class="@error('email') is-invalid @enderror" type="email" name="email"
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
                                        <label>Nomor Handphone<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input class="@error('no_hp') is-invalid @enderror" type="number" name="no_hp"
                                            placeholder="Masukkan Nomor Handphone" />
                                        @error('no_hp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nomor KTP<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input class="@error('no_ktp') is-invalid @enderror" type="number" name="no_ktp"
                                            placeholder="Masukkan Nomor KTP" />
                                        @error('no_ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nomor Pengesahan</label>
                                        <input class="" type="number" name="nomor_pengesahaan"
                                            placeholder="Masukkan Nomor Pengesahan" />
                                            <small><i>kosongkan jika tidak mengetahuinya atau berikan tanda (-)</i></small>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Alamat<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input class="@error('alamat') is-invalid @enderror" type="text" name="alamat"
                                            placeholder="Masukkan Alamat" />
                                        @error('alamat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Pekerjaan<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input class="@error('pekerjaan') is-invalid @enderror" type="text"
                                            name="pekerjaan" placeholder="Masukkan Pekerjaan" />
                                        @error('pekerjaan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Rincian Informasi Yang Dibutuhkan<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <textarea class="@error('rincian') is-invalid @enderror"
                                            name="rincian"></textarea>
                                        @error('rincian')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tujuan Permohonan Informasi<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <textarea class="@error('tujuan') is-invalid @enderror"
                                            name="tujuan"></textarea>
                                        @error('tujuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Upload Foto KTP<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input class="@error('foto_ktp') is-invalid @enderror" type="file"
                                            name="foto_ktp" placeholder="" />
                                        @error('foto_ktp')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn primary-btn btn-hover m-2">
                                            Kirim Permintaan Data
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
    CKEDITOR.replace('rincian');
    CKEDITOR.replace('tujuan');
</script>
@endpush
