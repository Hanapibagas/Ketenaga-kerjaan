@extends('layouts.dashboardadminupt')

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


<section class="tab-components">
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
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_dataset_upt') }}">
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
                        <h6 class="mb-25">Tahun</h6>
                        <div class="row">
                            <form action="{{ route('get.TahunIku') }}" method="POST">
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
                        <div class="row">
                            <div class="table-responsive">
                                <table id="table" class="table">
                                    <thead>
                                        <tr>
                                            <th>Indikator</th>
                                            <th>A</th>
                                            <th>B</th>
                                            <th>Link</th>
                                            <th>Hasil</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($lppd as $data)
                                        <tr>
                                            <td>{{ $data->indikator }}</td>
                                            <td>
                                                <input class="form-control w-50 laki-laki-input" type="number"
                                                    value="{{ $data->a }}" name="a" data-id="{{ $data->id }}"
                                                    onchange="updateHiddenLakiLaki(this)">
                                            </td>
                                            <td>
                                                <input class="form-control w-50 perempuan-input" type="number"
                                                    value="{{ $data->b }}" name="b" data-id="{{ $data->id }}"
                                                    onchange="updateHiddenPerempuan(this)">
                                            </td>
                                            <td>
                                                <input class="form-control w-100 perempuan-input" type="text"
                                                    value="{{ $data->b }}" name="b" data-id="{{ $data->id }}"
                                                    onchange="updateHiddenPerempuan(this)">
                                            </td>
                                            <td>{{ number_format($results[$data->id]) }}%</td>
                                            <td>
                                                <form action="{{ route('get.UpdateIkuUpt', $data->id) }}" method="POST"
                                                    data-id="{{ $data->id }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <input type="hidden" name="a" value="{{ $data->a }}"
                                                        class="hidden-laki-laki">
                                                    <input type="hidden" name="b" value="{{ $data->b }}"
                                                        class="hidden-perempuan">
                                                    <input type="hidden" name="b" value="{{ $data->b }}"
                                                        class="hidden-perempuan">
                                                    <button class="btn btn-primary update-button"
                                                        type="submit">Update</button>
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
@endsection

@push('add-script')
<script>
    function updateHiddenLakiLaki(input) {
      const inputValue = input.value;
      const dataId = input.getAttribute('data-id');

      const hiddenInput = document.querySelector(`form[data-id="${dataId}"] .hidden-laki-laki`);

      hiddenInput.value = inputValue;
    }

    function updateHiddenPerempuan(input) {
      const inputValue = input.value;
      const dataId = input.getAttribute('data-id');

      const hiddenInput = document.querySelector(`form[data-id="${dataId}"] .hidden-perempuan`);

      hiddenInput.value = inputValue;
    }

    function updateHiddenPerempuan(input) {
      const inputValue = input.value;
      const dataId = input.getAttribute('data-id');

      const hiddenInput = document.querySelector(`form[data-id="${dataId}"] .hidden-perempuan`);

      hiddenInput.value = inputValue;
    }

    const inputElements = document.querySelectorAll('#table input[type="number"]');
</script>

<script>
    const dataTable = new simpleDatatables.DataTable("#table", {
      searchable: true,
    });
</script>
@endpush
