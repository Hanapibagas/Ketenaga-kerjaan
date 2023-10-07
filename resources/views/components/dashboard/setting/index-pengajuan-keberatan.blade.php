@extends('layouts.dashboard')

@section('title')
Setting Pengajuan Keberatan
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
                        <h2>Data Setting Pengajuan Keberatan</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="tables-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="title mb-30">
                                    <h6 class="mb-10">Setting Pengajuan Keberatan Data Table</h6>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Banner</th>
                                        <th>Deskripsi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $keberatan as $data )
                                    <tr>
                                        <td>
                                            <img src="{{ Storage::url($data->gambar) }}" alt="" style="width: 150px"
                                                class="img-thumbnail">
                                        </td>
                                        <td>{!! Str::limit($data->deskripsi, 100) !!}</td>
                                        <td>
                                            <a href="{{ route('get.CreatePengajuankeberatanId', $data->id) }}"
                                                class="btn btn-primary">
                                                <i class="lni lni-pencil" style="color: whitesmoke"></i>
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
<script>
    $(document).ready(function() {
        // Function to preview the images
        function readURL(input, previewId) {
            if (input.files && input.files.length > 0) {
                var previewContainer = $('#' + previewId);
                previewContainer.empty(); // Clear previous previews

                for (var i = 0; i < input.files.length; i++) {
                    var reader = new FileReader();
                    var file = input.files[i];

                    reader.onload = function(e) {
                        var img = $('<img>')
                            .attr('src', e.target.result)
                            .attr('alt', 'Preview Image')
                            .attr('class', 'mx-1 my-1')
                            .css('width', '45%')
                            .css('height', '200px')
                            .css('border-radius', '10%')
                            .css('object-fit', 'cover')
                            .css('border', '1px solid grey');
                        previewContainer.append(img);
                    };

                    reader.readAsDataURL(file);
                }
            }
        }

        $('#logo').change(function() {
            readURL(this, 'gambar_logo');
        });
    });
</script>
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