<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/images/favicon.svg" type="image/x-icon" />

    <title>@yield('title') | Ketenagakerjaan</title>

    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.bootstrap3.min.css"
        integrity="sha256-ze/OEYGcFbPRmvCnrSeKbRTtjG4vGLHXgOqsyLFTRjg=" crossorigin="anonymous" />

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.1/jquery.min.js"></script>

    @include('includes.admin-masyarakat.style')

</head>

<body>

    @include('includes.admin-masyarakat.sidebar')

    <div class="overlay"></div>

    <main class="main-wrapper">

        @include('includes.admin-masyarakat.navbar')

        <section class="section">

            @yield('content')

        </section>

        @include('includes.admin-masyarakat.footer')

    </main>

    <button class="option-btn">
        <i class="lni lni-cog"></i>
    </button>
    <div class="option-overlay"></div>
    <div class="option-box">
        <div class="option-header">
            <div>
                <h5>Merubah Tamoilan Tema</h5>
            </div>
            <button class="option-btn-close text-gray">
                <i class="lni lni-close"></i>
            </button>
        </div>
        <h6 class="mb-10">Sidebar</h6>
        <ul class="mb-30">
            <li><button class="leftSidebarButton active">Left Sidebar</button></li>
            <li><button class="rightSidebarButton">Right Sidebar</button></li>
        </ul>

        <h6 class="mb-10">Theme</h6>
        <ul class="d-flex flex-wrap align-items-center">
            <li>
                <button class="lightThemeButton active">
                    Light Theme + Sidebar 1
                </button>
            </li>
            <li>
                <button class="lightThemeButton2">Light Theme + Sidebar 2</button>
            </li>
            <li><button class="darkThemeButton">Dark Theme + Sidebar 1</button></li>
            <li>
                <button class="darkThemeButton2">Dark Theme + Sidebar 2</button>
            </li>
        </ul>
    </div>

    @include('includes.admin-masyarakat.script')

    @stack('add-script')
</body>

</html>
