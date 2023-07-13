@extends('layouts.dashboardadminsuper')

@section('title')
Akun Pengguna
@endsection

@section('content')
<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Tambah Akun Pengguna</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('index_tambah_penguuna') }}">
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
                        <h6 class="mb-25">Akun Pengguna</h6>
                        <form action="{{ route('store_pengguna') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Email</label>
                                        <select id="select-state" name="email"
                                            class="form-select @error('email') is-invalid @enderror">
                                            <option value="">Pengguna</option>
                                            <option value="">-- Kab/Kota --</option>
                                            <option value="soppeng@gmail.com">soppeng</option>
                                            <option value="takalar@gmail.com">takalar</option>
                                            <option value="tanahtoraja@gmail.com">tanahtoraja</option>
                                            <option value="torajautara@gmail.com">torajautara</option>
                                            <option value="wajo@gmail.com">wajo</option>
                                            <option value="makassar@gmail.com">makassar</option>
                                            <option value="palopo@gmail.com">palopo</option>
                                            <option value="parepare@gmail.com">parepare</option>
                                            <option value="luwutimur@gmail.com">luwutimur</option>
                                            <option value="luwuutara@gmail.com">luwuutara</option>
                                            <option value="maros@gmail.com">maros</option>
                                            <option value="pangkep@gmail.com">pangkep</option>
                                            <option value="pinrang@gmail.com">pinrang</option>
                                            <option value="kepulauanselayar@gmail.com">kepulauanselayar
                                            </option>
                                            <option value="sidrap@gmail.com">sidrap</option>
                                            <option value="sinjai@gmail.com">sinjai</option>
                                            <option value="barru@gmail.com">barru</option>
                                            <option value="bone@gmail.com">bone</option>
                                            <option value="bulukumba@gmail.com">bulukumba</option>
                                            <option value="enrekang@gmail.com">enrekang</option>
                                            <option value="gowa@gmail.com">gowa</option>
                                            <option value="luwu@gmail.com">luwu</option>
                                            <option value="bantaeng@gmail.com">bantaeng</option>
                                            <option value="">-- UPT --</option>
                                            <option value="uptbalaipelatihankerja@gmail.com">UPT Balai Pelatihan Kerja
                                            </option>
                                            <option value="uptbalaipelatihankerjawilayahI@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah I
                                            </option>
                                            <option value="uptbalaipelatihankerjawilayahII@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah II
                                            </option>
                                            <option value="uptbalaipelatihankerjawilayahIII@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah
                                                III</option>
                                            <option value="uptbalaipelatihankerjawilayahIV@gmail.com">UPT Pengawasan
                                                Ketenagakerjaan Wilayah IV
                                            </option>
                                            <option value="">-- Bidang --</option>
                                            <option value="bidangpengembanganketenagakerjaan@gmail.com">Bidang
                                                Pengembangan Ketenagakerjaan
                                            </option>
                                            <option value="bidangpengawasanketenagakerjaan@gmail.com">Bidang
                                                Pengawasan Ketenagakerjaan
                                            </option>
                                            <option value="bidanghubunganindustrial@gmail.com">Bidang
                                                Hubungan Industrial
                                            </option>
                                            <option value="bidangketransmigrasian@gmail.com">Bidang
                                                Ketransmigrasian
                                            </option>
                                            <option value="sekretariat@gmail.com">Sekretariat
                                            </option>
                                        </select>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="input-style-1">
                                        {{-- <label>Role</label> --}}
                                        <input type="hidden" id="role-input" name="roles" readonly>
                                        @error('roles')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn success-btn btn-hover m-2">Simpan Data</button>
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
    document.getElementById('select-state').addEventListener('change', function() {
      var selectValue = this.value;
      var roleInput = document.getElementById('role-input');

      if (selectValue == 'soppeng@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'takalar@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'takalar@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'tanahtoraja@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'torajautara@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'wajo@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'makassar@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'palopo@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'parepare@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'luwutimur@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'luwuutara@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'maros@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'pangkep@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'pinrang@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'kepulauanselayar@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'sidrap@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'sinjai@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'barru@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'bone@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'bulukumba@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'enrekang@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'gowa@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'luwu@gmail.com') {
        roleInput.value = 'kab/kota';
      }else if (selectValue == 'bantaeng@gmail.com') {
        roleInput.value = 'kab/kota';
      } else if (selectValue == 'uptbalaipelatihankerja@gmail.com') {
        roleInput.value = 'upt';
      } else if (selectValue == 'uptbalaipelatihankerjawilayahI@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'uptbalaipelatihankerjawilayahI@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'uptbalaipelatihankerjawilayahIII@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'uptbalaipelatihankerjawilayahIV@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'bidangpengembanganketenagakerjaan@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'bidangpengawasanketenagakerjaan@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'bidanghubunganindustrial@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'bidangketransmigrasian@gmail.com') {
        roleInput.value = 'upt';
      }else if (selectValue == 'sekretariat@gmail.com') {
        roleInput.value = 'upt';
      }else {
        roleInput.value = '';
      }
    });
</script>
@endpush