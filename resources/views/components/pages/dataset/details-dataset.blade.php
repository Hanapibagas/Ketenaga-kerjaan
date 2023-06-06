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

<div class="container">
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('index_dataset_home') }}">Dataset</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Dataset Details</li>
        </ol>
    </nav>

    <section class="container pb-4 mb-2 mb-lg-3"> <br>
        <h1 style="text-transform:uppercase;">{{ $dataset->nama_dataset }}</h1>
    </section>

    <div class="container">
        <div class="tab-container">
            <div class="tab">
                <button class="tab-link active" onclick="openTab(event, 'tab1')">DATA</button>
                <button class="tab-link" onclick="openTab(event, 'tab2')">GRAFIK</button>
                <button class="tab-link" onclick="openTab(event, 'tab3')">METADATA</button>
            </div>
            <div class="tab-content" id="tab1">
                <form action="{{ route('filter_dataset_home', $dataset->id) }}" method="POST">
                    @csrf
                    <div class="d-md-flex mb-3">
                        @php
                        $year = date('Y');
                        @endphp
                        <select name="tahun" class="form-select me-md-4 mb-2 mb-md-0" style="min-width: 240px;">
                            <option value="-- Pilih tahun --">- - Pilih tahun - -</option>
                            @for ($i=2018; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }}
                                </option>
                                @endfor
                        </select>
                        <button class="btn btn-primary btn-lg shadow-primary">Filter Tahun</button>
                    </div>
                </form>
                <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Variabel</th>
                            <th>Tahun</th>
                            <th>Laki-Laki</th>
                            <th>Perempuan</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $filtertahun as $key => $data )
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->variable }}</td>
                            <td>{{ $data->tahun }}</td>
                            <td>{{ $data->laki_laki }}</td>
                            <td>{{ $data->perempuan }}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="tab-content" id="tab2">
                <form action="{{ route('filter_dataset_home', $dataset->id) }}" method="POST">
                    @csrf
                    <div class="d-md-flex mb-3">
                        @php
                        $year = date('Y');
                        @endphp
                        <select name="tahun" class="form-select me-md-4 mb-2 mb-md-0" style="min-width: 240px;">
                            <option value="-- Pilih tahun --">- - Pilih tahun - -</option>
                            @for ($i=2018; $i <= $year; $i++) <option value="{{ $i }}"> {{ $i }}
                                </option>
                                @endfor
                        </select>
                        <button class="btn btn-primary btn-lg shadow-primary">Filter Tahun</button>
                    </div>
                </form>
                <canvas id="myChart" height="100px"></canvas>
            </div>
            <div class="tab-content" id="tab3">
                {{-- <table id="table" class="table">
                    <thead>
                        <tr>
                            <th>Nama Master Data</th>
                            <th>Deskripsi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ( $metadata as $data )
                        <tr>
                            <td>{{ $data->nama_master_data }}</td>
                            <td>{!! Str::limit($data->deskripsi,50) !!}</td>
                            <td>
                                <a href="{{ route('edit_metadata', $data->id) }}" class="btn btn-primary">
                                    <i class="lni lni-pencil" style="color: whitesmoke"></i>
                                </a>
                                <input type="hidden" class="delete_id" value="{{ $data->id }}">
                                <form action="{{ route('destroy_metadata', $data->id) }}" method="POST"
                                    class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btndelete">
                                        <i class="lni lni-trash-can"></i>
                                    </button>
                                </form>
                                </p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table> --}}
                <h6>Dataset Diperbarui : <span style="color: grey">{{ $dataset->updated_at }}</span>
                </h6>
                <h6>Dataset Dibuat : <span style="color: grey">{{ $dataset->created_at }}</span></h6>
                <h6>Produsen Data : <span style="color: grey">{{ $dataset->opd }}</span></h6>
                <h6>Satuan Dataset : <span style="color: grey">{{ $dataset->satuan }}</span></h6>
                <h6>Deskripsi : <span style="color: grey">{{ $dataset->deskripsi }}</span></h6>
                <h6>
                    <i class="bx bx-download fs-xl me-1"></i>
                    <a href="{{asset('storage/'. $dataset->file_data)}}" target="_blank"><span
                            style="color: grey; text-decoration: none;">download file</span></a>
                </h6>
            </div>
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script type="text/javascript">
    var labels =  {{ Js::from($labels) }};
      var users =  {{ Js::from($grafik) }};

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