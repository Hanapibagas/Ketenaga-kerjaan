@extends('layouts.app')

@section('title')
Dataset
@endsection

@section('content')
<div class="container">
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('index_dataset') }}">Dataset</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Unduh Data</li>
        </ol>
    </nav>
</div>

@endsection