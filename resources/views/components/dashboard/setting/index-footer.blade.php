@extends('layouts.dashboard')

@section('title')
Setting Footer
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
                        <h2>Data Setting Footer</h2>
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
                                    <h6 class="mb-10">Setting Footer Data Table</h6>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table id="table" class="table">
                                <thead>
                                    <tr>
                                        <th>Tentang</th>
                                        <th>Alamat</th>
                                        <th>Email</th>
                                        <th>Instagram</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ( $banner as $data )
                                    <tr>
                                        <td>{{ Str::limit($data->nama, 100) }}</td>
                                        <td>{{ $data->alamat }}</td>
                                        <td>{{ $data->email }}</td>
                                        <td>{{ $data->instagram }}</td>
                                        <td>
                                            <a data-toggle="modal" data-target="#exampleModal-{{ $data->id }}"
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

@foreach ( $banner as $data )
<div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="{{ route('get.UpdateFooter', $data->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body">
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="logo">Tetang</label>
                            <input type="text" value="{{ $data->nama }}" id="logo"
                                class="@error('logo') is-invalid @enderror" name="nama" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="logo">Alamat</label>
                            <input type="text" value="{{ $data->alamat }}" id="logo"
                                class="@error('logo') is-invalid @enderror" name="alamat" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="logo">Email</label>
                            <input type="text" value="{{ $data->email }}" id="logo"
                                class="@error('logo') is-invalid @enderror" name="email" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="logo">Instagram</label>
                            <input type="text" value="{{ $data->instagram }}" id="logo"
                                class="@error('logo') is-invalid @enderror" name="instagram" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="logo">Link email</label>
                            <input type="text" value="{{ $data->link_email }}" id="logo"
                                class="@error('logo') is-invalid @enderror" name="link_email" />
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="input-style-1">
                            <label for="logo">Link instagram</label>
                            <input type="text" value="{{ $data->link_instagram }}" id="logo"
                                class="@error('logo') is-invalid @enderror" name="link_instagram" />
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