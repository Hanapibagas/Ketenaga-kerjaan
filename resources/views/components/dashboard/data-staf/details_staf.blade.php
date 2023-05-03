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
                        <h2>Details Data Staf</h2>
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
                                        <label style="font-size: 20px;">Nama Staf</label>
                                        <i>{{ $staf->nama }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">NIP</label>
                                        <i>{{ $staf->nip }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Tempat Lahir</label>
                                        <i>{{ $staf->tempat_lahir }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Tempat Melaksanakan Tugas</label>
                                        <i>{{ $staf->tempat_melaksanakan_tugas }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Pangkat</label>
                                        <i>{{ $staf->pangkat }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Golongan Ruang</label>
                                        <i>{{ $staf->golongan_ruang }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Pendidikan Trakhir / Jurusan</label>
                                        <i>{{ $staf->pendidikan }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Tahun Lulus</label>
                                        <i>{{ $staf->tahun_lulus }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Jenis Kelamin</label>
                                        <i>{{ $staf->jenis_kelamin }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Agama</label>
                                        <i>{{ $staf->agama }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Etmis</label>
                                        <i>{{ $staf->etmis }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Asal Daerah</label>
                                        <i>{{ $staf->asal_daerah }}</i>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label style="font-size: 20px;">Akun Sosial Media</label>
                                        <i>{{ $staf->twitter }}</i><br>
                                        <i>{{ $staf->facebook }}</i><br>
                                        <i>{{ $staf->instagram }}</i><br>
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
