@extends('layouts.dashboardadminsuper')

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
                        <h2>Details Data Permintaan Data Masyarakat</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_permintaan') }}">
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
                        <form action="{{ route('update_permintaan', $permintaan->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Nama</label>
                                        <i>{{ $permintaan->nama }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Email</label>
                                        <i>{{ $permintaan->email }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Nomor Handphone</label>
                                        <i>{{ $permintaan->no_hp }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Nomor KTP</label>
                                        <i>{{ $permintaan->no_ktp }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Nomor Pengesahan</label>
                                        <i>{{ $permintaan->nomor_pengesahaan }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Alamat</label>
                                        <i>{{ $permintaan->alamat }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Pekerjaan</label>
                                        <i>{{ $permintaan->pekerjaan }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Rincian Informasi Yang Dibutuhkan</label>
                                        <i>{!! $permintaan->rincian !!}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Tujuan Permohonan Informasi</label>
                                        <i>{!! $permintaan->tujuan !!}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Foto KTP</label>
                                        <i>
                                            <img src="{{ Storage::url($permintaan->foto_ktp) }}" alt=""
                                                style="width: 500px" class="img-thumbnail">
                                        </i>
                                    </div>
                                </div>
                                <div class="input-style-1">
                                    <label style="font-size: 20px;">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="Status Saat Ini">Status Saat Ini {{ $permintaan->status }}
                                        </option>
                                        <option value="">-- Silahkan Pilih --</option>
                                        <option value="Telah DiTerima">Telah DiTerima</option>
                                        <option value="Mohon Maaf Permintaan Anda Di Tolak">Mohon Maaf Permintaan Anda
                                            Di Tolak</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn primary-btn btn-hover m-2">
                                            Kirim Peremintaan data kemasyrakat
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
