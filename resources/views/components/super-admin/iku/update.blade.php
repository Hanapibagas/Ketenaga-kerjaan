@extends('layouts.dashboardadminsuper')

@section('title')
IKU
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah IKU</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get.IndexIku') }}">
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
                        <h6 class="mb-25">IKU</h6>
                        <form action="{{ route('get.UpdateIku', $iku->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nama IKU</label>
                                        <input type="text" value="{{ $iku->nama_iku }}" name="nama_iku"
                                            placeholder="Nama Dataset" />
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Target IKU <i class="text-danger" style="font-size: 10px;">(Perhatikan
                                                target iku ini)</i></label>
                                        <select class="form-select" name="role_id" required>
                                            {{-- <option>-- Silahkan Pilih --</option> --}}
                                            @foreach ($user as $item)
                                            <option value={{ $item->id }}>{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tahun</label>
                                        @php
                                        $year = date('Y');
                                        @endphp
                                        <select name="tahun" class="form-control">
                                            <option value="{{ $iku->tahun }}">Tahun saat ini {{ $iku->tahun }}
                                            </option>
                                            <option value="-- Pilih tahun --">-- Pilih tahun --</option>
                                            @for ($i=2018; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }}
                                                </option>
                                                @endfor
                                        </select>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="col-12">
                                        <textarea id="editor" name="thead_html">{!! $iku->thead_html !!}</textarea>
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
    document.addEventListener('DOMContentLoaded', function () {
        var targetDatasetSelect = document.getElementById('targetDataset');
        var form = document.querySelector('form'); // Gantilah dengan selektor form yang sesuai

        form.addEventListener('submit', function (e) {
            if (targetDatasetSelect.value === '') {
                e.preventDefault(); // Mencegah pengiriman form jika target dataset kosong
                alert('Harap pilih target dataset terlebih dahulu.');
            }
        });
    });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
</script>
@endpush