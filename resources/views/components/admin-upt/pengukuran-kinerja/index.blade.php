@extends('layouts.dashboardadminupt')

@section('title')
    Pengukuran Kinerja
@endsection

@section('content')
    @if (session('status'))
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "{{ session('status') }}",
            });
        </script>
    @endif


    <section class="tab-components">
        <div class="container-fluid">
            <div class="title-wrapper pt-30">
                <div class="row align-items-center">
                    <div class="col-md-6">
                        <div class="title mb-30">
                            <h2>Data Pengukuran Kinerja</h2>
                        </div>
                    </div>
                </div>
            </div>

            <div class="form-layout-wrapper">
                <div class="row">
                    <div class="col-lg-12">

                        <div class="card-style mb-30">
                            <h6 class="mb-25">Triwulan</h6>
                            <div class="row">
                                <form action="{{ route('get.TahunPengukuran') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Triwulan</label>
                                            <select name="tahun" class="form-control">
                                                <option value="-- Pilih tahun --">-- Pilih Triwulan --</option>
                                                <option value="Triwulan I">Triwulan I</option>
                                                <option value="Triwulan II">Triwulan II</option>
                                                <option value="Triwulan III">Triwulan III</option>
                                                <option value="Triwulan IV">Triwulan IV</option>
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
                                                    Cari triwulan
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="card-style mb-30">
                            <div class="row">
                                <div class="table-responsive">
                                    <form action="{{ route('get.UpdatePengukuranUpt') }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <table id="table" class="table">
                                            <thead>
                                                <tr>
                                                    <th>Indikator</th>
                                                    <th>A</th>
                                                    <th>B</th>
                                                    <th>Hasil</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($pengukuran as $data)
                                                    <tr>
                                                        <td>{{ $data->indikator }}</td>
                                                        <td>
                                                            <input class="form-control w-50 laki-laki-input" type="number"
                                                                value="{{ $data->a }}" name="a[]"
                                                                data-id="{{ $data->id }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control w-50 perempuan-input" type="number"
                                                                value="{{ $data->b }}" name="b[]"
                                                                data-id="{{ $data->id }}">
                                                        </td>
                                                        <td>{{ number_format($results[$data->id]) }}%</td>
                                                        <td>
                                                            <input type="hidden" name="id[]"
                                                                value="{{ $data->id }}" class="hidden-laki-laki">
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                            <button class="btn btn-primary" type="submit">Update</button>
                                        </table>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
@endsection

@push('add-script')
    <script>
        const dataTable = new simpleDatatables.DataTable("#table", {
            searchable: true,
        });
    </script>
@endpush
