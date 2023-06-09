@extends('layouts.dashboardadminsuper')

@section('title')
Akun Pengguna
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Akun Pengguna</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_tambah_penguuna') }}">
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
                        <h6 class="mb-25">Akun Pengguna</h6>
                        <form action="{{ route('store_pengguna') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <select id="select-state" name="email"
                                            class="form-select @error('email') is-invalid @enderror">
                                            <option value="">-- Silahkan Pilih --</option>
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
                                            <option value="uptbalaipelatihankerja@gmail.com">UPT Balai Pelatihan
                                                Kerja</option>
                                            <option value="uptbalaipelatihankerjawilayahI@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah I
                                            </option>
                                            <option value="uptbalaipelatihankerjawilayahII@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah II
                                            </option>
                                            <option value="uptbalaipelatihankerjawilayahIII@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah
                                                III</option>
                                            <option value="uptbalaipelatihankerjawilayahIV@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah IV
                                            </option>
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
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="admin web">Oprator</option>
                                            <option value="masyakat">Masyakat</option>
                                            <option value="kab/kota">Kab/kota</option>
                                            <option value="upt">Bidang/Upt</option>
                                        </select>
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn success-btn btn-hover m-2">
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