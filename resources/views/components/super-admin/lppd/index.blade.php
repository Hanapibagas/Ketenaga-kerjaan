@extends('layouts.dashboardadminsuper')

@section('title')
LPPD
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
                        <h2>Data LPPD</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ul class="buttons-group">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('getCreateLppd') }}"
                                        class="main-btn success-btn rounded-md btn-hover">
                                        <i class="lni lni-upload" style="margin-right: 20px; margin-left: -10px"></i>
                                        Tambah Data
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-10">LPPD Data Table</h6>
                        <div class="input-style-1">
                            <label>Tahun</label>
                            @php
                            $year = date('Y');
                            @endphp
                            <select name="tahun" class="form-control">
                                <option value="-- Pilih tahun --">-- Pilih tahun --</option>
                                @for ($i=2018; $i <= $year; $i++) <option value="{{ $i }}">{{ $i }}</option>
                                    @endfor
                            </select>
                        </div>
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Nama LPPD</th>
                                        <th>Bidang Terkait</th>
                                        <th>Tahun LPPD</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $lppd as $data )
                                    <tr>
                                        <td>{{ Str::limit($data->nama_lppd, 25) }}</td>
                                        <td>{{ $data->role->name }}</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>
                                            <a href="{{ route('getEditLppd', $data->id) }}" class="btn btn-primary">
                                                <i class="lni lni-pencil" style="color: whitesmoke"></i>
                                            </a>
                                            <a href="{{ route('getDetailsLppdSuper', $data->id) }}"
                                                class="btn btn-info">
                                                <i class="lni lni-eye" style="color: whitesmoke"></i>
                                            </a>
                                            {{-- <a href="{{ route('getCreateVariable', $data->id) }}"
                                                class="btn btn-info">
                                                <i class="lni lni-archive" style="color: whitesmoke"></i>
                                            </a> --}}
                                            <form action="{{ route('get.DeleteLppd', $data->id) }}" method="POST"
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
@endsection

@push('add-script')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('select[name="tahun"]').on('change', function() {
            var selectedYear = $(this).val();

            $('#table tbody tr').each(function() {
                var rowYear = $(this).find('td:eq(2)').text();

                if (selectedYear === '-- Pilih tahun --' || selectedYear === rowYear) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            });
        });
    });
</script>

<script>
    const dataTable = new simpleDatatables.DataTable("#table", {
      searchable: true,
    });
</script>
@endpush