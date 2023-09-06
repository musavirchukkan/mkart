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
                            <ul class="nav nav-pills ml-auto float-right">
                                <a class="btn btn-primary" href={{ route('admin.products.create') }}><i
                                        class='bx bx-list-plus bx-sm icon'></i>Add
                                    Product</a>
                            </ul>
                            @if (session()->has('message'))
                                <p class="flashMessage pl-3 pt-2 text-success">{{ session()->get('message') }}</p>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
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
                                                <td>{{ $product->name }}</td>
                                                <td>{{ $product->category->name }}</td>
                                                <td>{{ number_format($product->price, 2) }}</td>
                                                <td>{{ $product->status_text }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>
                                                    <a href={{ route('admin.products.details', encrypt($product->product_id)) }}
                                                        class="btn btn-primary btn-sm"><i class="fas fa-user"></i> Info</a>
                                                    <a href={{ route('admin.products.edit', encrypt($product->product_id)) }}
                                                        class="btn btn-info btn-sm">Edit</a>
                                                    <a href={{ route('admin.products.delete', encrypt($product->product_id)) }}
                                                        class="btn btn-danger btn-sm">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="row card-footer clearfix ">
                                <ul class="col-8 mt-2">
                                    <h5>Total Products : ({{ $products->total() }}) </h5>
                                </ul>

                                <ul class=" col-4 pagination pagination-sm mt-2 ">
                                    {{ $products->links() }}
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection
