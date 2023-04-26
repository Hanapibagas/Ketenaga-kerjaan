@extends('layouts.dashboardadminsuper')

@section('title')
Dashboard
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
                        <h2>Data Pemintaan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-10">Pemintaan Data Table</h6>
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Pemohonan</th>
                                        <th>Judul Dataset</th>
                                        <th>Deskripsi</th>
                                        <th>OPD Produsen data</th>
                                        <th>Tujuan</th>
                                        <th>Status</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $permintaan as $data )
                                    <tr>
                                        <td>{{ $data->title }}</td>
                                        <td>{{ $data->tanggal }}</td>
                                        <td>
                                            <img src="{{ Storage::url($data->gambar) }}" alt="" style="width: 150px"
                                                class="img-thumbnail">
                                        </td>
                                        <td>
                                            <a href="{{ route('edit_berita', $data->id) }}" class="btn btn-primary">
                                                <i class="lni lni-pencil" style="color: whitesmoke"></i>
                                            </a>
                                            <input type="hidden" class="delete_id" value="{{ $data->id }}">
                                            <form action="{{ route('destroy_berita', $data->id) }}" method="POST"
                                                class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button class="btn btn-danger btndelete">
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
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script>
    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('.btndelete').click(function (e) {
            e.preventDefault();

            var deleteid = $(this).closest("tr").find('.delete_id').val();

            swal({
                    title: "Apakah anda yakin?",
                    text: "Anda tidak dapat memulihkan data ini lagi!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                })
                .then((willDelete) => {
                    if (willDelete) {

                        var data = {
                            "_token": $('input[name=_token]').val(),
                            'id': deleteid,
                        };
                        $.ajax({
                            type: "DELETE",
                            url: 'berita/delete/' + deleteid,
                            data: data,
                            success: function (response) {
                                swal(response.status, {
                                        icon: "success",
                                    })
                                    .then((result) => {
                                        location.reload();
                                    });
                            }
                        });
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