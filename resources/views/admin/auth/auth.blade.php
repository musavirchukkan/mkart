<!doctype html>
<html lang="en">

<head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/x-icon" href={{ asset('img/Admin/images/logo.png') }}>

    <title>@yield('title') | Mkart Admin</title>

    <!-- Bootstrap CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- Style CSS -->
    <link rel="stylesheet" href={{ asset('css/admin/css/style.css') }}>
    <!-- Boostrap Icon-->
    <link rel="stylesheet" href={{ asset('lib/modules/bootstrap-icons/bootstrap-icons.css') }}>
</head>

<body>

    {{-- body content --}}

    @yield('content')

    <!-- General JS Scripts -->
    <script src={{ asset('js/Admin/atrana.js') }}></script>

    <!-- JS Libraies -->
    <script src={{ asset('lib/modules/jquery/jquery.min.js') }}></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src={{ asset('lib/modules/popper/popper.min.js') }}></script>

    <!-- Template JS File -->
    <script src={{ asset('js/Admin/script.js') }}></script>
    <script src={{ asset('js/Admin/custom.js') }}></script>
</body>

</html>
