<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Webpage Title -->
    <title>One Production - Photografi Company</title>

    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;700&display=swap" rel="stylesheet">
    {{-- <link href="./css/bootstrap.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    {{-- <link href="./css/fontawesome-all.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/fontawesome-all.min.css') }}" />
    {{-- <link href="./css/aos.min.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/aos.min.css') }}" />
    {{-- <link href="./css/swiper.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/swiper.css') }}" />
    {{-- <link href="./css/style.css" rel="stylesheet"> --}}
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}" />

    <!-- Favicon -->
    <link rel="icon" href="./assets/images/favicon.png">
    <link rel="icon" href="{{ asset('assets/images/favicon.png') }}" />

</head>

<body>
    <div id="id">
        <div class="main-wrapper">
            <div class="navbar-bg">

                {{-- NAVBAR --}}
                @include('layouts.navbar')

                {{-- MAIN CONTENT --}}
                <div class="main-content">
                    @yield('section')
                </div>

                {{-- FOOTER --}}
                @include('layouts.footer')
            </div>
        </div>
    </div>

    <!-- Scripts -->
    {{-- <script src="./js/bootstrap.min.js"></script> --}}
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <!-- Bootstrap framework -->
    <script src="./js/purecounter.min.js"></script>
    <script src="{{ asset('assets/js/purecounter.min.js') }}"></script>
    <!-- Purecounter counter for statistics numbers -->
    <script src="./js/swiper.min.js"></script>
    <script src="{{ asset('assets/js/swiper.min.js') }}"></script>
    <!-- Swiper for image and text sliders -->
    <script src="./js/aos.js"></script>
    <script src="{{ asset('assets/js/aos.js') }}"></script>
    <!-- AOS on Animation Scroll -->
    <script src="./js/script.js"></script>
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <!-- Custom scripts -->
</body>

</html>
