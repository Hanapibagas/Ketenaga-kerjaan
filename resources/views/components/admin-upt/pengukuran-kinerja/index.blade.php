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
                                        <th>Tahun LPPD</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $pengukuran as $data )
                                    <tr>
                                        <td>{{ Str::limit($data->nama_pengukuran, 25) }}</td>
                                        <td>{{ $data->tahun }}</td>
                                        <td>
                                            <a href="{{ route('getDetailsPengukuran', $data->id) }}"
                                                class="btn btn-info">
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
</section>
@endsection

@push('add-script')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('select[name="tahun"]').change(function () {
            var selectedYear = $(this).val();

            $('#table tbody tr').each(function () {
                var rowYear = $(this).find('td:eq(1)').text();

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