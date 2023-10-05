@extends('layouts.dashboardadminupt')

@section('title')
    LPPD
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
                            <h2>Data LPPD</h2>
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
                                <form action="{{ route('get.TahunLppd') }}" method="POST">
                                    @csrf
                                    <div class="col-12">
                                        <div class="input-style-1">
                                            <label>Tahun</label>
                                            @php
                                                $year = date('Y');
                                            @endphp
                                            <select name="tahun" class="form-control">
                                                <option value="-- Pilih tahun --">-- Pilih tahun --</option>
                                                @for ($i = 2018; $i <= $year; $i++)
                                                    <option value="{{ $i }}"> {{ $i }}
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
                                    <form action="{{ route('get.UpdateLppdUpt') }}" method="POST">
                                        @method('PUT')
                                        @csrf
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
                                                                value="{{ $data->a }}" name="a[]"
                                                                data-id="{{ $data->id }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control w-50 perempuan-input" type="number"
                                                                value="{{ $data->b }}" name="b[]"
                                                                data-id="{{ $data->id }}">
                                                        </td>
                                                        <td>
                                                            <input class="form-control w-100 link-input" type="text"
                                                                value="{{ $data->link_terkait }}" name="link_terkait[]"
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
    {{--  <script>
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

        function updateHiddenLink(input) {
            const inputValue = input.value;
            const dataId = input.getAttribute('data-id');

            const hiddenInput = document.querySelector(`form[data-id="${dataId}"] .hidden-link`);

            hiddenInput.value = inputValue;
        }

        const inputElements = document.querySelectorAll('#table input[type="number"], #table input[type="text"]');
    </script>  --}}

    <script>
        const dataTable = new simpleDatatables.DataTable("#table", {
            searchable: true,
        });
    </script>
@endpush
