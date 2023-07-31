@extends('layouts.dashboardadminsuper')

@section('title')
Dataset
@endsection

@section('content')
@if (session('status'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Sukses!',
        text : "{{ session('status') }}",
    });
</script>
@endif
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
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Deskripsi</label>
                                    {!! $dataset->deskripsi !!}
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card-style mb-30">
                        <h6 class="mb-25">Tahun</h6>
                        <div class="row">
                            <form action="{{ route('filter_dataset_admin_super', $dataset->id) }}" method="POST">
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
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="title mb-30">
                                    <h6 class="mb-10">Details Data Table</h6>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="breadcrumb-wrapper mb-30">
                                    <nav aria-label="breadcrumb">
                                        <ul class="buttons-group">
                                            <li class="breadcrumb-item">
                                                <a class="main-btn success-btn rounded-md btn-hover" data-toggle="modal"
                                                    data-target="#exampleModalThead">
                                                    <i class="lni lni-pencil-alt"
                                                        style="margin-right: 20px; margin-left: -10px"></i>
                                                    Edit nama tabel
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="table-responsive">
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th>{{ $thead->variabale }}</th>
                                            <th>{{ $thead->tahun }}</th>
                                            <th>{{ $thead->laki }}</th>
                                            <th>{{ $thead->perempuan }}</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ( $detailsdataset as $data )
                                        <tr>
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

                    <div class="card-style mb-30">
                        <h6 class="mb-25">Publikasikan</h6>
                        <div class="row">
                            <form action="{{ route('get.UpdateStatusDataset', $dataset->id) }}" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tahun</label>
                                        <select name="status" class="form-control">
                                            <option value="">{{ $dataset->status == 0 ? 'Private' : 'Publikasi' }}
                                            </option>
                                            <option value="1">Publikasikan</option>
                                            <option value="0">Privasi</option>
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
                                                Publikasikan Data
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

<div class="modal fade" id="exampleModalThead" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Tabel Details Dataset</h5>
            </div>
            <form action="{{ route('get.UpdateTheadDataset', $thead->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="text" value="{{ $thead->variabale }}"
                                class="@error('variabale') is-invalid @enderror" name="variabale" />
                            @error('variabale')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="text" value="{{ $thead->tahun }}" class="@error('tahun') is-invalid @enderror"
                                name="tahun" />
                            @error('tahun')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="text" value="{{ $thead->laki }}" class="@error('laki') is-invalid @enderror"
                                name="laki" />
                            @error('laki')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <input type="text" value="{{ $thead->perempuan }}"
                                class="@error('perempuan') is-invalid @enderror" name="perempuan" />
                            @error('perempuan')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
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