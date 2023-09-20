<!DOCTYPE html>
<html lang="en">

<head>
    @include('users.layout.head')
</head>

<body>
    @if (session('message'))
        <div class="alert alert-success d-flex align-items-center justify-content-center m-10" id="session-message">

            {{ session('message') }}
    @endif
    </div>

    <!-- Topbar Start -->
    @include('users.layout.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('users.layout.navbar')
    <!-- Navbar End -->



    {{-- Content Start --}}

    @yield('content')

    {{-- Content End --}}



    <!-- Footer Start -->
    @include('users.layout.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('users.layout.scripts')
</body>

</html>
