<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">
    <title>Silicon | Digital Agency Landing</title>

    @include('includes.pages.style')

</head>

<body>
    <noscript>
        <iframe src="http://www.googletagmanager.com/ns.html?id=GTM-WKV3GT5" height="0" width="0"
            style="display: none; visibility: hidden;"></iframe>
    </noscript>

    <div class="page-loading active">
        <div class="page-loading-inner">
            <div class="page-spinner"></div><span>Loading...</span>
        </div>
    </div>

    <main class="page-wrapper">

        @include('includes.pages.navbar')


        <!-- Hero -->
        <section class="jarallax position-relative d-flex align-items-center min-vh-100 bg-light mb-5 py-lg-5 pt-5"
            style="background-image: url(assets/img/landing/digital-agency/hero-bg.svg);" data-jarallax
            data-img-position="0% 100%" data-speed="0.5">
            <div class="container position-relative zindex-5 py-5">
                <div class="row justify-content-md-start justify-content-center">
                    <div
                        class="col-md-6 col-sm-8 order-md-1 order-2 d-flex flex-column justify-content-between mt-4 pt-2 text-md-start text-center">
                        <div class="mb-md-5 pb-xl-5 mb-4">

                            <!-- Video popup btn -->
                            <div class="d-inline-flex align-items-center position-relative mb-3">
                                <a href="https://www.youtube.com/watch?v=zPo5ZaH6sW8"
                                    class="btn btn-video btn-icon btn-lg flex-shrink-0 me-3 stretched-link"
                                    data-bs-toggle="video">
                                    <i class="bx bx-play"></i>
                                </a>
                                <h4 class="mb-0">Digital Agency Promo</h4>
                            </div>

                            <!-- Text -->
                            <h1 class="display-2 mb-md-5 mb-3 pb-3">
                                We <span class="text-gradient-primary">Transform</span> Your Ideas into Reality
                            </h1>
                            <div class="d-md-flex align-items-md-start">
                                <a href="contacts-v1.html"
                                    class="btn btn-lg btn-primary flex-shrink-0 me-md-4 mb-md-0 mb-sm-4 mb-3">Work with
                                    us</a>
                                <p class="d-lg-block d-none mb-0 ps-md-3">Silicon is a leading full-service digital
                                    agency based in New York. We make mobile apps,websites &amp; brands, that people
                                    appreciate all around the world.</p>
                            </div>
                        </div>

                        <!-- Scroll down btn -->
                        <div
                            class="d-inline-flex align-items-center justify-content-center justify-content-md-start position-relative">
                            <a href="#benefits" data-scroll data-scroll-offset="100"
                                class="btn btn-video btn-icon rounded-circle shadow-sm flex-shrink-0 stretched-link me-3">
                                <i class="bx bx-chevron-down"></i>
                            </a>
                            <span class="fs-sm">Discover more</span>
                        </div>
                    </div>

                    <!-- Animated gfx -->
                    <div class="col-sm-6 col-sm-6 col-9 order-md-2 order-1">
                        <lottie-player class="mx-auto" src="assets/json/animation-digital-agency.json"
                            background="transparent.html" speed="1" loop autoplay></lottie-player>
                    </div>
                </div>
            </div>
        </section>


        <!-- Benefits (features) -->
        <section class="container mb-5 pt-lg-5" id="benefits">
            <div class="swiper pt-3" data-swiper-options='{
          "slidesPerView": 1,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 2
            },
            "991": {
              "slidesPerView": 3
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide border-end-lg px-2">
                        <div class="text-center">
                            <img src="assets/img/landing/digital-agency/icons/idea.svg" width="48" alt="Bulb icon"
                                class="d-block mb-4 mx-auto">
                            <h4 class="mb-2 pb-1">Creative Solutions</h4>
                            <p class="mx-auto" style="max-width: 336px;">Sed morbi nulla pulvinar lectus tempor vel
                                euismod accumsan.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide border-end-lg px-2">
                        <div class="text-center">
                            <img src="assets/img/landing/digital-agency/icons/award.svg" width="48" alt="Award icon"
                                class="d-block mb-4 mx-auto">
                            <h4 class="mb-2 pb-1">Award Winning</h4>
                            <p class="mx-auto" style="max-width: 336px;">Sit facilisis dolor arcu, fermentum vestibulum
                                arcu elementum imperdiet.</p>
                        </div>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide px-2">
                        <div class="text-center">
                            <img src="assets/img/landing/digital-agency/icons/team.svg" width="48" alt="Team icon"
                                class="d-block mb-4 mx-auto">
                            <h4 class="mb-2 pb-1">Team of Professionals</h4>
                            <p class="mx-auto" style="max-width: 336px;">Nam venenatis urna aenean quis feugiat et
                                senectus turpis.</p>
                        </div>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-2 pt-sm-3 mt-4"></div>
            </div>
        </section>


        <!-- Featured Projects -->
        <section class="container mb-5 pt-lg-2 pt-xl-4 pb-2 pb-md-3 pb-lg-5">
            <h2 class="h1 mb-4 text-center">Featured Projects</h2>
            <p class="mb-4 mx-auto pb-3 fs-lg text-center" style="max-width: 636px;">We create websites and mobile apps,
                marketing materials, branding, web design, UX/UI design and illustrations.</p>

            <!-- Portfolio grid -->
            <div class="masonry-grid row g-md-4 g-3 mb-4">

                <!-- Item -->
                <div class="masonry-grid-item col-md-4 col-sm-6 col-12">
                    <a href="portfolio-single-project.html"
                        class="card card-portfolio card-hover bg-transparent border-0">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                            <div class="position-relative zindex-2">
                                <h3 class="h5 text-light mb-2">Astronaut &amp; Flashing Neon Lights</h3>
                                <span class="fs-sm text-light opacity-70">3D Render / Graphic Design / Motion
                                    Design</span>
                            </div>
                        </div>
                        <div class="card-img">
                            <img src="assets/img/portfolio/grid/07.jpg" class="rounded-3" alt="Image">
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col-md-4 col-sm-6 col-12">
                    <a href="portfolio-single-project.html"
                        class="card card-portfolio card-hover bg-transparent border-0">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                            <div class="position-relative zindex-2">
                                <h3 class="h5 text-light mb-2">Plaster Antique Sculpture in a Pop Art Style</h3>
                                <span class="fs-sm text-light opacity-70">NFT / Graphic Design / Art / 3D</span>
                            </div>
                        </div>
                        <div class="card-img">
                            <img src="assets/img/portfolio/grid/08.jpg" class="rounded-3" alt="Image">
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col-md-4 col-sm-6 col-12">
                    <a href="portfolio-single-project.html"
                        class="card card-portfolio card-hover bg-transparent border-0">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                            <div class="position-relative zindex-2">
                                <h3 class="h5 text-light mb-2">Big Blue Whale Shape</h3>
                                <span class="fs-sm text-light opacity-70">3D Pollygonal Shape / Graphic Design /
                                    Art</span>
                            </div>
                        </div>
                        <div class="card-img">
                            <img src="assets/img/portfolio/grid/09.jpg" class="rounded-3" alt="Image">
                        </div>
                    </a>
                </div>

                <!-- Item -->
                <div class="masonry-grid-item col-md-8 col-12">
                    <a href="portfolio-single-project.html"
                        class="card card-portfolio card-hover bg-transparent border-0">
                        <div
                            class="card-img-overlay d-flex flex-column align-items-center justify-content-center rounded-3">
                            <span
                                class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-50 rounded-3"></span>
                            <div class="position-relative zindex-2">
                                <h3 class="h5 text-light mb-2">3D Shape Illustration</h3>
                                <span class="fs-sm text-light opacity-70">3D Design / Illustration / Art</span>
                            </div>
                        </div>
                        <div class="card-img">
                            <img src="assets/img/portfolio/grid/10.jpg" class="rounded-3" alt="Image">
                        </div>
                    </a>
                </div>
            </div>

            <div class="pt-md-3 pt-2 text-center">
                <a href="portfolio-grid.html" class="btn btn-lg btn-primary w-sm-auto w-100">Explore all</a>
            </div>
        </section>


        <!-- Services -->
        <section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
            <div class="card border-0 bg-secondary p-md-5 px-sm-2 pt-4 pb-3">
                <div class="card-body mx-auto" style="max-width: 860px;">
                    <h2 class="h1 mb-4 text-center">Our Competencies</h2>
                    <p class="mb-4 pb-3 fs-lg text-center text-muted">We fully understand your business. If you need to
                        update something, we are more than happy to help you with the services we are providing.</p>

                    <!-- Accordion: Alternative style -->
                    <div class="accordion" id="accordion-services">

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header" id="heading-1">
                                <button class="accordion-button fs-xl shadow-none rounded-3" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-1" aria-expanded="true"
                                    aria-controls="collapse-1">Digital Marketing</button>
                            </h3>
                            <div class="accordion-collapse collapse show" id="collapse-1" aria-labelledby="heading-1"
                                data-bs-parent="#accordion-services">
                                <div class="accordion-body pt-0">
                                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                                        <img src="assets/img/landing/digital-agency/services/01.png" width="200"
                                            alt="Digital Marketing" class="me-md-4 mb-md-0 mb-3">
                                        <div class="ps-md-3">
                                            <p class="mb-0">Nisi, sed accumsan tincidunt pulvinar sapien. Neque,
                                                adipiscing posuere amet eget cursus mattis egestas nec quam. Tellus in
                                                lectus volutpat tellus bibendum. Etiam id phasellus in proin tristique.
                                                Semper habitasse volutpat et urna dui sed in pellentesque purus.
                                                Convallis viverra faucibus lacus nunc venenatis.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header" id="heading-2">
                                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-2" aria-expanded="true"
                                    aria-controls="collapse-2">Web Development</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse-2" aria-labelledby="heading-2"
                                data-bs-parent="#accordion-services">
                                <div class="accordion-body pt-0">
                                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                                        <img src="assets/img/landing/digital-agency/services/02.png" width="200"
                                            alt="Web Development" class="me-md-4 mb-md-0 mb-3">
                                        <div class="ps-md-3">
                                            <p class="mb-0">Vitae varius euismod egestas egestas lacus. Augue vitae arcu
                                                sollicitudin metus iaculis amet, eu at amet. Netus pulvinar tristique
                                                ridiculus sed. Viverra ut viverra aenean nisl. Tortor lorem cum congue
                                                a. Orci mattis massa tortor magna massa nisi, aliquet risus. Ornare cras
                                                aenean pellentesque quam pulvinar at. Libero mollis tortor erat sed.
                                                Adipiscing lectus nisi commodo vel. Id augue vitae, hendrerit iaculis.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header" id="heading-3">
                                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-3" aria-expanded="true"
                                    aria-controls="collapse-3">Application Development</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse-3" aria-labelledby="heading-3"
                                data-bs-parent="#accordion-services">
                                <div class="accordion-body pt-0">
                                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                                        <img src="assets/img/landing/digital-agency/services/03.png" width="200"
                                            alt="Application Development" class="me-md-4 mb-md-0 mb-3">
                                        <div class="ps-md-3">
                                            <p class="mb-0">Morbi tristique justo, ut ac facilisi vel. Faucibus tortor
                                                libero commodo maecenas commodo sed. Sapien, vitae senectus turpis enim
                                                habitasse ipsum justo. Sagittis vel tortor velit dapibus dictum
                                                facilisis dictumst aliquam. Et, tempus euismod non semper vitae egestas
                                                semper eget turpis. Eros, pellentesque sed ut faucibus ac egestas leo
                                                metus.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header" id="heading-4">
                                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-4" aria-expanded="true"
                                    aria-controls="collapse-4">Strategy</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse-4" aria-labelledby="heading-4"
                                data-bs-parent="#accordion-services">
                                <div class="accordion-body pt-0">
                                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                                        <img src="assets/img/landing/digital-agency/services/04.png" width="200"
                                            alt="Strategy" class="me-md-4 mb-md-0 mb-3">
                                        <div class="ps-md-3">
                                            <p class="mb-0">Non bibendum mauris velit at enim. Vel tellus nunc malesuada
                                                pellentesque feugiat nibh mauris blandit. Tempus, ut vulputate feugiat
                                                quis molestie sit eu blandit rhoncus. Iaculis eget magna sit eget eget
                                                massa. Diam nunc dolor tristique lectus imperdiet. Nunc, vitae etiam
                                                venenatis arcu turpis sollicitudin amet sit. Ac dapibus non erat sed.
                                                Auctor eleifend mattis scelerisque gravida felis nibh. Habitant nascetur
                                                turpis ullamcorper.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Item -->
                        <div class="accordion-item border-0 rounded-3 shadow-sm mb-3">
                            <h3 class="accordion-header" id="heading-5">
                                <button class="accordion-button fs-xl shadow-none rounded-3 collapsed" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse-5" aria-expanded="true"
                                    aria-controls="collapse-5">Digital Advertising</button>
                            </h3>
                            <div class="accordion-collapse collapse" id="collapse-5" aria-labelledby="heading-5"
                                data-bs-parent="#accordion-services">
                                <div class="accordion-body pt-0">
                                    <div class="d-flex flex-md-row flex-column align-items-md-center">
                                        <img src="assets/img/landing/digital-agency/services/05.png" width="200"
                                            alt="Digital Advertising" class="me-md-4 mb-md-0 mb-3">
                                        <div class="ps-md-3">
                                            <p class="mb-0">Nulla odio diam, arcu dictum neque nec cursus. Vel, aliquam
                                                nisl ridiculus sed. Pulvinar lectus ac pellentesque sollicitudin
                                                tristique aliquet ullamcorper in eu. Tincidunt porta magna faucibus
                                                neque, nunc gravida sagittis. Ut tellus sed odio laoreet. Molestie sit
                                                viverra maecenas nisl felis consequat.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Brands (Carousel) -->
        <section class="container pb-4 pb-lg-5 mb-3">
            <div class="d-flex align-items-center justify-content-md-between justify-content-center mb-md-4 mb-3">
                <h2 class="mb-0">Trusted by Awesome Clients</h2>

                <!-- Slider prev/next buttons + Quotation mark -->
                <div class="d-md-flex d-none ms-4">
                    <button type="button" id="prev-brand" class="btn btn-prev btn-icon btn-sm me-2">
                        <i class="bx bx-chevron-left"></i>
                    </button>
                    <button type="button" id="next-brand" class="btn btn-next btn-icon btn-sm ms-2">
                        <i class="bx bx-chevron-right"></i>
                    </button>
                </div>
            </div>
            <div class="swiper mx-n2" data-swiper-options='{
          "slidesPerView": 2,
          "navigation": {
            "prevEl": "#prev-brand",
            "nextEl": "#next-brand"
          },
          "loop": true,
          "pagination": {
            "el": ".swiper-pagination",
            "clickable": true
          },
          "breakpoints": {
            "500": {
              "slidesPerView": 3,
              "spaceBetween": 8
            },
            "650": {
              "slidesPerView": 4,
              "spaceBetween": 8
            },
            "900": {
              "slidesPerView": 5,
              "spaceBetween": 8
            },
            "1100": {
              "slidesPerView": 6,
              "spaceBetween": 8
            }
          }
        }'>
                <div class="swiper-wrapper">

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/01.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/02.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/03.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/04.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/05.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>

                    <!-- Item -->
                    <div class="swiper-slide py-3">
                        <a href="#" class="card card-body card-hover px-2 mx-2">
                            <img src="assets/img/brands/06.svg" class="d-block mx-auto my-2" width="154" alt="Brand">
                        </a>
                    </div>
                </div>

                <!-- Pagination (bullets) -->
                <div class="swiper-pagination position-relative pt-3 mt-4 d-md-none d-flex"></div>
            </div>
        </section>


        <!-- Testimonials slider -->
        <section class="container mb-5 pt-2 pb-3 py-md-4 py-lg-5">
            <h2 class="h1 pb-2 pb-lg-0 mb-4 mb-lg-5 text-center">What They Say About Us</h2>
            <div class="row">
                <div class="col-md-8">
                    <div class="card border-0 shadow-sm p-4 p-xxl-5 mb-4 me-xxl-4">

                        <!-- Quotation mark -->
                        <div class="pb-4 mb-2">
                            <span class="btn btn-icon btn-primary btn-lg shadow-primary pe-none">
                                <i class="bx bxs-quote-left"></i>
                            </span>
                        </div>

                        <!-- Slider -->
                        <div class="swiper mx-0 mb-md-n2 mb-xxl-n3" data-swiper-options='{
                "spaceBetween": 24,
                "pager": true,
                "loop": true,
                "tabs": true,
                "navigation": {
                  "prevEl": ".page-prev",
                  "nextEl": ".page-next"
                }
              }'>
                            <div class="swiper-wrapper">

                                <!-- Item -->
                                <div class="swiper-slide h-auto" data-swiper-tab="#author-1">
                                    <figure class="card h-100 position-relative border-0 bg-transparent">
                                        <blockquote class="card-body p-0 mb-0">
                                            <p class="fs-lg mb-0">Dolor, a eget elementum, integer nulla volutpat, nunc,
                                                sit. Quam iaculis varius mauris magna sem. Egestas sed sed suscipit
                                                dolor faucibus dui imperdiet at eget. Tincidunt imperdiet quis hendrerit
                                                aliquam feugiat neque cras sed. Dictum quam integer volutpat tellus,
                                                faucibus platea. Pulvinar turpis proin faucibus at mauris. Sagittis
                                                gravida vitae porta enim, nulla arcu fermentum massa. Tortor ullamcorper
                                                lacus. Pellentesque lectus adipiscing aenean volutpat tortor habitant.
                                            </p>
                                        </blockquote>
                                        <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                                            <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                                                <img src="assets/img/avatar/01.jpg" width="48" class="rounded-circle"
                                                    alt="Ralph Edwards">
                                                <div class="ps-3">
                                                    <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                                                    <span class="fs-sm text-muted">Head of Marketing</span>
                                                </div>
                                            </div>
                                            <img src="assets/img/brands/01.svg" width="160"
                                                class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide h-auto" data-swiper-tab="#author-2">
                                    <figure class="card h-100 position-relative border-0 bg-transparent">
                                        <blockquote class="card-body p-0 mb-0">
                                            <p class="fs-lg mb-0">Mi semper risus ultricies orci pulvinar in at enim
                                                orci. Quis facilisis nunc pellentesque in ullamcorper sit. Lorem blandit
                                                arcu sapien, senectus libero, amet dapibus cursus quam. Eget
                                                pellentesque eu purus volutpat adipiscing malesuada. Purus nisi, tortor
                                                vel lacus. Donec diam molestie ultrices vitae eget pulvinar fames. Velit
                                                lacus mi purus velit justo, amet. Nascetur lobortis diam, duis orci.</p>
                                        </blockquote>
                                        <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                                            <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                                                <img src="assets/img/avatar/06.jpg" width="48" class="rounded-circle"
                                                    alt="Annette Black">
                                                <div class="ps-3">
                                                    <h5 class="fw-semibold lh-base mb-0">Annette Black</h5>
                                                    <span class="fs-sm text-muted">Strategic Advisor</span>
                                                </div>
                                            </div>
                                            <img src="assets/img/brands/02.svg" width="160"
                                                class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                                        </figcaption>
                                    </figure>
                                </div>

                                <!-- Item -->
                                <div class="swiper-slide h-auto" data-swiper-tab="#author-3">
                                    <figure class="card h-100 position-relative border-0 bg-transparent">
                                        <blockquote class="card-body p-0 mb-0">
                                            <p class="fs-lg mb-0">Ac at sed sit senectus massa. Massa ante amet ultrices
                                                magna porta tempor. Aliquet diam in et magna ultricies mi at. Lectus
                                                enim, vel enim egestas nam pellentesque et leo. Elit mi faucibus laoreet
                                                aliquam pellentesque sed aliquet integer massa. Orci leo tortor ornare
                                                id mattis auctor aliquam volutpat aliquet. Odio lectus viverra eu
                                                blandit nunc malesuada vitae eleifend pulvinar. In ac fermentum sit in
                                                orci.</p>
                                        </blockquote>
                                        <figcaption class="card-footer border-0 d-sm-flex d-md-none w-100 pb-2">
                                            <div class="d-flex align-items-center border-end-sm pe-sm-4 me-sm-2">
                                                <img src="assets/img/avatar/05.jpg" width="48" class="rounded-circle"
                                                    alt="Darrell Steward">
                                                <div class="ps-3">
                                                    <h5 class="fw-semibold lh-base mb-0">Darrell Steward</h5>
                                                    <span class="fs-sm text-muted">Project Manager</span>
                                                </div>
                                            </div>
                                            <img src="assets/img/brands/04.svg" width="160"
                                                class="d-block mt-2 ms-5 mt-sm-0 ms-sm-0" alt="Company logo">
                                        </figcaption>
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Pagination (Pager) -->
                    <nav class="pagination d-flex justify-content-center justify-content-md-start">
                        <div class="page-item me-2">
                            <a class="page-link page-prev btn-icon btn-sm" href="#">
                                <i class="bx bx-chevron-left"></i>
                            </a>
                        </div>
                        <ul class="list-unstyled d-flex justify-content-center w-auto mb-0"></ul>
                        <div class="page-item ms-2">
                            <a class="page-link page-next btn-icon btn-sm" href="#">
                                <i class="bx bx-chevron-right"></i>
                            </a>
                        </div>
                    </nav>
                </div>
                <div class="col-md-4 d-none d-md-block">

                    <!-- Swiper tabs (Author images) -->
                    <div class="swiper-tabs">

                        <!-- Author image 1 -->
                        <div id="author-1" class="card bg-transparent border-0 swiper-tab active">
                            <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center"
                                style="background-image: url(assets/img/testimonials/01.jpg);"></div>
                            <div class="card-footer d-flex w-100 border-0 pb-0">
                                <img src="assets/img/brands/01.svg" width="160" class="d-none d-xl-block"
                                    alt="Company logo">
                                <div class="border-start-xl ps-xl-4 ms-xl-2">
                                    <h5 class="fw-semibold lh-base mb-0">Ralph Edwards</h5>
                                    <span class="fs-sm text-muted">Head of Marketing <span class="d-xl-none d-inline">at
                                            Lorem Ltd.</span></span>
                                </div>
                            </div>
                        </div>

                        <!-- Author image 2 -->
                        <div id="author-2" class="card bg-transparent border-0 swiper-tab">
                            <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center"
                                style="background-image: url(assets/img/testimonials/02.jpg);"></div>
                            <div class="card-footer d-flex w-100 border-0 pb-0">
                                <img src="assets/img/brands/02.svg" width="160" class="d-none d-xl-block"
                                    alt="Company logo">
                                <div class="border-start-xl ps-xl-4 ms-xl-2">
                                    <h5 class="fw-semibold lh-base mb-0">Annette Black</h5>
                                    <span class="fs-sm text-muted">Strategic Advisor <span class="d-xl-none d-inline">at
                                            Company LLC</span></span>
                                </div>
                            </div>
                        </div>

                        <!-- Author image 3 -->
                        <div id="author-3" class="card bg-transparent border-0 swiper-tab">
                            <div class="card-body p-0 rounded-3 bg-size-cover bg-repeat-0 bg-position-top-center"
                                style="background-image: url(assets/img/testimonials/03.jpg);"></div>
                            <div class="card-footer d-flex w-100 border-0 pb-0">
                                <img src="assets/img/brands/04.svg" width="160" class="d-none d-xl-block"
                                    alt="Company logo">
                                <div class="border-start-xl ps-xl-4 ms-xl-2">
                                    <h5 class="fw-semibold lh-base mb-0">Darrell Steward</h5>
                                    <span class="fs-sm text-muted">Project Manager <span class="d-xl-none d-inline">at
                                            Ipsum Ltd.</span></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Our Creative Atmosphere -->
        <section class="container mb-5 pb-lg-5 pt-2 pt-md-4">
            <h2 class="h1 d-md-inline-block position-relative mb-md-5 mb-4 text-md-start text-center">
                Our Creative Atmosphere

                <!-- Arrow shape -->
                <span class="d-md-block d-none position-absolute top-0 start-100 text-primary ms-4"
                    style="width: 84px;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="84" height="76" fill="currentColor">
                        <path
                            d="M52.873 59.368c9.856-.312 19.56 1.721 29.317 1.568.935-.074 2.084-1.013 1.722-2.019-3.406-9.705-9.025-18.368-14.874-26.844-.621-.948-2.116-.34-1.754.666-2.829 2.54-2.639 9.432-2.154 13.403-5.592 2.345-10.045 5.522-13.544 10.524-.703 1.11.064 2.705 1.287 2.702zm15.683-12.501c-.656-3.524.486-6.908.824-10.248 3.96 6.725 7.79 13.479 10.542 20.883-7.915-.124-15.674-1.371-23.618-1.625 3.071-3.274 6.922-5.5 11.278-7.295.935-.074 1.149-.938.974-1.715zm-39.5 1.536l25.888-5.82c1.294-.291 1.622-1.86.871-2.779-5.053-6.751-10.236-13.472-15.089-20.54-.592-.819-1.598-.457-1.841.278-.563-.689-1.958-.24-1.725.796.73 4.459 1.908 9.09.451 13.497-1.486 4.278-6.874 7.529-10.379 10.084-.819.592-.615 1.498-.081 2.058-.414 1.181.352 2.776 1.906 2.427zm11.493-13.598c1.774-4.206.005-9.656-1.243-13.999 3.542 6.682 7.932 12.903 12.423 18.964l-19.804 4.453c3.534-2.426 6.952-5.37 8.625-9.418zM7.077 38.931c8.313-1.733 16.584-3.049 24.39-6.435 1.107-.521 1.175-2.032.453-2.822-5.021-5.398-9.712-11.143-15.093-16.324-.346-.33-.764-.372-1.152-.285-.463-.848-2.116-.34-1.754.666 1.028 2.76.992 5.624 1.086 8.459.122 2.964.064 2.705-2.075 4.682-2.369 2.165-5.699 5.497-7.159 8.681-1.537 1.025-.768 3.844 1.303 3.378zm10.806-11.813c.46-.375.602-.951.486-1.469-.711-2.559-.805-5.394-1.257-8.012 3.407 4.266 6.972 8.631 10.608 12.709-5.492 2.186-11.375 3.237-17.228 4.417.201-.317.531-.663.732-.98 1.864-2.595 4.075-4.86 6.66-6.665z" />
                    </svg>
                </span>
            </h2>
            <img src="assets/img/landing/digital-agency/cover.jpg" alt="Team cover" class="rounded-3">
        </section>


        <!-- Awards -->
        <section class="container mb-5 pb-2 pb-md-4 pb-lg-5">
            <div class="row gy-4 py-xl-2">
                <div class="col-md-4">
                    <h2 class="mb-0 text-md-start text-center">Award-winning designs featured by</h2>
                </div>
                <div class="col-lg-7 offset-lg-1 col-md-8">
                    <div class="row row-cols-sm-4 row-cols-2 gy-4">
                        <div class="col">
                            <div class="position-relative text-center">
                                <img src="assets/img/landing/digital-agency/awards/webby.svg" width="100" alt="Webby"
                                    class="d-block mx-auto mb-3">
                                <a href="#"
                                    class="text-body justify-content-center fs-sm stretched-link text-decoration-none">4x
                                    mobile of the day</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="position-relative text-center">
                                <img src="assets/img/landing/digital-agency/awards/cssda.svg" width="100" alt="CSSDA"
                                    class="d-block mx-auto mb-3">
                                <a href="#"
                                    class="text-body justify-content-center fs-sm stretched-link text-decoration-none">1x
                                    Kudos</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="position-relative text-center">
                                <img src="assets/img/landing/digital-agency/awards/awwwards.svg" width="100"
                                    alt="Awwwards" class="d-block mx-auto mb-3">
                                <a href="#"
                                    class="text-body justify-content-center fs-sm stretched-link text-decoration-none">3x
                                    website of the day</a>
                            </div>
                        </div>
                        <div class="col">
                            <div class="position-relative text-center">
                                <img src="assets/img/landing/digital-agency/awards/fwa.svg" width="100" alt="FWA"
                                    class="d-block mx-auto mb-3">
                                <a href="#"
                                    class="text-body justify-content-center fs-sm stretched-link text-decoration-none">2x
                                    best website</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Blog + Contact cta -->
        <div class="bg-secondary mb-5 pt-5">

            <!-- Blog -->
            <section class="container mb-5 py-lg-5">
                <h2 class="h1 mb-4 pb-3 text-center">Latest From Our Blog</h2>
                <div class="row">
                    <div class="col-lg-5 col-12 mb-lg-0 mb-4">

                        <!-- Article -->
                        <article class="card h-100 border-0 shadow-sm">
                            <div class="position-relative">
                                <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                                    aria-label="Read more"></a>
                                <a href="#"
                                    class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                    data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                                    <i class="bx bx-bookmark"></i>
                                </a>
                                <img src="assets/img/landing/digital-agency/blog/01.jpg" class="card-img-top"
                                    alt="Image">
                            </div>
                            <div class="card-body pb-4">
                                <div class="d-flex align-items-center justify-content-between mb-3">
                                    <a href="#"
                                        class="badge fs-sm text-nav bg-secondary text-decoration-none">Digital</a>
                                    <span class="fs-sm text-muted">12 hours ago</span>
                                </div>
                                <h3 class="h5 mb-0">
                                    <a href="blog-single.html">A study on smartwatch design qualities and people’s
                                        preferences</a>
                                </h3>
                            </div>
                            <div class="card-footer py-4">
                                <div class="d-inline-flex align-items-center position-relative me-3">
                                    <img src="assets/img/avatar/10.jpg" class="rounded-circle me-3" width="48"
                                        alt="Avatar">
                                    <div>
                                        <a href="#"
                                            class="nav-link p-0 fw-bold text-decoration-none stretched-link">Jerome
                                            Bell</a>
                                        <span class="fs-sm text-muted">Marketing Specialist</span>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col">

                        <!-- Article -->
                        <article class="card border-0 shadow-sm overflow-hidden mb-4">
                            <div class="row g-0">
                                <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                                    style="background-image: url(assets/img/landing/digital-agency/blog/02.jpg); min-height: 15rem;">
                                    <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                                        aria-label="Read more"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#"
                                                class="badge fs-sm text-nav bg-secondary text-decoration-none">Design</a>
                                            <span class="fs-sm text-muted border-start ps-3 ms-3">1 day ago</span>
                                        </div>
                                        <h3 class="h5">
                                            <a href="blog-single.html">Brand analysis: second step to the brand
                                                identity</a>
                                        </h3>
                                        <hr class="my-4">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center position-relative me-3">
                                                <img src="assets/img/avatar/08.jpg" class="rounded-circle me-3"
                                                    width="48" alt="Avatar">
                                                <div>
                                                    <a href="#"
                                                        class="nav-link p-0 fw-bold text-decoration-none stretched-link">Annette
                                                        Black</a>
                                                    <span class="fs-sm text-muted">Product Manager</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-sm-0 mt-4 text-muted">
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="bx bx-like fs-lg me-1"></i>
                                                    <span class="fs-sm">8</span>
                                                </div>
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="bx bx-comment fs-lg me-1"></i>
                                                    <span class="fs-sm">7</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-share-alt fs-lg me-1"></i>
                                                    <span class="fs-sm">4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>

                        <!-- Article -->
                        <article class="card border-0 shadow-sm overflow-hidden">
                            <div class="row g-0">
                                <div class="col-sm-5 position-relative bg-position-center bg-repeat-0 bg-size-cover"
                                    style="background-image: url(assets/img/landing/digital-agency/blog/03.jpg); min-height: 15rem;">
                                    <a href="blog-single.html" class="position-absolute top-0 start-0 w-100 h-100"
                                        aria-label="Read more"></a>
                                    <a href="#"
                                        class="btn btn-icon btn-light bg-white border-white btn-sm rounded-circle position-absolute top-0 end-0 zindex-5 me-3 mt-3"
                                        data-bs-toggle="tooltip" data-bs-placement="left" title="Read later">
                                        <i class="bx bx-bookmark"></i>
                                    </a>
                                </div>
                                <div class="col-sm-7">
                                    <div class="card-body">
                                        <div class="d-flex align-items-center mb-3">
                                            <a href="#"
                                                class="badge fs-sm text-nav bg-secondary text-decoration-none">Tips
                                                &amp; Advice</a>
                                            <span class="fs-sm text-muted border-start ps-3 ms-3">May 24, 2021</span>
                                        </div>
                                        <h3 class="h5">
                                            <a href="blog-single.html">How to check the website before releasing it?</a>
                                        </h3>
                                        <hr class="my-4">
                                        <div
                                            class="d-flex flex-sm-nowrap flex-wrap align-items-center justify-content-between">
                                            <div class="d-flex align-items-center position-relative me-3">
                                                <img src="assets/img/avatar/09.jpg" class="rounded-circle me-3"
                                                    width="48" alt="Avatar">
                                                <div>
                                                    <a href="#"
                                                        class="nav-link p-0 fw-bold text-decoration-none stretched-link">Marvin
                                                        McKinney</a>
                                                    <span class="fs-sm text-muted">Senior UI/UX Designer</span>
                                                </div>
                                            </div>
                                            <div class="d-flex align-items-center mt-sm-0 mt-4 text-muted">
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="bx bx-like fs-lg me-1"></i>
                                                    <span class="fs-sm">8</span>
                                                </div>
                                                <div class="d-flex align-items-center me-3">
                                                    <i class="bx bx-comment fs-lg me-1"></i>
                                                    <span class="fs-sm">7</span>
                                                </div>
                                                <div class="d-flex align-items-center">
                                                    <i class="bx bx-share-alt fs-lg me-1"></i>
                                                    <span class="fs-sm">4</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-12 mt-4 pt-lg-4 pt-3 text-center">
                        <a href="blog-grid-no-sidebar.html" class="btn btn-lg btn-outline-primary w-sm-auto w-100">More
                            blog posts</a>
                    </div>
                </div>
            </section>

            <!-- Contact CTA -->
            <section class="container pt-3 pb-4 pb-md-5"
                style="margin-top: -156px; margin-bottom: 120px; transform: translateY(156px);">
                <div class="card border-0 bg-gradient-primary">
                    <div class="card-body p-md-5 p-4 bg-size-cover"
                        style="background-image: url(assets/img/landing/digital-agency/contact-bg.png);">
                        <div class="py-md-5 py-4 text-center">
                            <h3 class="h4 fw-normal text-light opacity-75">Want to work with us? Let’s talk</h3>
                            <a href="mailto:email@example.com" class="display-6 text-light">email@example.com</a>
                            <div class="pt-md-5 pt-4 pb-md-2">
                                <a href="contacts-v1.html" class="btn btn-lg btn-light">Contact us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </main>

    @include('includes.pages.footer')

    <!-- Back to top button -->
    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>

    @include('includes.pages.script')

</body>

<!-- Mirrored from silicon.createx.studio/landing-digital-agency.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 06 Apr 2023 04:14:26 GMT -->

</html>