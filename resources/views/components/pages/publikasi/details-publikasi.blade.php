@extends('layouts.app')

@section('title')
Berita
@endsection

@section('content')
<div class="container">
    <nav class="pt-4 mt-lg-3" aria-label="breadcrumb">
        <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('index_publikasi') }}">Publikasi</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">Publikasi Details</li>
        </ol>
    </nav>

    <article class="card border-0 shadow-sm overflow-hidden mb-4" style="margin-top: 40px">
        <div class="row g-0">
            <div class="col-sm-4 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                style="background-image: url({{ Storage::url($publlikasi->gambar) }}); min-height: 15rem;">
            </div>
            <div class="col-sm-8">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-3">
                        By: admin
                        <span class="fs-sm text-muted border-start ps-3 ms-3">{{ $publlikasi->tanggal }}</span>
                    </div>
                    <h3 class="h4">
                        {{ $publlikasi->title }}
                    </h3>
                    <p>
                        {!! $publlikasi->deskripsi !!}
                    </p>
                    <hr class="my-4">
                    <div class="d-flex align-items-center justify-content-between">
                        <div class="info-file">
                            @php
                            $url =
                            "http://127.0.0.1:8000/publikasi/storage/$publlikasi->file";
                            $cleanedUrl = str_replace('/publikasi/', '/', $url);
                            @endphp
                            <a class="flex inline-block items-center" href="{{ $cleanedUrl }}" target="_blank"
                                rel="noreferrer"><span class="mr-4">Download .pdf</span><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQVSURBVHgB7ZlJTBNRGMe/0rEzaRlaqSzlYIotLnHDuEVcUhNxuRg56MnE4I2LStSDXuSiFzVoCIIn95NG4sEtHiQRNS4JaDQuyBJBZBMopdiSQn3fIzOZaafTlmlpTfglk+n7v/fa/7z53vfeTAHmmB10oIG6umo7JJCKisrOWNrN2PTV2poz2dYFVQaWhUTQ0/MLzbSwE4Ht5ZWVI5AM6q/UPB8cHAgmgtFRd/D2zevBd2/fBOtra5qvVVdb1H47AzRgMCRmlAXWrd8Aa9dvKPYbmOdqxjWZTgaxGE8700g042lpGlEznramkUjG09o0omQ87U0jgnEfyzRgmYE0gOez6HHn1g31hkFw1dZWF6eFaWTvvjLweDyqbZ4+egi9A4OWtDGN8DyvWi9sGSKabna5LBYfRFyVmtweCPT2QsA7DrHC5OdBIggz3bGt9OhUUFcFk2CZmhe5Y8mjRhjGA+KDLXJA3tkzmi5Alj1at+xwEcOXyEcLJAl/axv8qakHLaQk5U2OjYEWUjIRx71e+PL5k1jW6xlwOJ3w/dvXsLYLcnIhJzdXpqXEtNFkAquzSKbpGQYWhWhU1+vDtIimMzIzIff0cXoW+Nv8Edx378PUmJfWMfn5Yh3GqvtuA8kofbTM7yklx07Zd3pfvKJtEFbhiYeN8SlIxbQJjFtKYPjaLWokw5QJ5gNlVMeJxBWvpkbHm16JdaatJdBz5CRtzxWvom0Fk8hEazs9j7rd0PX6pahnZZlh8ZKl8P7dmzAfixxF8YeHr+UjHWF6IbyJjp4w+yd+tIHn8TP62X2vAWyXz0POqRPw++hJquEdEeqlZJnNsHTT5jB9o4KmRFTTmE8Z23RORcPC7VfC1/IBzPvLZH3nlx8Uy3gB2H8yMAl+v1/UMW4ZEtNSLbQuLtM4clJT/ecuQjzMs4UvIn6/D9p/tIplXJ7t9kKZJpBns0F2thXiMo23WgiPaLBOBwmZdrGMo6p0kZg9CpavCNOXKWhKaEp5mFkwdPDM7y4FI5mIA+cuRO03QcJgcKBfLGMIzCejKdUEeDJJQ7PKjE3jJMP4FWIYQ6fvdBV4m16L9Wq4SQYR4FiOZhCpJpBBLihm03hr27ftilQN3YcrQA21/QXGcIHCQuJQ0JRIyYqI4dHd9VMsY3bItxXINIFsqxWMRpNMS4lp3GtwHCcpTy/VUk3aNpTUmGb0dCMUipKmhGxryjCBFnJKzhtLCZgatSAb6cLGxpEO1+41ZMU6ptOBWa1j78KCfQudiy0sa4B4wD0Lbqa0EBYehY1POsnpWLSO5FWvfeXBQ65oD6PJ4L94WRPKnOnZYs70bDHjxUU3FXzw9PFDV6L/d1FjaGiok6wlnRr/R6yzwyzCcb6R8vLKpC9+cwj8A6RzpBxk5zXRAAAAAElFTkSuQmCC"
                                    alt="pdf-icon">
                            </a>
                            {{-- <a style="margin-left: 20px;" class="flex inline-block items-center " target="_blank"
                                rel="noreferrer" href="/publikasi/91/view"><span class="mr-4">Baca
                                    Publikasi .pdf</span><img
                                    src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAC0AAAAtCAYAAAA6GuKaAAAACXBIWXMAAAsTAAALEwEAmpwYAAAAAXNSR0IArs4c6QAAAARnQU1BAACxjwv8YQUAAAQVSURBVHgB7ZlJTBNRGMe/0rEzaRlaqSzlYIotLnHDuEVcUhNxuRg56MnE4I2LStSDXuSiFzVoCIIn95NG4sEtHiQRNS4JaDQuyBJBZBMopdiSQn3fIzOZaafTlmlpTfglk+n7v/fa/7z53vfeTAHmmB10oIG6umo7JJCKisrOWNrN2PTV2poz2dYFVQaWhUTQ0/MLzbSwE4Ht5ZWVI5AM6q/UPB8cHAgmgtFRd/D2zevBd2/fBOtra5qvVVdb1H47AzRgMCRmlAXWrd8Aa9dvKPYbmOdqxjWZTgaxGE8700g042lpGlEznramkUjG09o0omQ87U0jgnEfyzRgmYE0gOez6HHn1g31hkFw1dZWF6eFaWTvvjLweDyqbZ4+egi9A4OWtDGN8DyvWi9sGSKabna5LBYfRFyVmtweCPT2QsA7DrHC5OdBIggz3bGt9OhUUFcFk2CZmhe5Y8mjRhjGA+KDLXJA3tkzmi5Alj1at+xwEcOXyEcLJAl/axv8qakHLaQk5U2OjYEWUjIRx71e+PL5k1jW6xlwOJ3w/dvXsLYLcnIhJzdXpqXEtNFkAquzSKbpGQYWhWhU1+vDtIimMzIzIff0cXoW+Nv8Edx378PUmJfWMfn5Yh3GqvtuA8kofbTM7yklx07Zd3pfvKJtEFbhiYeN8SlIxbQJjFtKYPjaLWokw5QJ5gNlVMeJxBWvpkbHm16JdaatJdBz5CRtzxWvom0Fk8hEazs9j7rd0PX6pahnZZlh8ZKl8P7dmzAfixxF8YeHr+UjHWF6IbyJjp4w+yd+tIHn8TP62X2vAWyXz0POqRPw++hJquEdEeqlZJnNsHTT5jB9o4KmRFTTmE8Z23RORcPC7VfC1/IBzPvLZH3nlx8Uy3gB2H8yMAl+v1/UMW4ZEtNSLbQuLtM4clJT/ecuQjzMs4UvIn6/D9p/tIplXJ7t9kKZJpBns0F2thXiMo23WgiPaLBOBwmZdrGMo6p0kZg9CpavCNOXKWhKaEp5mFkwdPDM7y4FI5mIA+cuRO03QcJgcKBfLGMIzCejKdUEeDJJQ7PKjE3jJMP4FWIYQ6fvdBV4m16L9Wq4SQYR4FiOZhCpJpBBLihm03hr27ftilQN3YcrQA21/QXGcIHCQuJQ0JRIyYqI4dHd9VMsY3bItxXINIFsqxWMRpNMS4lp3GtwHCcpTy/VUk3aNpTUmGb0dCMUipKmhGxryjCBFnJKzhtLCZgatSAb6cLGxpEO1+41ZMU6ptOBWa1j78KCfQudiy0sa4B4wD0Lbqa0EBYehY1POsnpWLSO5FWvfeXBQ65oD6PJ4L94WRPKnOnZYs70bDHjxUU3FXzw9PFDV6L/d1FjaGiok6wlnRr/R6yzwyzCcb6R8vLKpC9+cwj8A6RzpBxk5zXRAAAAAElFTkSuQmCC"
                                    alt="pdf-icon">
                            </a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </article>
</div>
@endsection