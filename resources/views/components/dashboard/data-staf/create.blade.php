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
                                        <label>Nama Staf <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('nama') is-invalid @enderror" name="nama"
                                            placeholder="Masukkan Nama Staf" />
                                        @error('nama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>NIP <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="number" class="@error('nip') is-invalid @enderror" name="nip"
                                            placeholder="Masukkan NIP" />
                                        @error('nip')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tempat Lahir <i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('tempat_lahir') is-invalid @enderror"
                                            name="tempat_lahir" placeholder="Masukkan Tempat Lahir" />
                                        @error('tempat_lahir')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tempat Melaksanakan Tugas <i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input type="text"
                                            class="@error('tempat_melaksanakan_tugas') is-invalid @enderror"
                                            name="tempat_melaksanakan_tugas"
                                            placeholder="Masukkan Tempat melaksanakan Tugas" />
                                        @error('tempat_melaksanakan_tugas')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Pangkat <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('pangkat') is-invalid @enderror" name="pangkat"
                                            placeholder="Masukkan Pangkat" />
                                        @error('pangkat')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Golongan Ruang <i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input type="date" class="@error('golongan_ruang') is-invalid @enderror"
                                            name="golongan_ruang" placeholder="Masukkan Golongan Ruang" />
                                        @error('golongan_ruang')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Pendidikan Trakhir / Jurusan <i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('pendidikan') is-invalid @enderror"
                                            name="pendidikan" placeholder="Masukkan Pendidikan" />
                                        @error('pendidikan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tahun Lulus <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="date" class="@error('tahun_lulus') is-invalid @enderror"
                                            name="tahun_lulus" placeholder="Masukkan Tahun Lulus" />
                                        @error('tahun_lulus')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Jenis Kelamin <i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <select name="jenis_kelamin"
                                            class="form-select @error('jenis_kelamin') is-invalid @enderror">
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="Laki-Laki">Laki-Laki</option>
                                            <option value="Perempuan">Perempuan</option>
                                            @error('jenis_kelamin')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Agama <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('agama') is-invalid @enderror" name="agama"
                                            placeholder="Masukkan Agama" />
                                        @error('agama')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Etmis <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('etmis') is-invalid @enderror" name="etmis"
                                            placeholder="Masukkan Etmis" />
                                        @error('etmis')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Asal Daerah <i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="text" class="@error('asal_daerah') is-invalid @enderror"
                                            name="asal_daerah" placeholder="Masukkan Asal Daerah" />
                                        @error('asal_daerah')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Keterangan </label>
                                        <input type="text" name="keterangan"
                                            placeholder="Masukkan keterangan (jika tidak mengetahuinya bisa dikosongkan)" />
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
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn primary-btn btn-hover m-2">
                                            Simpan Data Staf
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