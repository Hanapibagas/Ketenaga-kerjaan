@extends('layouts.dashboardadminkab')

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
                        <h2>Details Dataset</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_kab') }}">
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
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Nama Dataset</label>
                                    {{ $dataset->nama_dataset }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Kategori</label>
                                    {{ $dataset->kategori }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>OPD</label>
                                    {{ $dataset->opd }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Satuan</label>
                                    {{ $dataset->satuan }}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-style mb-30">
                        <h6 class="mb-25">Tahun</h6>
                        <div class="row">
                            <form action="{{ route('filter_dataset_kab', $dataset->id) }}" method="POST">
                                @csrf
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tahun</label>
                                        @php
                                        $year = date('Y');
                                        @endphp
                                        <select name="tahun" class="form-control">
                                            <option value="-- Pilih tahun --">-- Pilih tahun --</option>
                                            @for ($i=2018; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }}
                                                </option>
                                                @endfor
                                        </select>
                                    </div>
                                    <style>
                                        .tombol {
                                            margin-left: 392px
                                        }
                                    </style>
                                    <div class="col-12 tombol">
                                        <div class="button-group d-flex justify-content-center flex-wrap">
                                            <button class="main-btn success-btn btn-hover m-2">
                                                Cari tahun
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="card-style mb-30">
                        <style>
                            .tambah {
                                margin-bottom: 12px;
                            }
                        </style>
                        <a href="{{ route('create_berita') }}"
                            class="main-btn success-btn rounded-md btn-hover tambah">+
                            Tambah Data</a>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Dataset</th>
                                            <th>Variabel</th>
                                            <th>Tahun</th>
                                            <th>Laki-Laki</th>
                                            <th>Perempuan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $detailsdataset as $data )
                                        <tr>
                                            <td>{{ Str::limit($data->Dataset->nama_dataset, 25) }}</td>
                                            <td>{{ $data->variable }}</td>
                                            <td>{{ $data->tahun }}</td>
                                            <td>{{ $data->laki_laki }}</td>
                                            <td>{{ $data->perempuan }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
<script>
    const dataTable = new simpleDatatables.DataTable("#table", {
      searchable: true,
    });
</script>
@endpush