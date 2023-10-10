@extends('layouts.dashboardadminupt')

@section('title')
Laporan
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
                        <h2>Daftar Laporan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
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
                                        <th>Nama</th>
                                        <th>Nama Laporan</th>
                                        <th>Tahun</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $dataset as $data )
                                    <tr>
                                        <td>
                                            {{ Str::limit($data->nama_dataset, 50) }}
                                        </td>
                                        <td>Dataset</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>
                                            <a href="{{ route('getDetailsLaporanUpt', $data->id) }}"
                                                class="btn btn-info">
                                                <i class="lni lni-eye" style="color: whitesmoke"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @foreach ( $iku as $data )
                                    <tr>
                                        <td>
                                            {{ Str::limit($data->nama_iku, 50) }}
                                        </td>
                                        <td>IKU</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>
                                            <a href="{{ route('getDetails', $data->id) }}" class="btn btn-info">
                                                <i class="lni lni-eye" style="color: whitesmoke"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @foreach ( $lppd as $data )
                                    <tr>
                                        <td>
                                            {{ Str::limit($data->nama_lppd, 50) }}
                                        </td>
                                        <td>LPPD</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>
                                            <a href="{{ route('getDetails', $data->id) }}" class="btn btn-info">
                                                <i class="lni lni-eye" style="color: whitesmoke"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    @endforeach
                                    @foreach ( $pengukur as $data )
                                    <tr>
                                        <td>
                                            {{ Str::limit($data->nama_pengukuran, 50) }}
                                        </td>
                                        <td>Pengukuran Kinerja</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>
                                            <a href="{{ route('getDetails', $data->id) }}" class="btn btn-info">
                                                <i class="lni lni-eye" style="color: whitesmoke"></i>
                                            </a>
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
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
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