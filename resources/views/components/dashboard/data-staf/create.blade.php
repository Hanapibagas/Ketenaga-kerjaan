@extends('layouts.dashboard')

@section('title')
Data Staf
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Data Staf</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_staf') }}">
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
                        <h6 class="mb-25">Data Staf</h6>
                        <form action="{{ route('store_staf') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nama Staf</label>
                                        <input type="text" name="nama" placeholder="Masukkan Nama Staf" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Jabatan</label>
                                        <input type="text" name="jabatan" placeholder="Masukkan Jabatan" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Akun Sosial Media</label>
                                        <input type="text" name="instagram"
                                            placeholder="Masukkan Link Instagram (jika memiliki)" />
                                        <input type="text" name="facebook"
                                            placeholder="Masukkan Link Facebook (jika memiliki)"
                                            style=" margin-top: 20px" />
                                        <input type="text" name="twitter"
                                            placeholder="Masukkan Link Twitter (jika memiliki)"
                                            style=" margin-top: 20px" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Gambar</label>
                                        <input name="gambar" type="file" />
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