<div class="container-fluid bg-dark mb-30">
    <div class="row px-xl-5">

        <div class="col-lg-12">
            <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-3 py-lg-0 px-0">
                <a href="" class="text-decoration-none d-block d-lg-none">
                    <span class="h1 text-uppercase text-dark bg-light px-2">M</span>
                    <span class="h1 text-uppercase text-light bg-primary px-2 ml-n1">Kart</span>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-md-center" id="navbarCollapse">
                    <div class="navbar-nav ">
                        @foreach ($categories as $category )
                        <a href={{route('product.category',encrypt($category->category_id ))}} class="nav-item nav-link">{{$category->category_name }}</a>
                        @endforeach

                        {{-- <div class="nav-item dropdown">
                            <a href={{ route('product.cart') }} class="nav-link dropdown-toggle"
                                data-toggle="dropdown">Pages <i class="fa fa-angle-down mt-1"></i></a>
                            <div class="dropdown-menu bg-primary rounded-0 border-0 m-0">
                                <a href={{ route('product.cart') }} class="dropdown-item">Shopping Cart</a>
                                <a href="checkout.html" class="dropdown-item">Checkout</a>
                            </div>
                        </div> --}}

                    </div>

                </div>
            </nav>
        </div>
    </div>
</div>
