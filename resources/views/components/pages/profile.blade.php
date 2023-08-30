@extends('layouts.app')

@section('title')
Profile
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('assets/frontend/css/profile.css') }}">
@endpush

@section('content')
<style>
    .test {
        background-repeat: no-repeat;
        background-position: top left;
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-side-data.24d7ba5a.png');
    }

    .helo {
        background-position: top right;
        background-repeat: no-repeat;
        background-size: contain;
        background-image: url('assets/frontend/img/data/bg-side-info.1c2950dc.png');
    }

    .about {
        margin-top: -100px;
    }

    @media screen and (max-width: 992px) {
        .about {
            margin-top: -60px;
        }
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

@php
use App\Models\ProfieDinas;
$profile = ProfieDinas::first();
@endphp

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Profil {{ $profile->nama }}</h1>
</section>

<div class="helo">
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row about">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h1 mb-4">Tentang</h2>
                    <p class="fs-lg mb-0" style="text-indent: 20px">
                        {!! $profile->deskripsi !!}
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>

{{-- <section class="container d-sm-flex align-items-center justify-content-between pb-4 mb-2 mb-lg-3">
    <h1 class="mb-sm-0 me-sm-3">Profile Kepala Dinas</h1>
</section>
<section class="bg-secondary py-5 test">
    <div class="container py-2 py-md-4 py-lg-5">
        <div class="row">
            <div class="col-md-4">
                <div class="position-relative d-flex h-100">
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center"
                        style="background-image: url({{ asset('assets/frontend/img/profile/kepala-dinas.jpg') }});">
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
                    <span
                        class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                        <i class="bx bxs-quote-left"></i>
                    </span>
                    <blockquote class="card-body mt-2 mb-0">
                        <p class="fs-lg">Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius
                            mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt
                            imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat
                            tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris.</p>
                    </blockquote>
                    <figcaption class="card-footer border-0 d-sm-flex pt-0 mt-n3 mt-lg-0">
                        <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-4">
                            <img src="{{ asset('assets/frontend/img/profile/kepala-dinas.jpg') }}" width="48"
                                class="d-md-none rounded-circle" alt="Ralph Edwards">
                            <div class="ps-3 ps-md-0">
                                <h5 class="fw-semibold lh-base mb-0">Ardiles Saggaf, S.STP, M.Si</h5>
                                <span class="fs-sm text-muted">Kepala Dinas Tenaga Kerja dan Transmigrasi Pemerintah
                                    Provinsi Sulawesi Selatan</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section> --}}

<section class="container py-5 my-md-3 my-lg-5">
    <div class="d-lg-flex align-items-center justify-content-between py-4 mt-lg-2">
        <h1 class="me-3">Struktur Organisasi Disnakertrans Prov Sulsel</h1>
        <div class="position-relative" style="min-width: 300px;">
            <form action="{{ route('cari_data_pegarawai') }}">
                <input type="text" name="search" class="form-control pe-5" placeholder="Search courses">
                <i class="bx bx-search text-nav fs-lg position-absolute top-50 end-0 translate-middle-y me-3"></i>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="propill">
            <ul class="hirarki1">
                <li class="iconp icon">
                    <div>
                        <span class="item" onclick="toggleHierarchy(this)">Kepala Dinas</span>
                        <ul class="hirarki2" style="margin-left: 10px">
                            <li class="iconp icon">
                                <div>
                                    <span class="item" onclick="toggleHierarchy(this)">Sekretaris Dinas</span>
                                    <ul class="hirarki3 pro2" style="margin-left: 10px">
                                        <li class="iconp icon">
                                            <span class="item" onclick="toggleHierarchy(this)">Kepala Subbagian
                                                Umum</span>
                                            <ul class="hirarki4" style="margin-top: 5px; margin-left: 10px">
                                                <li class="pop">NUNNI, SE</li>
                                                <li class="pop">AMRA NURHATI ASLI, S.Sos</li>
                                                <li class="pop">NIRMA JAYA, SE</li>
                                                <li class="pop">M. RYAN KHALID SYAIFULLAH, S.H</li>
                                                <li class="pop">HARLINA RAMLI, S.Sos</li>
                                                <li class="pop">AISYAH RAHMI MASUD</li>
                                                <li class="pop">PETRUS RANTE</li>
                                                <li class="pop">AKBAR TANJUNG</li>
                                                <li class="pop">HILMAN MUIS</li>
                                            </ul>
                                        </li>
                                        <li class="iconp icon">
                                            <span class="item" onclick="toggleHierarchy(this)">Kepala Subbagian
                                                Keuangan</span>
                                            <ul class="hirarki4" style="margin-top: 5px; margin-left: 10px">
                                                <li class="pop">ANDI ACHWAL, ST</li>
                                                <li class="pop">JUMRIATI, SE</li>
                                                <li class="pop">SUHAENI, S.Kom</li>
                                                <li class="pop">PUJI WIDIASTUTI, A.Md</li>
                                                <li class="pop">DAMITA, SE</li>
                                                <li class="pop">ILHAM AWALUDDIN</li>
                                                <li class="pop">ANDI FATRIA P. </li>
                                            </ul>
                                        </li>
                                        <li class="iconp icon">
                                            <span class="item" onclick="toggleHierarchy(this)">Kepala Subbagian
                                                Program</span>
                                            <ul class="hirarki4" style="margin-top: 5px; margin-left: 10px">
                                                <li class="pop">ANDI ACHWAL, ST</li>
                                                <li class="pop">JUMRIATI, SE</li>
                                                <li class="pop">SUHAENI, S.Kom</li>
                                                <li class="pop">PUJI WIDIASTUTI, A.Md</li>
                                                <li class="pop">DAMITA, SE</li>
                                                <li class="pop">ILHAM AWALUDDIN</li>
                                                <li class="pop">ANDI FATRIA P. </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="iconp icon">
                                <div>
                                    <span class="item" onclick="toggleHierarchy(this)">Kepala Bidang Pengawasan
                                        Ketenagakerjaan</span>
                                    <ul class="hirarki3 pro2" style="margin-left: 10px">
                                        <li class="icon">
                                            <span class="item" onclick="toggleHierarchy(this)">Kepala Seksi Kesehatan
                                                dan Keselamatan Kerja</span>
                                            <ul class="hirarki4" style="margin-top: 5px; margin-left: 10px">
                                                <li class="pop">MANIAN EFENDY, SE, MM</li>
                                                <li class="pop">LUKMAN, SE</li>
                                                <li class="pop">MOKHTAR SURYA, S.E</li>
                                                <li class="pop">IRA IRIANTY, SE., M.Si</li>
                                                <li class="pop">ANDI YULIA. M, ST., MT</li>
                                                <li class="pop">ISHAK CHARLES TANGDIALLA, S.STP</li>
                                                <li class="pop">WANI AMPULEMBANG, SKM</li>
                                                <li class="pop">FEBIYANTI AFITIA ROHMAN, S.KM</li>
                                                <li class="pop">DASRILANO, S.SKM, M,Adm.Kes</li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>

    @foreach ( $profiles as $data )
    <div class="modal fade" id="exampleModal-{{ $data->id }}" tabindex="-1" raria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body" style="text-align: center">
                    <style>
                        .cardheader {
                            background: url('assets/frontend/img/card-bg.jpg');
                            background-size: cover;
                            height: 135px;
                        }
                    </style>
                    <div class="cardheader"></div>
                    <style>
                        .avatar {
                            position: relative;
                            top: -50px;
                            margin-bottom: -50px;
                        }
                    </style>
                    <div class="avatar">
                        <img style="width: 100px; height: 100px; max-width: 100px; max-height: 100px; border-radius: 50%; border: 5px solid rgba(255, 255, 255, .5)"
                            src="{{ Storage::url($data->foto) }}" alt="">
                    </div>
                    <div class="info">
                        <style>
                            .desc {
                                font-size: 13px;
                            }

                            .title {
                                font-size: 28px;
                            }
                        </style>
                        <div class="title">{{ $data->nama }}</div>
                        <div class="desc">Jabatan : {{ $data->jabatan }}</div>
                        <div class="desc">Pangkat : {{ $data->pangkat }}</div>
                        <div class="desc" style="margin-bottom: 10px;">Pendidikan : {{ $data->pendidikan }}</div>
                        <hr>
                        <div class="desc" style="margin-top: 20px;">
                            {{ $data->biodata }}
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button style="margin-right: 183px; " type="button" class="btn btn-secondary"
                        data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</section>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.7.0.min.js"
    integrity="sha256-2Pmvv0kuTBOenSvLm6bvfBSSHrUJ+3A7x6P5Ebd07/g=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
    integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
</script>
<script>
    function toggleHierarchy(element) {
            const ulElement = element.nextElementSibling;
            const items = element.closest('.item'); // Temukan elemen terdekat dengan kelas .item (elemen <li>)
            if (ulElement && items) {
                ulElement.classList.toggle("active");
                items.classList.toggle('active'); // Menambahkan kelas .active pada elemen <li> dengan kelas .item
            }
        }
</script>
@endpush