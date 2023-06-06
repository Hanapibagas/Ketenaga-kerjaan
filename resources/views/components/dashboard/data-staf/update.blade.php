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
                        <h2>Update Data Staf</h2>
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
                        <h6 class="mb-25">Details Data Staf</h6>
                        <form action="{{ route('update_staf', $staf->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nama Staf <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" value="{{ $staf->nama }}"
                                            class="@error('nama') is-invalid @enderror" name="nama" />
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Pangkat <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" value="{{ $staf->pangkat }}"
                                            class="@error('pangkat') is-invalid @enderror" name="pangkat" />
                                        @error('pangkat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Jabatan <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" value="{{ $staf->jabatan }}"
                                            class="@error('jabatan') is-invalid @enderror" name="jabatan" />
                                        @error('jabatan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Pendidikan Trakhir<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input value="{{ $staf->pendidikan }}" type="text"
                                            class="@error('pendidikan') is-invalid @enderror" name="pendidikan" />
                                        @error('pendidikan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Biodata <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <textarea name="biodata">{{ $staf->biodata }}</textarea>
                                        @error('biodata') <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Gambar</label>
                                        <small>Pilih gambar jika ingin mengubah</small>
                                        <input name="foto" type="file" value="{{ $staf->foto }}">
                                        @if ( $staf->foto )
                                        <img src="{{ Storage::url($staf->foto) }}" alt=""
                                            style="width: 150px; margin-top: 10px" class="img-thumbnail">
                                        @else
                                        <p>Gambar Tidak Sedia</p>
                                        @endif
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn success-btn btn-hover m-2">
                                            Simpan data pembaruan staf
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