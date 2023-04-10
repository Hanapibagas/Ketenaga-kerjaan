@extends('layouts.dashboard')

@section('title')
Infografis
@endsection

@section('content')
<section class="table-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Data Infografis</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ul class="buttons-group">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('create_infografis') }}"
                                        class="main-btn primary-btn rounded-md btn-hover">+ Tambah Data</a>
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
                        <h6 class="mb-10">Responsive Data Table</h6>
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>
                                            <h6>Judul</h6>
                                        </th>
                                        <th>
                                            <h6>Type Infografis</h6>
                                        </th>
                                        <th>
                                            <h6>Tanggal</h6>
                                        </th>
                                        <th>
                                            <h6>Gambar</h6>
                                        </th>
                                        <th>
                                            <h6>Aksi</h6>
                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $infografis as $data )
                                    <tr>
                                        <td>
                                            <p>{{ $data->title }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $data->type_infografis }}</p>
                                        </td>
                                        <td>
                                            <p>{{ $data->tanggal }}</p>
                                        </td>
                                        <td>
                                            <p>
                                                <img src="{{ Storage::url($data->gambar) }}" alt="" style="width: 150px"
                                                    class="img-thumbnail">
                                            </p>
                                        </td>
                                        <td>
                                            <p>
                                                <a href="" class="btn btn-primary">
                                                    <i class="lni lni-pencil" style="color: whitesmoke"></i>
                                                </a>
                                            <form action="" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger">
                                                    <i class="lni lni-trash-can"></i>
                                                </button>
                                            </form>
                                            </p>
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
    const dataTable = new simpleDatatables.DataTable("#table", {
      searchable: true,
    });
</script>

@endpush