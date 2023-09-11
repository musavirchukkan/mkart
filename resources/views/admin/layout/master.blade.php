<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title') | Mkart</title>

    <link rel="icon" type="image/x-icon" href={{ asset('img/Admin/images/logo.png') }}>
    <link href="{{ asset('lib/simplebar/dist/simplebar.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/admin/css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/dropzone/dist/dropzone.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/-yaireo/tagify/dist/tagify.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/-mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">


    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
    <link rel="stylesheet" href={{asset('lib/tiny-slider/dist/tiny-slider.css')}}>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.min.css">

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src={{ asset('lib/modules/popper/popper.min.js') }}></script>

    <!-- Chart Js -->
    {{-- <script src={{ asset('lib/modules/apexcharts/apexcharts.js') }}></script> --}}
    {{-- <script src={{ asset('js/Admin/ui-apexcharts.js') }}></script> --}}
    <script src="{{ asset('lib/feather-icons/dist/feather.min.js') }}"></script>
    <!-- Template JS File -->
    <script src={{ asset('js/Admin/script.js') }}></script>
    <script src={{ asset('js/Admin/custom.js') }}></script>

    <script src="{{ asset('lib/dropzone/dist/min/dropzone.min.js') }}"></script>
    <script src="{{ asset('lib/-yaireo/tagify/dist/tagify.min.js') }}"></script>
    <script src="{{ asset('lib/simplebar/dist/simplebar.min.js') }}"></script>
    <!-- Theme JS -->
    <script src={{asset('lib/tiny-slider/dist/min/tiny-slider.js')}}></script>
    <script src="{{ asset('js/Admin/theme.min.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
    <script src={{ asset('js/scripts.js') }}></script>
    <script src="{{ asset('lib/feather-icons/dist/feather.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.7.27/dist/sweetalert2.all.min.js"></script>


    <script src={{ asset('js/scripts.js') }}></script>
</body>

</html>
