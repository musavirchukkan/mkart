<div class="container-fluid">

    <div class="row align-items-center bg-light py-3 px-xl-5 d-none d-lg-flex">
        <div class="col-lg-4">
            <a href="{{route('homepage')}}" class="text-decoration-none">
                <span class="h1 text-uppercase text-primary bg-dark px-2">M</span>
                <span class="h1 text-uppercase text-dark bg-primary px-2 ml-n1">Kart</span>
            </a>
        </div>
        <div class="col-lg-4 col-6 text-left">
            <form action="">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search for products">
                    <div class="input-group-append">
                        <span class="input-group-text bg-transparent text-primary">
                            <i class="fa fa-search"></i>
                        </span>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-lg-4 col-6 text-right">




            <a href={{ route('product.cart') }} style="color:#6C757D "><i class="fa cartcount fa-shopping-cart"
                    aria-hidden="true"></i><span>Cart</span>
            </a>
            <div class="btn-group pl-3">
                @auth
                    <div class="dropdown custom-dropdown">
                        <a href="#" data-toggle="dropdown" class="d-flex align-items-center dropdown-link text-left"
                            aria-haspopup="true" aria-expanded="false" data-offset="0, 20">
                            <div class="profile-pic mr-3">
                                @if (Auth::user()->image)
                                    <img src="{{ asset('storage/' . $user->image) }}" alt="User Image">
                                @else
                                    <img src="{{ asset('img/Admin/images/avatar/avatar-1.png') }}" alt="Default Image">
                                @endif

                            </div>
                            <div class="profile-info">
                                <h3 class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                                    {{ Auth::user()->f_name }}
                                </h3>
                                <span>{{ Auth::user()->email }}</span>
                            </div>


                        </a>

                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">


                            <a class="dropdown-item" href="{{ route('user.profile') }}"> <span
                                    class="icon icon-dashboard"></span>Profile</a>
                            <a class="dropdown-item" href={{ route('user.whishlist') }}><span class="icon icon-mail_outline"></span>Wishlist</a>
                            <a class="dropdown-item" href={{ route('user.orders') }}><span class="icon icon-people"></span>Orders</a>
                            <a class="dropdown-item" href={{ route('user.address') }}><span class="icon icon-people"></span>Address</a>
                            <a class="dropdown-item" href={{ route('user.settings') }}><span class="icon icon-cog"></span>Settings</a>
                            <a class="dropdown-item text-danger" href="{{ route('logout') }}"><span class="icon icon-sign-out"></span>Logout</a>





                        </div>
                    </div>
                @else
                    <a href="{{ route('login') }}" style="text-decoration:none"> <button class="dropdown-item"
                            type="button">Sign in</button></a>
                    <a href="{{ route('signup') }}" style="text-decoration:none"> <button class="dropdown-item"
                            type="button">Sign up</button></a>
                @endauth



            </div>
        </div>
    </div>

</div>
</div>
