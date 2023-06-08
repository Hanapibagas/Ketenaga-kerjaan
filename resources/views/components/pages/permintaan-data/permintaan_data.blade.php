@extends('layouts.app')

@section('title')
Dataset
@endsection

@section('content')
<style>
    .tab-container {
        width: 100%;
    }

    .tab {
        display: flex;
    }

    .tab-link {
        background-color: #f2f2f2;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 10px 20px;
        flex: 1;
        text-align: center;
    }

    .tab-link.active {
        background-color: #ccc;
    }

    .tab-content {
        display: none;
        padding: 20px;
    }

    .tab-content h2 {
        margin-top: 0;
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Permintaan data</li>
    </ol>
</nav>

<div class="container">
    <div class="tab-container">
        <div class="tab">
            <button class="tab-link active" onclick="openTab(event, 'tab1')">Data Mikro</button>
            <button class="tab-link" onclick="openTab(event, 'tab2')">Data Aggregte</button>
            {{-- <button class="tab-link" onclick="openTab(event, 'tab3')">METADATA</button> --}}
        </div>
        <div class="tab-content" id="tab1">
            <form action="" method="POST" class="row needs-validation" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">Nama Permintaan Data</label>
                    <input type="text" class="form-control @error('no_pendaftaran') is-invalid @enderror"
                        name="no_pendaftaran">
                    @error('no_pendaftaran')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">Tujuan Permintaan Data</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option value="">- - Pilih data - -</option>
                        <option value="Penyusunan kebijakan">Penyusunan kebijakan</option>
                        <option value="Bahan penelitian/Kajian">Bahan penelitian/Kajian</option>
                        <option value="Bahan Rapat/Presentasi">Bahan Rapat/Presentasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    @error('tujuan_pengguna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">Deskripsi Permintaan Data</label>
                    <textarea type="text" rows="5" class="form-control @error('tujuan_pengguna') is-invalid @enderror"
                        name="tujuan_pengguna"></textarea>
                    @error('tujuan_pengguna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">File Pendukung</label>
                    <input type="file" class="form-control @error('tujuan_pengguna') is-invalid @enderror"
                        name="tujuan_pengguna">
                    @error('tujuan_pengguna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                    <button class="btn btn-primary shadow-primary btn-lg">Kirim</button>
                </div>
            </form>
        </div>
        <div class="tab-content" id="tab2">
            <form action="" method="POST" class="row needs-validation" enctype="multipart/form-data">
                @csrf
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">Pilih Data</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option value="">- - Pilih data - -</option>
                        <option value="Data Prioritas Ketenagakerja SDI Tahun 2022">Data Prioritas Ketenagakerja SDI
                            Tahun 2022</option>
                        <option value="Pengawasan Ketenagakerjaan dan K3">Pengawasan Ketenagakerjaan dan K3</option>
                        <option value="Penempatan Tenaga Kerja dan PKK">Penempatan Tenaga Kerja dan PKK</option>
                        <option value="Pelatihan dan Produktivitas">Pelatihan dan Produktivitas</option>
                        <option value="Pekerja Terdampak Pandemi Covid-19">Pekerja Terdampak Pandemi Covid-19</option>
                        <option value="Not in Employment, Education and Training">Not in Employment, Education and
                            Training</option>
                        <option value="Hubungan Industri dan Jamsostek">Hubungan Industri dan Jamsostek</option>
                        <option value="Pengagguran Terbuka">Pengagguran Terbuka</option>
                        <option value="Penduduk Yang berkerja">Penduduk Yang berkerja</option>
                        <option value="Penduduk Usia Kerja">Penduduk Usia Kerja</option>
                    </select>
                    @error('no_pendaftaran')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">Tujuan Permintaan Data</label>
                    <select class="form-select form-select-lg" name="" id="">
                        <option value="">- - Pilih data - -</option>
                        <option value="Penyusunan kebijakan">Penyusunan kebijakan</option>
                        <option value="Bahan penelitian/Kajian">Bahan penelitian/Kajian</option>
                        <option value="Bahan Rapat/Presentasi">Bahan Rapat/Presentasi</option>
                        <option value="Penyusunaan Skripsi/Tesis/Disertasi">Penyusunaan Skripsi/Tesis/Disertasi</option>
                        <option value="Lainnya">Lainnya</option>
                    </select>
                    @error('tujuan_pengguna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">Catatab Tambahan</label>
                    <textarea type="text" rows="5" class="form-control @error('tujuan_pengguna') is-invalid @enderror"
                        name="tujuan_pengguna"></textarea>
                    @error('tujuan_pengguna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-sm-12 mb-4">
                    <label for="fn" class="form-label">File Pendukung</label>
                    <input type="file" class="form-control @error('tujuan_pengguna') is-invalid @enderror"
                        name="tujuan_pengguna">
                    @error('tujuan_pengguna')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                    <button class="btn btn-primary shadow-primary btn-lg">Kirim</button>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection

@push('js')
<script>
    function openTab(event, tabName) {
  var i, tabContent, tabLinks;
  tabContent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabContent.length; i++) {
    tabContent[i].style.display = "none";
  }
  tabLinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tabLinks.length; i++) {
    tabLinks[i].className = tabLinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  event.currentTarget.className += " active";
}
</script>
@endpush