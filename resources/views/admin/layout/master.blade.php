<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') | Mkart</title>

    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href={{ asset('lib/modules/bootstrap-5.1.3/css/bootstrap.css') }}>
    <!-- Style CSS -->
    <link rel="stylesheet" href={{ asset('css/admin/css/style.css') }}>
    <!-- FontAwesome CSS-->
    <link rel="stylesheet" href={{ asset('lib/modules/fontawesome6.1.1/css/all.css') }}>
    <!-- Boxicons CSS-->
    <link rel="stylesheet" href={{ asset('lib/modules/boxicons/css/boxicons.min.css') }}>
    <!-- Apexcharts  CSS -->
    <link rel="stylesheet" href={{ asset('lib/modules/apexcharts/apexcharts.css') }}>
    <!-- Boostrap Icon-->
    <link rel="stylesheet" href={{ asset('lib/modules/bootstrap-icons/bootstrap-icons.css') }}>
</head>

<body>

    <!--Topbar -->
    @include('admin.layout.topbar')


    <!--Sidebar-->
    @include('admin.layout.sidebar')
    <!-- End Sidebar-->


    <div class="sidebar-overlay"></div>


    <!--Content Start-->
    @yield('content')
    <!-- End Content-->

    <!-- Footer -->
    @include('admin.layout.footer')


    <!-- Preloader -->
    <div class="loader">
        <div class="spinner-border text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>

    <!-- Loader -->
    <div class="loader-overlay"></div>

    <!-- General JS Scripts -->
    <script src={{ asset('js/Admin/atrana.js') }}></script>

    <!-- JS Libraies -->
    <script src={{ asset('lib/modules/jquery/jquery.min.js') }}></script>
    <script src={{ asset('lib/modules/bootstrap-5.1.3/js/bootstrap.bundle.min.js') }}></script>
    <script src={{ asset('lib/modules/popper/popper.min.js') }}></script>

    <!-- Chart Js -->
    <script src={{ asset('lib/modules/apexcharts/apexcharts.js') }}></script>
    <script src={{ asset('js/Admin/ui-apexcharts.js') }}></script>

    <!-- Template JS File -->
    <script src={{ asset('js/Admin/script.js') }}></script>
    <script src={{ asset('js/Admin/custom.js') }}></script>
</body>

</html>
