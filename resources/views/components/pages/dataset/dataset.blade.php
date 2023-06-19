@extends('layouts.app')

@section('title')
Dataset
@endsection

@section('content')
<style>
    /* .test {
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
    } */

    .cari {
        margin-left: 75%
    }

    .kategori {
        margin-left: -30px;
    }

    @media screen and (max-width: 992px) {
        .cari {
            margin-left: -3px
        }
    }
</style>

<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Dataset</li>
    </ol>
</nav>

<div class="test">
    <section class="container mt-4 mb-lg-5 pt-lg-2 pb-5">
        <div class="row align-items-end gy-3 mb-4 pb-lg-3 pb-1">
            <div class="col-lg-5 col-md-4">
                <h1 class="mb-2 mb-md-0">Daftar dataset</h1>
            </div>
            <div class="col-lg-7 col-md-8">
                <div class="row gy-2">
                    <div class="col-lg-7 col-sm-6">
                        <form action="{{ route('cari_dataset') }}">
                            <div class="input-group cari">
                                <input type="text" name="search" class="form-control pe-5 rounded"
                                    placeholder="Search the dataset...">
                                <i
                                    class="bx bx-search position-absolute top-50 end-0 translate-middle-y me-3 zindex-5 fs-lg"></i>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        @foreach ( $dataset as $datas )
        <article class="card border-0 shadow-sm overflow-hidden mb-4">
            <div class="row g-0">
                <div class="col-sm-12">
                    <div class="card-body">
                        <div class="d-flex align-items-center mb-3 kategori">
                            <span class="fs-sm text-muted ps-3 ms-3 ">{{ $datas->kategori }}</span>
                        </div>
                        <h3 class="h4">
                            <a href="{{ route('details_dataset', $datas->nama_dataset) }}">{{ $datas->nama_dataset
                                }}</a>
                        </h3>
                        <p>{{ $datas->opd }}</p>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
        </article>
        @endforeach
    </section>

</div>
@endsection