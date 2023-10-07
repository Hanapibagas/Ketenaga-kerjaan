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
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('keberatan_publik') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Pengajuan
                Keberatan Informasi Publik</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Form Pengajuan Keberatan</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Form Pengajuan Keberatan.</h1>
</section>

<section class="position-relative pt-2 pt-lg-0 pb-5">
    <div class="container position-relative zindex-5 pb-2 pb-md-4 pb-lg-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <form action="{{ route('store_keberatan_publik') }}" method="POST" class="row needs-validation"
                    enctype="multipart/form-data">
                    @csrf
                    <div class="col-sm-12 mb-4">
                        <label for="fn" class="form-label">No. Pendaftaran Permohonan Informasi
                        </label>
                        <input type="text" class="form-control @error('no_pendaftaran') is-invalid @enderror"
                            name="no_pendaftaran">
                        @error('no_pendaftaran')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-4">
                        <label for="fn" class="form-label">Tujuan Penggunaan Informasi</label>
                        <input type="text" class="form-control  " name="tujuan_pengguna">
                        @error('tujuan_pengguna')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-4">
                        <label for="fn" class="form-label">Enter Captcha</label>
                        <input id="captcha" type="text" class="form-control @error('captcha') is-invalid @enderror"
                            placeholder="Enter Captcha" name="captcha">
                        @error('captcha')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-sm-12 mb-4">
                        <label for="fn" class="form-label">Captcha</label>
                        <div class="col-md-6 captcha">
                            <span style="width: 100px;">{!! captcha_img() !!}</span>
                            {{-- <button type="button" class="btn btn-danger" class="reload" id="reload">
                                &#x21bb;
                            </button> --}}
                        </div>
                        @error('tujuan_pengguna')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="col-12 text-center pt-2 pt-md-3 pt-lg-4">
                        <button class="btn btn-primary shadow-primary btn-lg">Kirim Keberatan Publik</button>
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
@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
    $('#reload').click(function () {
        $.ajax({
            type: 'GET',
            url: 'getRelodKeberatan',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });
</script>
@endpush