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

    table thead {
        background-color: #007bff;
        color: white;
    }

    table th {
        padding: 10px;
        border: 1px solid #ddd;
    }

    table tbody tr:nth-child(odd) {
        background-color: #f2f2f2;
    }

    table tbody tr:hover {
        background-color: #e0e0e0;
    }

    table td {
        border: 1px solid #ddd;
        padding: 10px;
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
                <div>
                    {!! $dataset->thead_html !!}
                </div>
            </div>
            <div class="tab-content" id="tab2">
                <canvas id="myChart" height="100px"></canvas>
            </div>
            <div class="tab-content" id="tab3">
                <h6>Dataset Diperbarui : <span style="color: grey">{{ $dataset->updated_at }}</span>
                </h6>
                <h6>Dataset Dibuat : <span style="color: grey">{{ $dataset->created_at }}</span></h6>
                <h6>Produsen Data : <span style="color: grey">{{ $dataset->role->name }}</span></h6>
                <h6>Satuan Dataset : <span style="color: grey">{{ $dataset->satuan }}</span></h6>
                <h6>Deskripsi : <span style="color: grey">{{ $dataset->deskripsi }}</span></h6>
                {{-- <h6>
                    <i class="bx bx-download fs-xl me-1"></i>
                    <a href="{{asset('storage/'. $dataset->file_data)}}" target="_blank"><span
                            style="color: grey; text-decoration: none;">download file</span></a>
                </h6> --}}
            </div>
        </div>
    </div>
</div>
@endsection

@push('js')
<script>
    let table = document.getElementsByTagName('table')[0];

        table.classList.add('table', 'backhitam');
</script>
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