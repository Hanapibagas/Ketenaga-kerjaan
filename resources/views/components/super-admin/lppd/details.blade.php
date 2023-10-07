@extends('layouts.dashboardadminsuper')

@section('title')
LPPD
@endsection

@push('add-style')
<style>
    .backhitam {
        color: #fff !important;
        text-align: center;
        border: 1px solid #efefef !important;
    }
</style>
@endpush

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
                        <h2>Details LPPD</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get.IndexLppd') }}">
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
                        <h6 class="mb-25">LPPD</h6>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Nama LPPD</label>
                                    {{ $lppd->nama_lppd }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Target Role</label>
                                    {{ $lppd->role->name }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Tahun LPPD</label>
                                    {{ $lppd->tahun }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Table</label>
                                    <style>
                                        table thead {
                                            background-color: #007bff;
                                            color: white;
                                        }

                                        table th {
                                            padding: 10px;
                                            border: 1px solid #ddd;
                                        }

                                        table tbody tr:nth-child(odd) {
                                            background-color: #f2f2f2;
                                        }

                                        table tbody tr:hover {
                                            background-color: #e0e0e0;
                                        }

                                        table td {
                                            border: 1px solid #ddd;
                                            padding: 10px;
                                        }
                                    </style>
                                    <div>
                                        {!! $lppd->thead_html !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
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
    // Mengambil elemen tabel dengan tag 'table'
        let table = document.getElementsByTagName('table')[0];

        // Menambahkan atribut 'class' dengan nilai 'table' ke elemen tabel
        table.classList.add('table', 'backhitam');
</script>
@endpush