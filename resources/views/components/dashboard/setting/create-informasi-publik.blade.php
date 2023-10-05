@extends('layouts.dashboard')

@section('title')
Update Form Informasi Publik
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Edit Informasi Publik</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get.IndexInformasiPublik') }}">
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
                        <h6 class="mb-25">Informasi Publik</h6>
                        <form action="{{ route('get.UpdateInformasiPublik', $informasi->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Deskripsi<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <textarea class="@error('deskripsi') is-invalid @enderror"
                                            name="deskripsi">{{ $informasi->deskripsi }}</textarea>
                                        @error('deskripsi')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Gambar</label>
                                        <input type="file" accept="image/*" id="logo"
                                            class="@error('logo') is-invalid @enderror" name="gambar" />
                                        <div class="mt-2 previewImage" id="gambar_logo"></div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn success-btn btn-hover m-2">
                                            Simpan Data
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
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
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
</script>
@endpush