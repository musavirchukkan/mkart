@extends('admin.layout.master')
@section('title', 'Product List')
@section('content')

    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Products</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            {{-- <ul class="nav nav-pills ml-auto float-right"> --}}
                            {{-- <a class="btn btn-primary float-right d-flex" href={{ route('admin.products.create') }}><i
                                    class='bx bx-list-plus bx-sm icon'></i>Add
                                Product
                            </a> --}}
                            <button type="button" class="btn btn-primary float-right d-flex" data-bs-toggle="modal"
                                data-bs-target="#productModal">
                                <i class='bx bx-list-plus bx-sm icon'></i>Add Product
                            </button>
                            {{-- <button type="button" class="btn btn-primary float-right d-flex" data-toggle="modal"
                                data-target="#newModal">Add
                                Product</button> --}}
                            {{-- </ul> --}}
                            @if (session()->has('message'))
                                <p class="flashMessage pl-3 pt-2 text-success">{{ session()->get('message') }}</p>
                            @endif
                        </div>

                        <div class="card-body">
                            {{-- <div class="table-responsive"> --}}
                            {{-- <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">Name</th>
                                            <th scope="col">Category</th>
                                            <th scope="col">Price</th>
                                            <th scope="col">Status</th>
                                            <th scope="col">Stock</th>
                                            <th scope="col">Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($products as $product)
                                            <tr>
                                                <td scope="row">{{ $loop->iteration }}</td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->category->category_name }}</td>
                                                <td>{{ number_format($product->price, 2) }}</td>
                                                <td>{{ $product->status_text }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>
                                                    <a href={{ route('admin.products.details', encrypt($product->product_id)) }}
                                                        class="btn btn-primary btn-sm"><i class="fas fa-user"></i> Info</a>
                                                    <a href={{ route('admin.products.edit', encrypt($product->product_id)) }}
                                                        class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                    <a href={{ route('admin.products.delete', encrypt($product->product_id)) }}
                                                        class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i>
                                                        Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table> --}}
                            <table id="category-list" class="table table-striped" style="width:100%">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Product Name</th>
                                        <th scope="col">Category</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Status</th>
                                        <th scope="col">Stock</th>
                                        <th scope="col">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td scope="row">{{ $loop->iteration }}</td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>{{ $product->category->category_name }}</td>
                                            <td class="text-end">₹ {{ number_format($product->price, 2) }}</td>
                                            <td>{{ $product->status_text }}</td>
                                            <td>{{ $product->stock }}</td>
                                            <td>
                                                <a href={{ route('admin.products.details', encrypt($product->product_id)) }}
                                                    class="btn btn-primary btn-sm"><i class="fas fa-user"></i> Info</a>
                                                <a href={{ route('admin.products.edit', encrypt($product->product_id)) }}
                                                    class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                                <a href={{ route('admin.products.delete', encrypt($product->product_id)) }}
                                                    class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i>
                                                    Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>

                            </table>
                            {{-- </div> --}}
                            {{-- <div class="row card-footer clearfix ">
                                <ul class="col-8 mt-2">
                                    <h5>Total Products : ({{ $products->total() }}) </h5>
                                </ul>

                                <ul class=" col-4 pagination pagination-sm mt-2 ">
                                    {{ $products->links() }}
                                </ul>
                            </div> --}}
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    {{-- modal --}}
    <!-- Button trigger modal -->


    <!-- Modal -->

@include('admin.layout.modal')

@endsection
