<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href={{ asset('css/users/css/theme.min.css') }}>
    @include('users.layout.head')

</head>




<body>
    <!-- Topbar Start -->
    @include('users.layout.topbar')
    <!-- Topbar End -->


    <!-- Navbar Start -->
    @include('users.profile.profileNav')
    <!-- Navbar End -->



    {{-- Content Start --}}



    <main id="main-wrapper" class="main-wrapper">


        <!-- page content -->
        <div id="app-content" class="mx-10">


            <!-- Container fluid -->
            <div class="app-content-area pt-0">
                <div class="container-fluid">


                    <div class="row align-items-center">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-12">
                            <!-- Bg -->
                            <div class="pt-20 rounded-top"
                                style="
                    background: url({{ asset('img/images/background/profile-cover.jpg') }})
                    no-repeat;
                    background-size: cover;
                    ">
                            </div>
                            <div class="card rounded-bottom rounded-0 smooth-shadow-sm mb-5">
                                <div class="d-flex align-items-center justify-content-between pt-4 pb-6 px-4">
                                    <div class="d-flex align-items-center">
                                        <!-- avatar -->
                                        <div
                                            class="avatar-xxl avatar-indicators avatar-online me-2 position-relative d-flex justify-content-end align-items-end mt-n10">
                                            @if (Auth::user()->image)
                                                <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="User Image"
                                                    class="avatar-xxl
                                                    rounded-circle border border-2 ">
                                            @else
                                                <img src="{{ asset('img/Admin/images/avatar/avatar-1.png') }}"
                                                    alt="Default Image"
                                                    class="avatar-xxl
                                                    rounded-circle border border-2 ">
                                            @endif

                                            <a href="#!" class="position-absolute top-0 right-0 me-2">
                                                <img src={{ asset('img/images/svg/checked-mark.svg') }} alt="Image"
                                                    class="icon-sm">
                                            </a>
                                        </div>
                                        <!-- text -->
                                        <div class="lh-1">
                                            <h2 class="mb-0">
                                                {{ Auth::user()->f_name }} {{ Auth::user()->l_name }}
                                                <a href="#!" class="text-decoration-none">
                                                </a>
                                            </h2>
                                            <p class="mb-0 d-block">@ {{ Auth::user()->username }}</p>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="{{ route('user.profile.edit') }}"
                                            class="btn btn-outline-primary d-none d-md-block">Edit Profile</a>
                                    </div>
                                </div>
                                <!-- nav -->
                                <ul class="nav nav-lt-tab px-4" id="pills-tab" role="tablist">
                                    <li class="nav-item ">
                                        <a class="nav-link {{ Request::is('user/profile*') ? 'active' : '' }}"
                                            href={{ route('user.profile') }}>Profile</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('user/wishlist*') ? 'active' : '' }}"
                                            href={{ route('user.whishlist') }}>Wishlist</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link {{ Request::is('user/address*') ? 'active' : '' }}"
                                            href={{ route('user.address') }}>Address</a>
                                    </li>
                                    <li class="nav-item ">
                                        <a class="nav-link {{ Request::is('user/order*') ? 'active' : '' }}"
                                            href={{ route('user.orders') }}>Orders</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link " href="profile-followers.html"> Orders details </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="profile-activity.html">Activity</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    @yield('userDetails')

                </div>
            </div>
        </div>
    </main>

    <!-- Footer Start -->
    @include('users.layout.footer')
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    @include('users.layout.scripts')
</body>

</html>
