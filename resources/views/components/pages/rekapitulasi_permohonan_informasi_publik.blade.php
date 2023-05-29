@extends('layouts.app')

@section('title')
PPID
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item">
            <a>PPID</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Rekapitulasi Permohonan Informasi Publik</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Rekapitulasi Permohonan Informasi Publik.</h1>
</section>

<div class="container">
    <form action="{{ route('filter_tahun_rekapitulasi') }}" method="POST">
        @csrf
        <div class="d-md-flex mb-3">
            @php
            $year = date('Y');
            @endphp
            <select name="tahun" class="form-select me-md-4 mb-2 mb-md-0" style="min-width: 240px;">
                <option value="-- Pilih tahun --">- - Pilih tahun - -</option>
                @for ($i=2022; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }}
                    </option>
                    @endfor
            </select>
            <button class="btn btn-primary btn-lg shadow-primary">Filter Tahun</button>
        </div>
    </form>
    <canvas id="myChart" height="100px"></canvas>
</div>
@endsection

@push('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($pemohon) }};
      var dipenuhi =  {{ Js::from($dipenuhi) }};
      var ditolak =  {{ Js::from($ditolak) }};
      var diproses =  {{ Js::from($diproses) }};

      const data = {
        labels: labels,
        datasets: [{
          label: 'Pemohon',
          backgroundColor: 'rgb(108, 52, 131)',
          borderColor: 'rgb(108, 52, 131)',
          data: users,
        },{
            label: 'Dipenuhi',
          backgroundColor: 'rgb(52, 152, 219)',
          borderColor: 'rgb(52, 152, 219)',
          data: dipenuhi,
        },{
            label: 'Ditolak',
          backgroundColor: 'rgb(244, 208, 63)',
          borderColor: 'rgb(244, 208, 63)',
          data: ditolak,
        },{
            label: 'Diproses',
          backgroundColor: 'rgb(40, 180, 99)',
          borderColor: 'rgb(40, 180, 99)',
          data: diproses,
        }]
      };

      const config = {
        type: 'bar',
        data: data,
        options: {}
      };

      const myChart = new Chart(
        document.getElementById('myChart'),
        config
      );

</script>
@endpush