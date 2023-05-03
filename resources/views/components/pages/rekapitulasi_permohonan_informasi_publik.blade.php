@extends('layouts.app')

@section('title')
PPID
@endsection

@push('css')

@endpush

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>PPID</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Rekapitulasi Permohonan Informasi Publik</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Rekapitulasi Permohonan Informasi Publik.</h1>
</section>

<div class="container">
    <canvas id="myChart" height="100px"></canvas>
</div>

<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row">
        <div class="col-lg-12 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <h2 class="h1 mb-4">About</h2>
                <p class="fs-lg mb-0" style="text-indent: 20px">PPID adalah kepanjangan dari Pejabat Pengelola Informasi
                    dan Dokumentasi, dimana PPID berfungsi sebagai pengelola dan penyampai dokumen yang dimiliki oleh
                    badan publik sesuai dengan amanat UU 14/2008 tentang Keterbukaan Informasi Publik. Dengan keberadaan
                    PPID maka masyarakat yang akan menyampaikan permohonan informasi lebih mudah dan tidak berbelit
                    karena dilayani lewat satu pintu. Pejabat Pengelola Informasi dan Dokumentasi (PPID) adalah pejabat
                    yang bertanggung jawab di bidang penyimpanan, pendokumentasian, penyediaan, dan/atau pelayanan
                    informasi di badan publik. <br> <br>
                    <b>Pembina PPID</b> <br>
                    Kepala Dinas Tenaga Kerja dan Transmigrasi Provinsi Sulawesi Selatan
                    <hr>
                    <b>PPID Pembantu</b><br>
                    Sekretaris Dinas Tenaga Kerja dan Transmigrasi Provinsi Sulawesi Selatan
                    <hr>
                    <b>Admin</b><br>
                    Nurhalimah,S.Hum
                    <hr>
                    <b>Bidang Klasifikasi Informasi</b><br>
                    Bidang Pembinaan, Pelatihan, Pemagangan, Penempatan, dan Perluasan Kesempatan Kerja
                    Bidang Hubungan Industrial
                    Bidang Pengawasan Ketenagakerjaan
                    Bidang Ketransmigrasian
                    <hr>
                    <b>Bidang Layanan Informasi dan Dokumentasi</b><br>
                    Sub Bagian Program
                    Sub Bagian Umum, Kepegawaian, dan Hukum
                    Sub Bagian Keuangan
                    <hr>
                    <b>Bidang Fasilitasi Sengketa Informasi</b><br>
                    Sub Bagian Umum, Kepegawaian, dan Hukum
                    <hr>
                </p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($data) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'Diagram Data Permohonan Informasi',
          backgroundColor: 'rgb(255, 99, 132)',
          borderColor: 'rgb(255, 99, 132)',
          data: users,
        }]
      };

      const config = {
        type: 'line',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script>
@endpush
