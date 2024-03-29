@extends('layouts.app')

@section('title')
Layanan
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

<style>
    .test {
        background-repeat: no-repeat;
        background-position: top left;
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-side-data.24d7ba5a.png');
    }

    .biru {
        background-position: top right;
        background-repeat: no-repeat;
        background-image: url('assets/frontend/img/data/bg-header-data.14a37054.png');
    }

    .helo {
        background-position: top right;
        background-repeat: no-repeat;
        background-image: url('assets/frontend/img/data/bg-side-info.1c2950dc.png');
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('permohonan_publik') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Permohonan
                Informasi Publik</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Form Permohonan Informasi Publik</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Form Permohonan Informasi Publik.</h1>
</section>

<div class="helo">
    <section class="position-relative pt-2 pt-lg-0 pb-5">
        <div class="container position-relative zindex-5 pb-2 pb-md-4 pb-lg-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 col-md-10">
                    <form action="{{ route('store_permohonan_publik') }}" method="POST" class="row needs-validation"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Email<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="text" class="form-control" name="email">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Nama<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="text" class="form-control " name="nama">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Nomor Handphone<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="text" class="form-control " name="no_hp">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Nomor KTP<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="text" class="form-control" name="no_ktp">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Nomor Pengesahan</label>
                            <input type="text" class="form-control" name="nomor_pengesahaan">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Alamat<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="text" class="form-control" name="alamat">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Pekerjaan<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="text" class="form-control " name="pekerjaan">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Tanggal<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="date" class="form-control" name="tahun">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label ">Rincian Informasi Yang Dibutuhkan<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <textarea type="text" class="form-control" name="rincian"></textarea>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Tujuan Permohonan Informasi<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <textarea type="text" class="form-control" name="tujuan"></textarea>
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Upload Foto KTP<i class="text-danger"
                                    style="font-size: 14px;">*</i></label>
                            <input type="file" class="form-control " name="foto_ktp">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="fn" class="form-label">Enter Captcha</label>
                            <input id="captcha" type="text" class="form-control" placeholder="Enter Captcha"
                                name="captcha">
                        </div>
                        <div class="col-sm-12 mb-4">
                            <label for="captcha" class="form-label">Captcha</label>
                            <div class="col-md-6 captcha">
                                <span id="captchaContainer">{!! captcha_img('default') !!}</span>
                                <button type="button" class="btn btn-danger" id="reload" onclick="reloadCaptcha()">
                                    &#x21bb;
                                </button>
                            </div>
                        </div>
                        <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                            <button class="btn btn-primary shadow-primary btn-lg" type="submit">Kirim Permohonan
                                Publik</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="position-absolute end-0 bottom-0 text-primary">
            <svg width="469" height="343" viewBox="0 0 469 343" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                    d="M273.631 680.872C442.436 768.853 639.315 708.216 717.593 558.212C795.871 408.208 732.941 212.157 564.137 124.176C395.333 36.195 198.453 96.8326 120.175 246.836C41.8972 396.84 104.827 592.891 273.631 680.872ZM236.335 752.344C440.804 858.914 688.289 788.686 789.109 595.486C889.928 402.286 805.903 159.274 601.433 52.7043C396.964 -53.8654 149.479 16.3623 48.6595 209.562C-52.1598 402.762 31.8652 645.774 236.335 752.344Z"
                    fill="currentColor" />
                <path opacity="0.08" fill-rule="evenodd" clip-rule="evenodd"
                    d="M298.401 633.404C434.98 704.59 598.31 656.971 664.332 530.451C730.355 403.932 675.946 242.827 539.367 171.642C402.787 100.457 239.458 148.076 173.435 274.595C107.413 401.114 161.822 562.219 298.401 633.404ZM288.455 652.464C434.545 728.606 611.369 678.429 683.403 540.391C755.437 402.353 695.402 228.725 549.312 152.583C403.222 76.4404 226.398 126.617 154.365 264.655C82.331 402.693 142.365 576.321 288.455 652.464Z"
                    fill="currentColor" />
            </svg>
        </div>
    </section>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        // Menangani pengiriman formulir
        $('form').submit(function(event) {
            var emptyFields = false;

            // Loop melalui semua elemen input dalam formulir
            $(this).find('input, textarea, select').each(function() {
                if ($(this).attr('name') === 'nomor_pengesahaan') {
                    return true; // Lewati input ini
                }
                if ($(this).val() === '') {
                    emptyFields = true;
                    $(this).addClass('is-invalid'); // Tambahkan kelas is-invalid ke input kosong
                } else {
                    $(this).removeClass('is-invalid'); // Hapus kelas is-invalid dari input yang diisi
                }
            });

            // Jika ada input yang kosong, mencegah pengiriman formulir
            if (emptyFields) {
                event.preventDefault();
                alert('Harap isi semua kolom yang diperlukan.');
            }
        });
    });
    // Fungsi untuk mereload gambar captcha
    function reloadCaptcha() {
        // Mendapatkan elemen kontainer captcha
        var captchaContainer = document.getElementById('captchaContainer');

        // Membuat elemen gambar captcha baru
        var newCaptchaImage = document.createElement('img');
        newCaptchaImage.src = "{{ captcha_src('default') }}" + "?" + Date.now();
        newCaptchaImage.alt = "Captcha Image";

        // Mengganti elemen gambar captcha yang ada dengan yang baru
        captchaContainer.innerHTML = ''; // Menghapus elemen gambar captcha yang ada
        captchaContainer.appendChild(newCaptchaImage); // Menambahkan elemen gambar captcha yang baru
    }
</script>
<script src="https://cdn.ckeditor.com/4.19.1/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace('rincian');
    CKEDITOR.replace('tujuan');
</script>
@endpush