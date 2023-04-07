@extends('layouts.app')

@section('title')
Profile
@endsection

@section('content')
<nav class="container py-4 mb-lg-2 mt-lg-3 tes" aria-label="breadcrumb">
    <ol class="breadcrumb mb-0">
        <li class="breadcrumb-item">
            <a href="{{ route('index_home') }}"><i class="bx bx-home-alt fs-lg me-1"></i>Beranda</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">Profile</li>
    </ol>
</nav>

<section class="container pb-4 mb-2 mb-lg-3">
    <h1>Profile Dinas Ketenagakerjaan</h1>
</section>

<section class="jarallax" data-jarallax data-speed="0.4">
    <div class="jarallax-img" style="background-image: url({{ asset('assets/frontend/img/profile/hero.jpg') }});"></div>
    <div class="d-none d-xxl-block" style="height: 800px;"></div>
    <div class="d-none d-lg-block d-xxl-none" style="height: 600px;"></div>
    <div class="d-none d-md-block d-lg-none" style="height: 450px;"></div>
    <div class="d-md-none" style="height: 400px;"></div>
</section>

<section class="container py-5 my-1 my-md-4 my-lg-5">
    <div class="row">
        <div class="col-lg-7 mb-4 mb-lg-0">
            <div class="pe-lg-4 me-lg-3 pe-xl-0 me-xl-0">
                <h2 class="h1 mb-4">About</h2>
                <p class="fs-lg mb-0">Lacinia pulvinar at diam, urna, non blandit. Cras id enim tortor nascetur. Cursus
                    ante eu nam ut non vestibulum sem. Ullamcorper quis varius eu, vel. Sagittis ut suspendisse et, nec.
                    Parturient eu iaculis sit dolor, erat mauris. Leo at egestas aliquet duis pellentesque amet. Proin
                    mattis ac ornare malesuada sed. Diam libero tortor suspendisse molestie non duis enim. Lectus
                    pulvinar euismod et risus egestas. Cursus porttitor id faucibus eu vestibulum. Eu blandit faucibus
                    nulla adipiscing amet ullamcorper.</p>
            </div>
        </div>
        <div class="col-lg-5 col-xl-4 offset-xl-1 border-start-lg">
            <div class="ps-lg-4 ms-lg-3">
                <h3 class="h5 d-flex align-items-center">
                    <i class="bx bx-help-circle text-primary fs-4 me-2"></i>
                    Challenge
                </h3>
                <p class="pb-4 mb-0 mb-lg-3">Ultricies massa iaculis vestibulum egestas vestibulum, cursus. Leo non arcu
                    ultricies senectus a purus sed.</p>
                <h3 class="h5 d-flex align-items-center">
                    <i class="bx bx-bulb text-primary fs-4 me-2"></i>
                    Solution
                </h3>
                <p class="mb-0">Sit tellus id proin viverra iaculis pellentesque ornare. Diam augue sit feugiat
                    porttitor leo, fusce vel ac. Placerat vulputate quisque.</p>
            </div>
        </div>
    </div>
</section>

<section class="container d-sm-flex align-items-center justify-content-between pb-4 mb-2 mb-lg-3">
    <h1 class="mb-sm-0 me-sm-3">Profile Kepala Dinas</h1>
</section>

<section class="bg-secondary py-5">
    <div class="container py-2 py-md-4 py-lg-5">
        <div class="row">
            <div class="col-md-4">
                <div class="position-relative d-flex h-100">
                    <div class="position-absolute top-0 start-0 w-100 h-100 rounded-3 bg-size-cover bg-repeat-0 bg-position-center"
                        style="background-image: url({{ asset('assets/frontend/img/slide-foto/03.jpg') }});"></div>
                </div>
            </div>
            <div class="col-md-8">
                <figure class="card position-relative border-0 shadow-sm py-3 p-0 p-lg-4 mt-4 mb-0 ms-xl-5">
                    <span
                        class="btn btn-icon btn-primary btn-lg shadow-primary pe-none position-absolute top-0 start-0 translate-middle-y ms-4 ms-lg-5">
                        <i class="bx bxs-quote-left"></i>
                    </span>
                    <blockquote class="card-body mt-2 mb-0">
                        <p class="fs-lg">Dolor, a eget elementum, integer nulla volutpat, nunc, sit. Quam iaculis varius
                            mauris magna sem. Egestas sed sed suscipit dolor faucibus dui imperdiet at eget. Tincidunt
                            imperdiet quis hendrerit aliquam feugiat neque cras sed. Dictum quam integer volutpat
                            tellus, faucibus platea. Pulvinar turpis proin faucibus at mauris.</p>
                    </blockquote>
                    <figcaption class="card-footer border-0 d-sm-flex pt-0 mt-n3 mt-lg-0">
                        <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-4">
                            <img src="{{ asset('assets/frontend/img/slide-foto/03.jpg') }}" width="48"
                                class="d-md-none rounded-circle" alt="Ralph Edwards">
                            <div class="ps-3 ps-md-0">
                                <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                                <span class="fs-sm text-muted">Head of Marketing</span>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    </div>
</section>


<section class="container py-5 my-md-3 my-lg-5">
    <h2 class="h1 text-center pt-1 pb-3 mb-3 mb-lg-4">Profile Pegawai</h2>
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/01.jpg') }}" class="rounded-3" alt="Jenny Wilson">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Jenny Wilson</h3>
                    <p class="fs-sm mb-0">Co-Founder &amp; CEO</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/01.jpg') }}" class="rounded-3" alt="Ralph Edwards">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Ralph Edwards</h3>
                    <p class="fs-sm mb-0">Co-Founder</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/03.jpg') }}" class="rounded-3"
                        alt="Cameron Williamson">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2">
                                <i class="bx bxl-dribbble"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Cameron Williamson</h3>
                    <p class="fs-sm mb-0">Creative Director</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/04.jpg') }}" class="rounded-3" alt="Jerome Bell">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white me-2">
                                <i class="bx bxl-twitter"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Jerome Bell</h3>
                    <p class="fs-sm mb-0">Marketing Director</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/05.jpg') }}" class="rounded-3" alt="Marvin McKinney">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-behance btn-sm bg-white me-2">
                                <i class="bx bxl-behance"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white">
                                <i class="bx bxl-dribbble"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Marvin McKinney</h3>
                    <p class="fs-sm mb-0">Lead Designer</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/06.jpg') }}" class="rounded-3" alt="Esther Howard">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-dribbble btn-sm bg-white me-2">
                                <i class="bx bxl-dribbble"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-behance btn-sm bg-white">
                                <i class="bx bxl-behance"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Esther Howard</h3>
                    <p class="fs-sm mb-0">Motion Designer</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/07.jpg') }}" class="rounded-3" alt="Darrell Steward">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-stack-overflow btn-sm bg-white me-2">
                                <i class="bx bxl-stack-overflow"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-github btn-sm bg-white">
                                <i class="bx bxl-github"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Darrell Steward</h3>
                    <p class="fs-sm mb-0">Lead Developer</p>
                </div>
            </div>
        </div>

        <!-- Item -->
        <div class="col">
            <div class="card card-hover border-0 bg-transparent">
                <div class="position-relative">
                    <img src="{{ asset('assets/frontend/img/team/08.jpg') }}" class="rounded-3" alt="Jane Cooper">
                    <div
                        class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                        <span class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-25 rounded-3"></span>
                        <div class="position-relative d-flex zindex-2">
                            <a href="#" class="btn btn-icon btn-secondary btn-facebook btn-sm bg-white me-2">
                                <i class="bx bxl-facebook"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-linkedin btn-sm bg-white me-2">
                                <i class="bx bxl-linkedin"></i>
                            </a>
                            <a href="#" class="btn btn-icon btn-secondary btn-twitter btn-sm bg-white">
                                <i class="bx bxl-twitter"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body text-center p-3">
                    <h3 class="fs-lg fw-semibold pt-1 mb-2">Jane Cooper</h3>
                    <p class="fs-sm mb-0">Senior Project Manager</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection