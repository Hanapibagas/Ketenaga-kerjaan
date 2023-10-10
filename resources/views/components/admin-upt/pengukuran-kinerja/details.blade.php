@extends('layouts.dashboardadminupt')

@section('title')
Pengukuran Kinerja
@endsection

@section('content')
@if (session('status'))
<script>
    Swal.fire({
                icon: 'success',
                title: 'Sukses!',
                text: "{{ session('status') }}",
            });
</script>
@endif

@push('add-style')
<style>
    .backhitam {
        color: #fff !important;
        text-align: center;
        border: 1px solid #efefef !important;
    }
</style>
<style>
    .ck.ck-editor {
        border: none;
    }

    .ck.ck-editor__main>.ck-editor__editable:not(.ck-focused) {
        border-color: white !important;
        border: none !important;
    }
</style>
@endpush

<section class="tab-components">
    <div class="container-fluid">
        <div class="title-wrapper pt-30">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="title mb-30">
                        <h2>Pengukuran Kinerja</h2>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="breadcrumb-wrapper mb-30">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="{{ route('get.IndexPengkuranUpt') }}">
                                        <i>
                                            <- Kembali </i>
                                    </a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-layout-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <div class="card-style mb-30">
                        <h6 class="mb-25">Pengukuran Kinerja</h6>
                        <div class="row">
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Nama Pengukuran Kinerja</label>
                                    {{ $pengukuran->nama_pengukuran }}
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="input-style-1">
                                    <label>Tahun Pengukuran Kinerja</label>
                                    {{ $pengukuran->tahun }}
                                </div>
                            </div>
                            <form action="{{ route('get.UpdatePengukuranUpt', $pengukuran->id) }}" method="POST">
                                @method('put')
                                @csrf
                                <div class="col-12">
                                    <div class="input-style-1">
                                        <label>Table</label>
                                        <div style="color: white">
                                            <textarea id="editor"
                                                name="thead_html">{!! $pengukuran->thead_html !!}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="button-group d-flex justify-content-center flex-wrap">
                                        <button class="main-btn success-btn btn-hover m-2">
                                            Simpan Data
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
@endsection

@push('add-script')
<script>
    const dataTable = new simpleDatatables.DataTable("#table", {
            searchable: true,
        });
</script>
<script>
    let table = document.getElementsByTagName('table')[0];
        table.classList.add('table', 'backhitam');
</script>
<script>
    var tableElement = document.querySelector(".table");
        var tdElements = tableElement.querySelectorAll("td");

        tdElements.forEach(function(td) {
            if (td.innerHTML === "&nbsp;") {
                td.innerHTML = "<input>";
            }
        });
</script>
<script src="https://cdn.ckeditor.com/ckeditor5/39.0.2/classic/ckeditor.js"></script>
<script>
    ClassicEditor
            .create(document.querySelector('#editor'), {
                toolbar: {
                    items: [

                    ],
                },
            })
            .catch(error => {
                console.error(error);
            });
</script>
@endpush