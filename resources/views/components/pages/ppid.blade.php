@extends('layouts.app')

@section('title')
PPID
@endsection

@section('content')
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

    .about {
        margin-top: -110px
    }

    .struktur {
        margin-left: -80px;
        margin-top: 50px;
    }

    @media screen and (max-width: 992px) {
        .about {
            margin-top: -70px
        }
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item">
            PPID
        </li>
        <li class="breadcrumb-item active" aria-current="page">Profile PPID</li>
    </ol>
</nav>

<div class="helo">
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h1 mb-4 about">Tentang</h2>
                    <p class="fs-lg mb-0" style="text-indent: 20px">PPID adalah kepanjangan dari Pejabat Pengelola
                        Informasi
                        dan Dokumentasi, dimana PPID berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki
                        oleh
                        badan publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik. Dengan
                        keberadaan
                        PPID maka masyarakat yang akan menyampaikan permohonan informasi lebih mudah dan tidak berbelit
                        karena dilayani lewat satu pintu. Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah
                        pejabat
                        yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan
                        informasi di badan publik.
                    </p>
                    <div class="table-responsive mb-3" style="margin-top: 50px">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Jabatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ( $organisasi as $key => $data )
                                <tr>
                                    <th scope="row">{{ $key+1 }}</th>
                                    <td style="text-transform:uppercase;">{{ $data->nama }}</td>
                                    <td style="text-transform:uppercase;">{{ $data->jabatan }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection