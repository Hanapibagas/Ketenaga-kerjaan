<!DOCTYPE html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset="utf-8">

    <title>@yield('title') | Ketenagakerjaan</title>

    @include('includes.pages.style')

</head>

<body>
    <main class="page-wrapper">

        @include('includes.pages.navbar')

        @yield('content')

    </main>

    @include('includes.pages.footer')

    <a href="#top" class="btn-scroll-top" data-scroll>
        <span class="btn-scroll-top-tooltip text-muted fs-sm me-2">Top</span>
        <i class="btn-scroll-top-icon bx bx-chevron-up"></i>
    </a>

    @include('includes.pages.script')

</body>

</html>