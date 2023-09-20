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
                            <a class="text-decoration-none" href="{{ route('product.category', encrypt($category->category_id))}}">
                                <div class="cat-item d-flex align-items-center mb-4">
                                    <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                        <img class="img-fluid" src={{ asset($category->category_image) }} alt="">
                                    </div>
                                    <div class="flex-fill pl-3">
                                        <h6>{{ $category->category_name }}</h6>
                                        <small class="text-body">{{$category->products->count()}} Products</small>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach


                </div>
            </div>
            <!-- Categories End -->

        </div>
    </div>
@endsection
