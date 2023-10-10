@extends('layouts.dashboardadminkab')

@section('title')
Dashboard {{ Auth::user()->roles }}
@endsection

@section('content')
<div class="container-fluid">
    <div class="title-wrapper pt-30">
        <div class="row align-items-center">
            <div class="col-md-6">
                <div class="title mb-30">
                    <h2>Dashboard {{ Auth::user()->roles }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div style="width: 50%; margin: 0 auto;">
            <canvas id="datasetChart"></canvas>
        </div>

        <div style="width: 50%; margin: 0 auto;">
            <canvas id="ikuChart"></canvas>
        </div>

        <div style="width: 50%; margin: 0 auto;">
            <canvas id="lppdChart"></canvas>
        </div>

        <div style="width: 50%; margin: 0 auto;">
            <canvas id="pengukuranKinerjaChart"></canvas>
        </div>
    </div>
</div>
@endsection

@push('add-script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
<script>
    var datasetData = {
        labels: [
            'Bala Pelatihan Kerja',
            'Pengawasan Ketenagakerjaan Wilayah I',
            'Pengawasan Ketenagakerjaan Wilayah II',
            'Pengawasan Ketenagakerjaan Wilayah III',
            'Pengawasan Ketenagakerjaan Wilayah IV',
            'Bidang Pengembangan Ketenagakerjaan',
            'Bidang Pengawasan Ketenagakerjaan',
            'Bidang Hubungan Industrial',
            'Bidang Ketransmigrasi',
            'Sekretariat',
        ],
        datasets: [{
            label: 'Jumlah Dataset',
            data: [
                {{ $balaipelatihankerja }},
                {{ $pengawasanketenagarkerjaanwilayahI }},
                {{ $pengawasanketenagarkerjaanwilayahII }},
                {{ $pengawasanketenagarkerjaanwilayahIII }},
                {{ $pengawasanketenagarkerjaanwilayahIV }},
                {{ $bidangpengembanganketenagakerjaan }},
                {{ $bidangpengawasanketenagakerjaan }},
                {{ $bidanghubunganindustrial }},
                {{ $bidangketransmigrasi }},
                {{ $sekretariat }},
            ],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var ikuData = {
        labels: [
            'Bala Pelatihan Kerja',
            'Pengawasan Ketenagakerjaan Wilayah I',
            'Pengawasan Ketenagakerjaan Wilayah II',
            'Pengawasan Ketenagakerjaan Wilayah III',
            'Pengawasan Ketenagakerjaan Wilayah IV',
            'Bidang Pengembangan Ketenagakerjaan',
            'Bidang Pengawasan Ketenagakerjaan',
            'Bidang Hubungan Industrial',
            'Bidang Ketransmigrasi',
            'Sekretariat',
        ],
        datasets: [{
            label: 'Jumlah IKU',
            data: [
                {{ $balaipelatihankerjaIku }},
                {{ $pengawasanketenagarkerjaanwilayahIIku }},
                {{ $pengawasanketenagarkerjaanwilayahIIIku }},
                {{ $pengawasanketenagarkerjaanwilayahIIIIku }},
                {{ $pengawasanketenagarkerjaanwilayahIVIku }},
                {{ $bidangpengembanganketenagakerjaanIku }},
                {{ $bidangpengawasanketenagakerjaanIku }},
                {{ $bidanghubunganindustrialIku }},
                {{ $bidangketransmigrasiIku }},
                {{ $sekretariatIku }},
            ],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var lppdData = {
        labels: [
            'Bala Pelatihan Kerja',
            'Pengawasan Ketenagakerjaan Wilayah I',
            'Pengawasan Ketenagakerjaan Wilayah II',
            'Pengawasan Ketenagakerjaan Wilayah III',
            'Pengawasan Ketenagakerjaan Wilayah IV',
            'Bidang Pengembangan Ketenagakerjaan',
            'Bidang Pengawasan Ketenagakerjaan',
            'Bidang Hubungan Industrial',
            'Bidang Ketransmigrasi',
            'Sekretariat',
        ],
        datasets: [{
            label: 'Jumlah LPPD',
            data: [
                {{ $balaipelatihankerjaLppd }},
                {{ $pengawasanketenagarkerjaanwilayahILppd }},
                {{ $pengawasanketenagarkerjaanwilayahIILppd }},
                {{ $pengawasanketenagarkerjaanwilayahIIILppd }},
                {{ $pengawasanketenagarkerjaanwilayahIVLppd }},
                {{ $bidangpengembanganketenagakerjaanLppd }},
                {{ $bidangpengawasanketenagakerjaanLppd }},
                {{ $bidanghubunganindustrialLppd }},
                {{ $bidangketransmigrasiLppd }},
                {{ $sekretariatLppd }},
            ],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    var pengukuranKinerjaData = {
        labels: [
            'Bala Pelatihan Kerja',
            'Pengawasan Ketenagakerjaan Wilayah I',
            'Pengawasan Ketenagakerjaan Wilayah II',
            'Pengawasan Ketenagakerjaan Wilayah III',
            'Pengawasan Ketenagakerjaan Wilayah IV',
            'Bidang Pengembangan Ketenagakerjaan',
            'Bidang Pengawasan Ketenagakerjaan',
            'Bidang Hubungan Industrial',
            'Bidang Ketransmigrasi',
            'Sekretariat',
        ],
        datasets: [{
            label: 'Jumlah Pengukuran Kinerja',
            data: [
                {{ $balaipelatihankerjaPengkuranKinerja }},
                {{ $pengawasanketenagarkerjaanwilayahIPengkuranKinerja }},
                {{ $pengawasanketenagarkerjaanwilayahIIPengkuranKinerja }},
                {{ $pengawasanketenagarkerjaanwilayahIIIPengkuranKinerja }},
                {{ $pengawasanketenagarkerjaanwilayahIVPengkuranKinerja }},
                {{ $bidangpengembanganketenagakerjaanPengkuranKinerja }},
                {{ $bidangpengawasanketenagakerjaanPengkuranKinerja }},
                {{ $bidanghubunganindustrialPengkuranKinerja }},
                {{ $bidangketransmigrasiPengkuranKinerja }},
                {{ $sekretariatPengkuranKinerja }},
            ],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    };

    // Membuat dan menampilkan masing-masing grafik batang
    var datasetCtx = document.getElementById('datasetChart').getContext('2d');
    var datasetChart = new Chart(datasetCtx, {
        type: 'bar',
        data: datasetData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ikuCtx = document.getElementById('ikuChart').getContext('2d');
    var ikuChart = new Chart(ikuCtx, {
        type: 'bar',
        data: ikuData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var lppdCtx = document.getElementById('lppdChart').getContext('2d');
    var lppdChart = new Chart(lppdCtx, {
        type: 'bar',
        data: lppdData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var pengukuranKinerjaCtx = document.getElementById('pengukuranKinerjaChart').getContext('2d');
    var pengukuranKinerjaChart = new Chart(pengukuranKinerjaCtx, {
        type: 'bar',
        data: pengukuranKinerjaData,
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
</script>
@endpush