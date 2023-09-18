@extends('users.layout.master')
@section('title', 'Category')
@section('content')

    <div class="container-fluid mb-3">
        <div class="row px-xl-5">

            <!-- Categories Start -->
            <div class="container-fluid pt-5">
                <h2 class="section-title position-relative text-uppercase mx-xl-5 mb-4"><span
                        class="bg-secondary pr-3">Categories</span></h2>
                <div class="row px-xl-5 pb-3">
                    @foreach ($categories as $category)
                        <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                            <a class="text-decoration-none" href="">
                                <div class="cat-item d-flex align-items-center mb-4">
                                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                        <img class="img-fluid" src={{ asset('img/users/img/cat-1.jpg') }} alt="">
                                    </div>
                                    <div class="flex-fill pl-3">
                                        <h6>{{ $category->category_name }}</h6>
                                        <small class="text-body">100 Products</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach

                    {{-- <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-2.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-3.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-4.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-4.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-3.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-2.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-1.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-2.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-1.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-4.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 pb-1">
                        <a class="text-decoration-none" href="">
                            <div class="cat-item img-zoom d-flex align-items-center mb-4">
                                <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                    <img class="img-fluid" src={{ asset('img/users/img/cat-3.jpg') }} alt="">
                                </div>
                                <div class="flex-fill pl-3">
                                    <h6>Category Name</h6>
                                    <small class="text-body">100 Products</small>
                                </div>
                            </div>
                        </a>
                    </div> --}}
                </div>
            </div>
            <!-- Categories End -->

        </div>
    </div>
@endsection
