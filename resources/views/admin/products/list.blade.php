@extends('admin.layout.master')
@section('title', 'Product List')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href={{ route('admin.dashboard') }}>Home</a></li>
                        <li class="breadcrumb-item active">Products</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">

                        <!-- /.card-header -->
                        <div class="card-header">
                            <h2 class="card-title">Total Products : ({{ $products->total() }})</h2>
                            <div class="card-tools">
                                <ul class="nav nav-pills ml-auto">
                                    <a class="btn btn-primary" href={{ route('admin.products.create') }}>Add
                                        Product</a>
                                </ul>
                            </div>

                        </div>
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                        <th>Favourite</th>
                                        <th style="width: 15%">Label</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $product->name }}</td>
                                            <td>{{ number_format($product->price, 2) }}</td>
                                            <td>{{ $product->status }}</td>
                                            <td>{{ $product->is_favourite }}</td>
                                            <td>
                                                <a href="" class="btn btn-info btn-sm">Edit</a>
                                                <a href="" class="btn btn-danger btn-sm">Delete</a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer clearfix">
                            <ul class="pagination pagination-sm m-0 float-right">
                                {{ $products->links() }}
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->

@endsection
