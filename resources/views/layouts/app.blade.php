<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />
        <title>SocialV | Responsive Bootstrap 5 Admin Dashboard Template</title>

        <link rel="shortcut icon" href="{{ asset('/images/favicon.ico') }}" />
        <link rel="stylesheet" href="{{ asset('/css/libs.min.css') }}" />
        <link rel="stylesheet" href="{{ asset('/css/socialv.css?v=4.0.0') }}" />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/@fortawesome/fontawesome-free/css/all.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/remixicon/fonts/remixicon.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/vanillajs-datepicker/dist/css/datepicker.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/font-awesome-line-awesome/css/all.min.css') }}"
        />
        <link
            rel="stylesheet"
            href="{{ asset('/vendor/line-awesome/dist/line-awesome/css/line-awesome.min.css') }}"
        />

        @stack('styles')
    </head>
    <body class="  ">
        <!-- loader Start -->
        <div id="loading">
            <div id="loading-center"></div>
        </div>
        <!-- loader END -->
        <!-- Wrapper Start -->
        <div class="wrapper">
            {{-- <x-left-sidebar /> --}}

            <x-navbar />

            {{-- <x-right-sidebar /> --}}

            @yield('content')

        </div>
        <!-- Wrapper End-->

        <x-footer />

        @stack('scripts')
        <!-- Backend Bundle JavaScript -->
        <script src="{{ asset('js/libs.min.js') }}"></script>
        <!-- slider JavaScript -->
        <script src="{{ asset('js/slider.js') }}"></script>
        <!-- masonry JavaScript -->
        <script src="{{ asset('js/masonry.pkgd.min.js') }}"></script>
        <!-- SweetAlert JavaScript -->
        <script src="{{ asset('js/enchanter.js') }}"></script>
        <!-- SweetAlert JavaScript -->
        <script src="{{ asset('js/sweetalert.js') }}"></script>
        <!-- app JavaScript -->
        <script src="{{ asset('js/charts/weather-chart.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
        <script src="{{ asset('vendor/vanillajs-datepicker/dist/js/datepicker.min.js') }}"></script>
        <script src="{{ asset('js/lottie.js') }}"></script>
    </body>
</html>
