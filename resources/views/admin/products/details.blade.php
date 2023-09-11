@extends('admin.layout.master')
@section('title', 'Product Details')
@section('content')


    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Product Details</h1>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>

            <!-- Main content -->



            <!-- Container fluid -->

            <div>
                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <!-- card body -->
                            <div class="card-body p-5">
                                <div class="row">
                                    <div class="col-xl-6">
                                        <div class="product" id="product">
                                            <div>
                                                <div>
                                                    <!-- img -->
                                                    <img src="{{ $product->image }}" alt="" class="img-fluid">
                                                </div>

                                            </div>
                                            <div>
                                                <div>
                                                    <!-- img -->
                                                    <img src="{{ $product->main_image }}" alt="" class="img-fluid">
                                                </div>

                                            </div>
                                            <div>
                                                <div>
                                                    <!-- img -->
                                                    <img src="{{ $product->image }}" alt="Image" class="img-fluid">
                                                </div>

                                            </div>
                                            <div>
                                                <div>
                                                    <!-- img -->
                                                    <img src="{{ $product->image }}" alt="Image" class="img-fluid">
                                                </div>

                                            </div>
                                            <div>
                                                <div>
                                                    <!-- img -->
                                                    <img src="{{ $product->image }}" alt="Image" class="img-fluid">
                                                </div>

                                            </div>

                                        </div>
                                        <!-- product tools -->
                                        <div class="product-tools">
                                            <div class="thumbnails row g-3" id="product-thumbnails">
                                                <div class="col-3">
                                                    <div class="thumbnails-img">
                                                        <!-- img -->
                                                        <img src="{{ $product->image }}" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumbnails-img">
                                                        <!-- img -->
                                                        <img src="{{ $product->main_image }}" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumbnails-img">
                                                        <!-- img -->
                                                        <img src="{{ $product->image }}" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumbnails-img">
                                                        <!-- img -->
                                                        <img src="{{ $product->image }}" alt="Image">
                                                    </div>
                                                </div>
                                                <div class="col-3">
                                                    <div class="thumbnails-img">
                                                        <!-- img -->
                                                        <img src="{{ $product->image }}" alt="Image">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-6 col-12">
                                        <div class="my-5 mx-xl-10">
                                            <div>
                                                <!-- heading -->
                                                <h1>{{ $product->product_name }}</h1>

                                            </div>
                                            <hr class="my-3">
                                            <div class="mb-5">
                                                <!-- heading -->
                                                <h4 class="mb-1">&#8377 {{ $product->sale_price }} <span
                                                        class="text-muted text-decoration-line-through">&#8377
                                                        {{ $product->price }}</span>
                                                    <span class="text-warning"> ({{ $discount }}% OFF)</span>
                                                </h4>
                                                <span>inclusive of all taxes</span>
                                            </div>
                                            <div class="mb-4 d-md-flex justify-content-between align-items-center">
                                                <h4 class="mb-2 mb-md-0">Category</h4>
                                                <div>
                                                    <!-- btn group -->
                                                    <div class="btn-group" role="group"
                                                        aria-label="Basic radio toggle button group">

                                                        <!-- form check radio -->
                                                        <h5>{{ $product->category->category_name }}</h5>



                                                    </div>

                                                </div>
                                            </div>


                                            <hr class="mt-4 mb-2">
                                            <div class=" mb-4" id="ecommerceAccordion">
                                                <!-- List group -->

                                                <ul class="list-group list-group-flush">

                                                    <!-- List group item -->
                                                    <li class="list-group-item px-0">
                                                        <!-- Toggle -->
                                                        <a class="d-flex align-items-center text-inherit text-decoration-none h4 mb-0"
                                                            data-bs-toggle="collapse" href="#productDetails" role="button"
                                                            aria-expanded="false" aria-controls="productDetails">
                                                            <div class="me-auto">
                                                                Product Discription
                                                            </div>
                                                            <!-- Chevron -->
                                                            <span class="chevron-arrow  ms-4">
                                                                <i data-feather="chevron-down" class="icon-xs"></i>
                                                            </span>
                                                        </a>
                                                        <!-- Row -->
                                                        <!-- Collapse -->
                                                        <div class="collapse show" id="productDetails"
                                                            data-bs-parent="#ecommerceAccordion">
                                                            <div class="py-3 ">
                                                                <p>{{ $product->description }}</p>



                                                            </div>
                                                        </div>
                                                    </li>




                                                </ul>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
        </main>





    </div>
    </div>
@endsection
