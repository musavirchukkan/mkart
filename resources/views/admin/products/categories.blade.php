@extends('admin.layout.master')
@section('title', 'Product List')
@section('content')

    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Categories</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">

                            {{-- <a class="btn btn-primary float-right d-flex" href={{ route('admin.products.categories') }}>
                                <i class='bx bx-list-plus bx-sm icon'></i>Add
                                Category
                            </a> --}}
                            <button type="button" class="btn btn-primary float-right d-flex" data-bs-toggle="modal"
                                data-bs-target="#categoryModal"><i class='bx bx-list-plus bx-sm icon'></i>
                                Add Category
                            </button>

                            @if (session()->has('message'))
                                <p class="flashMessage pl-3 pt-2 text-success">{{ session()->get('message') }}</p>
                            @endif
                        </div>

                        <table id="category-list" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>

                                    <th scope="col">Category Name</th>
                                    <th scope="col">Total Products</th>
                                    <th scope="col">Actions</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $category)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>{{ $category->category_name }}</td>
                                        <td>
                                            {{-- <a href={{ route('admin.products.details', encrypt($product->product_id)) }}
                                                class="btn btn-primary btn-sm"><i class="fas fa-user"></i> Info</a>
                                            <a href={{ route('admin.products.edit', encrypt($product->product_id)) }}
                                                class="btn btn-info btn-sm"><i class="fas fa-edit"></i> Edit</a>
                                            <a href={{ route('admin.products.delete', encrypt($product->product_id)) }}
                                                class="btn btn-danger btn-sm"><i class="fas fa-xmark"></i>
                                                Delete</a> --}}
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                            {{-- <tfoot>
                                <tr>
                                    <th>Name</th>
                                    <th>Position</th>
                                    <th>Office</th>
                                    <th>Age</th>
                                    <th>Start date</th>
                                    <th>Salary</th>
                                </tr>
                            </tfoot> --}}
                        </table>
                    </div>

                </div>
            </div>

        </div>

    </div>
    </div>
{{-- modal --}}
@include('admin.layout.modal')
{{-- end modal --}}

@endsection
