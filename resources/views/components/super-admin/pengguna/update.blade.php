@extends('layouts.dashboardadminsuper')

@section('title')
Berita
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Berita</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('dashboard_berita') }}">
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
                        <h6 class="mb-25">Infografis</h6>
                        <form action="{{ route('index_tambah_penguuna', $pengguna->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <select id="select-state" name="email"
                                            class="form-select @error('email') is-invalid @enderror">
                                            <option value="{{ $pengguna->email }}">{{ $pengguna->email }}</option>
                                            <option value="">-- Silahkan pilih jika ingin di ubah --</option>
                                            <option value="soppeng@gmail.com">soppeng@gmail.com</option>
                                            <option value="takalar@gmail.com">takalar@gmail.com</option>
                                            <option value="tanahtoraja@gmail.com">tanahtoraja@gmail.com</option>
                                            <option value="torajautara@gmail.com">torajautara@gmail.com</option>
                                            <option value="wajo@gmail.com">wajo@gmail.com</option>
                                            <option value="makassar@gmail.com">makassar@gmail.com</option>
                                            <option value="palopo@gmail.com">palopo@gmail.com</option>
                                            <option value="parepare@gmail.com">parepare@gmail.com</option>
                                            <option value="luwutimur@gmail.com">luwutimur@gmail.com</option>
                                            <option value="luwuutara@gmail.com">luwuutara@gmail.com</option>
                                            <option value="maros@gmail.com">maros@gmail.com</option>
                                            <option value="pangkep@gmail.com">pangkep@gmail.com</option>
                                            <option value="pinrang@gmail.com">pinrang@gmail.com</option>
                                            <option value="kepulauanselayar@gmail.com">kepulauanselayar@gmail.com
                                            </option>
                                            <option value="sidrap@gmail.com">sidrap@gmail.com</option>
                                            <option value="sinjai@gmail.com">sinjai@gmail.com</option>
                                            <option value="barru@gmail.com">barru@gmail.com</option>
                                            <option value="bone@gmail.com">bone@gmail.com</option>
                                            <option value="bulukumba@gmail.com">bulukumba@gmail.com</option>
                                            <option value="enrekang@gmail.com">enrekang@gmail.com</option>
                                            <option value="gowa@gmail.com">gowa@gmail.com</option>
                                            <option value="luwu@gmail.com">luwu@gmail.com</option>
                                            <option value="bantaeng@gmail.com">bantaeng@gmail.com</option>
                                        </select>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Role</label>
                                        <select name="roles" class="form-select  @error('roles') is-invalid @enderror">
                                            <option value="">{{ $pengguna->roles }}</option>
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="oprator">Oprator</option>
                                            <option value="masyakat">Masyakat</option>
                                            <option value="kab/kota">Kab/kota</option>
                                        </select>
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Sandi</label>
                                        <input type="text" name="password" value="{{ $pengguna->password }}"
                                            placeholder="Masukkan Tanggal" />
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
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