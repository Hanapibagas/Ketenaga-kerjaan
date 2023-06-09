@extends('layouts.app')

@section('title')
Layanan
@endsection

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
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Permohonan
            Informasi Publik</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Permohonan Informasi Publik.</h1>
</section>

<div class="test">
    <div class="container">
        <style>
            .gambar {
                width: 1000px;
                height: 350px;
                margin-left: 150px
            }

            @media screen and (max-width: 992px) {
                .gambar {
                    height: 200px
                }
            }
        </style>
        <img class="gambar" src="{{ asset('assets/frontend/img/data/1666510441.png') }}" alt="">
    </div>
</div>

<div class="helo">
    <section class="container py-5 my-1 my-md-4 my-lg-5">
        <div class="row">
            <div class="col-lg-12 mb-4 mb-lg-0">
                <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                    <h2 class="h1 mb-4">About</h2>
                    <p class="fs-lg mb-0">
                        Jumlah permohonan informasi publik yang diterima: {{ $jumlahpemohon }}
                        <hr> <br>

                        <b>Hak-hak Pemohon Informasi Berdasarkan Undang-Undang
                            Nomor 14 Tahun 2008 tentang Keterbukaan Informasi Publik</b> <br><br>

                        <b>Pemohon Informasi berhak untuk meminta seluruh informasi yang berada di Badan Publik
                            kecuali</b>
                        <br>
                        (a) informasi yang apabila dibuka dan diberikan kepada pemohon informasi dapat: Menghambat
                        proses
                        penegakan hukum; Menganggu kepentingan perlindungan hak atas kekayaan intelektual dan
                        perlindungan
                        dari persaingan usaha tidak sehat; Membahayakan pertahanan dan keamanan Negara; Mengungkap
                        kekayaan
                        alam Indonesia; Merugikan ketahanan ekonomi nasional; Merugikan kepentingan hubungan luar
                        negeri;
                        Mengungkap isi akta otentik yang bersifat pribadi dan kemauan terakhir ataupun wasiat seseorang;
                        Mengungkap rahasia pribadi; Memorandum atau surat-suat antar Badan Publik atau intra Badan
                        Publik
                        yang menurut sifatnya dirahasiakan kecuali atas putusan Komisi Informasi atau Pengadilan;
                        Informasi
                        yang tidak boleh diungkapkan berdasarkan Undangundang. <br>
                        (b) Badan Publik juga dapat tidak memberikan informasi yang belum dikuasai atau
                        didokumentasikan.
                        PASTIKAN ANDA MENDAPAT TANDA BUKTI PERMOHONAN INFORMASI BERUPA NOMOR PENDAFTARAN KE PETUGAS
                        INFORMASI/PPID. Bila tanda bukti permohonan informasi tidak diberikan, tanyakan kepada petugas
                        informasi alasannya, mungkin permintaan informasi anda kurang lengkap.
                        Pemohon Informasi berhak mendapatkan pemberitahuan tertulis tentang diterima atau tidaknya
                        permohonan informasi dalam jangka waktu 10 (sepuluh) hari kerja sejak diterimanya permohonan
                        informasi oleh Badan Publik. Badan Publik dapat memperpanjang waktu untuk memberi jawaban
                        tertulis 1
                        x 7 hari kerja, dalam hal: informasi yang diminta belum dikuasai/didokumentasikan/ belum dapat
                        diputuskan apakah informasi yang diminta termasuk informasi yang dikecualikan atau tidak.
                        Biaya yang dikenakan bagi permintaan atas salinan informasi tidak dipungut biaya.
                        Apabila Pemohon Informasi tidak puas dengan keputusan Badan Publik (misal: menolak permintaan
                        Anda
                        atau memberikan hanya sebagian yang diminta), maka pemohon informasi dapat mengajukan keberatan
                        kepada atasan PPID dalam jangka waktu 30 (tiga puluh) hari kerja sejak permohonan informasi
                        ditolak/ditemukannya alasan keberatan lainnya. Atasan PPID wajib memberikan tanggapan tertulis
                        atas
                        keberatan yang diajukan Pemohon Informasi selambat- lambatnya 30 (tiga puluh) hari kerja sejak
                        diterima/dicatatnya pengajuan keberatan dalam register keberatan.
                        Apabila Pemohon Informasi tidak puas dengan keputusan Atasan PPID, maka pemohon informasi dapat
                        mengajukan keberatan kepada Komisi Informasi dalam jangka waktu 14 (empat belas) hari kerja
                        sejak
                        diterimanya keputusan atasan PPID oleh Pemohon Informasi Publik. <br><br>
                        Klik Link untuk mengajukan Permohonan Informasi Publik (<a
                            href="{{ route('form_permohonan_publik') }}">Klik di sini</a>)
                    </p>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection