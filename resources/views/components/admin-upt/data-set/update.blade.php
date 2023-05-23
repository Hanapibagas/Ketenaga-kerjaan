@extends('layouts.dashboardadminupt')

@section('title')
Dataset
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Dataset</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_dataset') }}">
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
                        <h6 class="mb-25">Dataset</h6>
                        <form action="{{ route('update_dataset_admin_upt', $detailsdataset->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nama Dataset</label>
                                        <select name="dataset_id" required class="form-control">
                                            <option value="{{ $detailsdataset->Dataset->nama_dataset }}">{{
                                                $detailsdataset->Dataset->nama_dataset }}
                                            <option value="">-- Pilih Dataset --</option>
                                            </option>
                                            @foreach ( $datasetall as $datas )
                                            <option value="{{ $datas->id }}">
                                                {{ $datas->nama_dataset }}
                                            </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Variabel</label>
                                        <input type="text" class="@error('variable') is-invalid @enderror"
                                            name="variable" value="{{ $detailsdataset->variable }}"
                                            placeholder="Masukkan Data kategori" />
                                        @error('variable')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tahun</label>
                                        <input type="date" value="{{ $detailsdataset->tahun }}"
                                            class="@error('tahun') is-invalid @enderror" name="tahun"
                                            placeholder="Masukkan Data Tahun" />
                                        @error('tahun')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Laki-Laki</label>
                                        <input type="number" value="{{ $detailsdataset->laki_laki }}"
                                            class="@error('laki_laki') is-invalid @enderror" name="laki_laki"
                                            placeholder="Masukkan Data Perempuan" />
                                        @error('laki_laki')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Parempuan</label>
                                        <input type="number" value="{{ $detailsdataset->perempuan }}"
                                            class="@error('perempuan') is-invalid @enderror" name="perempuan"
                                            placeholder="Masukkan Data Perempuan" />
                                        @error('perempuan')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn success-btn btn-hover m-2">
                                            Simpan Data Baru
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