@extends('layouts.dashboardadminsuper')

@section('title')
IKU
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

<section class="table-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Data IKU</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ul class="buttons-group">
                                <li class="breadcrumb-item">
                                    <a class="main-btn success-btn rounded-md btn-hover" data-toggle="modal"
                                        data-target="#exampleModal">
                                        <i class="lni lni-upload" style="margin-right: 20px; margin-left: -10px"></i>
                                        Tambah Data
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-style mb-30">
                <h6 class="mb-25">Tahun</h6>
                <div class="row">
                    <form action="{{ route('get.TahunIkuSuper') }}" method="POST">
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
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-10">IKU Data Table</h6>
                        <div class="table-responsive">
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
                                    @foreach ( $iku as $data )
                                    <tr>
                                        <td>{{ Str::limit($data->indikator, 25) }}</td>
                                        <td>{{ $data->a }}</td>
                                        <td>{{ $data->b }}</td>
                                        <td>{{ number_format($results[$data->id]) }}%</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#exampleModal-{{ $data->id }}"
                                                class="btn btn-primary">
                                                <i class="lni lni-pencil" style="color: whitesmoke"></i>
                                            </a>
                                            <form action="{{ route('get.DeleteIku', $data->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger delete-btn" data-id="{{ $data->id }}">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                            </form>
                                        </td>
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

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data IKU</h5>
            </div>
            <form action="{{ route('get.StoreIku') }}" method="POST">
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Nama Indikator</label>
                            <input type="text" class="@error('indikator') is-invalid @enderror" name="indikator" />
                            @error('indikator')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Tahun Indikator</label>
                            <input type="date" class="@error('tahun') is-invalid @enderror" name="tahun" />
                            @error('tahun')
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

@foreach ( $iku as $data )
<div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form Data IKU</h5>
            </div>
            <form action="{{ route('get.UpdateIku', $data->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Nama Indikator</label>
                            <input type="text" value="{{ $data->indikator }}"
                                class="@error('indikator') is-invalid @enderror" name="indikator" />
                            @error('indikator')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label>Tahun Indikator</label>
                            <input type="date" value="{{ $data->tahun }}" class="@error('tahun') is-invalid @enderror"
                                name="tahun" />
                            @error('tahun')
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
@endforeach

@endsection

@push('add-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    // SweetAlert Delete Confirmation
    document.addEventListener('DOMContentLoaded', () => {
        const deleteButtons = document.querySelectorAll('.delete-btn');
        deleteButtons.forEach((button) => {
            button.addEventListener('click', (e) => {
                e.preventDefault();
                const form = button.parentNode;
                const id = button.getAttribute('data-id');

                Swal.fire({
                    title: 'Apakah anda yakin?',
                    text: "Anda tidak akan dapat mengembalikan ini!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Ya, Hapus data ini!',
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    });
</script>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
    integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
    const dataTable = new simpleDatatables.DataTable("#table", {
      searchable: true,
    });
</script>
@endpush