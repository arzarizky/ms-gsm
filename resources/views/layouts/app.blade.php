<!doctype html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Hope UI | Responsive Bootstrap 5 Admin Dashboard Template</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('template') }}/assets/images/favicon.ico" />

    <!-- Library / Plugin Css Build -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/core/libs.min.css" />

    <!-- Aos Animation Css -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/vendor/aos/dist/aos.css" />

    <!-- Hope Ui Design System Css -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/hope-ui.min.css?v=1.2.0" />

    <!-- Custom Css -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/custom.min.css?v=1.2.0" />

    <!-- Dark Css -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/dark.min.css" />

    <!-- Customizer Css -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/customizer.min.css" />

    <!-- iziToast -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/iziToast.min.css">

    <!-- RTL Css -->
    <link rel="stylesheet" href="{{ asset('template') }}/assets/css/rtl.min.css" />

    <style>
        body {
            background-color: #eee;
            overflow-y: scroll;
            /* Add the ability to scroll */
        }

        /* Hide scrollbar for Chrome, Safari and Opera */
        body::-webkit-scrollbar {
            display: none;
        }

        /* Hide scrollbar for IE, Edge and Firefox */
        body {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }

        .loader.simple-loader {
            background-color: #151824 !important;
            height: 100%;
            width: 100%;
            position: fixed;
            place-content: center;
            overflow: hidden !important;
            top: 0px;
            right: 0px;
            z-index: 1250;
        }

        #users.table-responsive {
            overflow-x: scroll !important;
            touch-action: none;
        }

        #users.table-responsive {
            overflow-x: scroll !important;
        }

        #users.table-responsive::-webkit-scrollbar {
            overflow-x: scroll !important;
        }

        #users.table-responsive::-webkit-scrollbar-thumb {
            background-color: rgba(var(--bs-primary-rgb), 0.1);
            border-end-end-radius: 10px;
            border-end-start-radius: 10px;

        }

        body.dark .modal-content {
            background: #222738;
            background-color: rgb(34, 39, 56);
        }

        body.dark .modal-header {
            border-bottom: 1px solid #dee2e6;;
        }

        body.dark .modal-footer {
            border-top: 1px solid #dee2e6;;
        }




    </style>

</head>

<body class="theme-color-default dark">
    <!-- loader Start -->
    <div id="loading">
        <div class="loader simple-loader">
            <div class="loader-body d-flex justify-content-center">
                <img src="{{ asset('template') }}/assets/images/loader.gif" alt="load">
            </div>
        </div>
    </div>
    <!-- loader END -->

    @include('layouts.sidebar')
    <main class="main-content">
        <div class="position-relative iq-banner">
            <!--Top Bar Start-->
            @include('layouts.top-bar')
            <!-- Top Bar Header Component Start -->
            @yield('header-konten')
            <!-- Nav Header Component End -->
            <!--Nav End-->
        </div>
        @yield('body-konten')
        <!-- Footer Section Start -->
        @include('layouts.footer')
        <!-- Footer Section End -->
    </main>

    <!-- Wrapper End-->

    <!-- Library Bundle Script -->
    <script src="{{ asset('template') }}/assets/js/core/libs.min.js"></script>

    <!-- External Library Bundle Script -->
    <script src="{{ asset('template') }}/assets/js/core/external.min.js"></script>

    <!-- Widgetchart Script -->
    <script src="{{ asset('template') }}/assets/js/charts/widgetcharts.js"></script>

    <!-- mapchart Script -->
    <script src="{{ asset('template') }}/assets/js/charts/vectore-chart.js"></script>
    <script src="{{ asset('template') }}/assets/js/charts/dashboard.js"></script>

    <!-- fslightbox Script -->
    <script src="{{ asset('template') }}/assets/js/plugins/fslightbox.js"></script>

    <!-- Settings Script -->
    <script src="{{ asset('template') }}/assets/js/plugins/setting.js"></script>

    <!-- Slider-tab Script -->
    <script src="{{ asset('template') }}/assets/js/plugins/slider-tabs.js"></script>

    <!-- Form Wizard Script -->
    <script src="{{ asset('template') }}/assets/js/plugins/form-wizard.js"></script>

    <!-- AOS Animation Plugin-->
    <script src="{{ asset('template') }}/assets/vendor/aos/dist/aos.js"></script>

    <!-- App Script -->
    <script src="{{ asset('template') }}/assets/js/hope-ui.js" defer></script>

    <!-- iziToast -->
    <script src="{{ asset('template') }}/assets/js/plugins/iziToast.min.js" type="text/javascript"></script>

    @stack('konten')
</body>

</html>
