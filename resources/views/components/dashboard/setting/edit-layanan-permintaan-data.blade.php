@extends('layouts.dashboard')

@section('title')
Details Form Permintaan Data
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

<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Edit Permintaan Data</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('getIndexPermintaanData') }}">
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
                        <h6 class="mb-25">Permintaan Data</h6>
                        <form action="{{ route('putPermintaanData', $permintaan_data->id) }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="email" class="form-control" name="email" readonly
                                            value="{{ $permintaan_data->email }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nama<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="email" class="form-control" name="email" readonly
                                            value="{{ $permintaan_data->nama }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nomor Handphone<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <input type="email" class="form-control" name="email" readonly
                                            value="{{ $permintaan_data->no_tlpn }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Nomor KTP<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="email" class="form-control" name="email" readonly
                                            value="{{ $permintaan_data->no_ktp }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Alamat<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="email" class="form-control" name="email" readonly
                                            value="{{ $permintaan_data->alamat }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Pekerjaan<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <input type="email" class="form-control" name="email" readonly
                                            value="{{ $permintaan_data->pekerjaan }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Rician Data Yang dibutuhkan<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <textarea readonly name="deskripsi">{{ $permintaan_data->rincian }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Tujuan Permintaan Data<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <textarea readonly name="tujuan">{{ $permintaan_data->tujuan }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Foto KTP<i class="text-danger" style="font-size: 14px;">*</i></label>
                                        <img src="{{ Storage::url($permintaan_data->foto_ktp) }}" alt=""
                                            style="width: 150px; margin-top: 10px; cursor: pointer;"
                                            class="img-thumbnail" id="fotoKTP">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Surat Pengajuan Permintaan Data<i class="text-danger"
                                                style="font-size: 14px;">*</i></label>
                                        <img src="{{ Storage::url($permintaan_data->foto_pengajuan) }}" alt=""
                                            style="width: 150px; margin-top: 10px; cursor: pointer;"
                                            class="img-thumbnail" id="suratPengajuan">
                                    </div>
                                </div>
                                <div class="input-style-1">
                                    <label style="font-size: 20px;">Status</label>
                                    <select name="status" class="form-select">
                                        <option value="Status Saat Ini">Status Saat Ini {{ $permintaan_data->status }}
                                        </option>
                                        <option value="">-- Silahkan Pilih --</option>
                                        <option value="terima">Terima</option>
                                        <option value="tolak">Tolak</option>
                                    </select>
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

<div class="modal fade" id="gambarModal" tabindex="-1" role="dialog" aria-labelledby="gambarModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="gambarModalLabel">Gambar</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <img src="" alt="" style="width: 100%;" id="modalImage">
            </div>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script>
    $(document).ready(function () {
        // Event click untuk gambar KTP
        $('#fotoKTP').click(function () {
            var imageUrl = $(this).attr('src');
            $('#modalImage').attr('src', imageUrl);
            $('#gambarModalLabel').text('Foto KTP');
            $('#gambarModal').modal('show');
        });

        // Event click untuk gambar Surat Pengajuan Permintaan Data
        $('#suratPengajuan').click(function () {
            var imageUrl = $(this).attr('src');
            $('#modalImage').attr('src', imageUrl);
            $('#gambarModalLabel').text('Surat Pengajuan Permintaan Data');
            $('#gambarModal').modal('show');
        });
    });
</script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('deskripsi');
    CKEDITOR.replace('tujuan');
</script>
@endpush