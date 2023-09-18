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
                            <a class="btn btn-primary float-right d-flex" href={{ route('admin.products.create') }}><i
                                    class='bx bx-list-plus bx-sm icon'></i>Add
                                Product
                            </a>
                            {{-- <button type="button" class="btn btn-primary float-right d-flex" data-bs-toggle="modal"
                                data-bs-target="#productModal">
                                <i class='bx bx-list-plus bx-sm icon'></i>Add Product
                            </button> --}}
                            {{-- <button type="button" class="btn btn-primary float-right d-flex" data-toggle="modal"
                                data-target="#newModal">Add
                                Product</button> --}}
                            {{-- </ul> --}}
                            @if (session()->has('message'))
                                <p class="flashMessage pl-3 pt-2 text-success">{{ session()->get('message') }}</p>
                            @endif
                        </div>

                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table id="category-list" class="table text-nowrap mb-0 table-centered table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th class=" w-5">#</th>
                                            <th class="w-5">Product Image</th>
                                            <th>Product Name</th>
                                            <th class="w-10">Category</th>
                                            <th class="w-5">Price</th>
                                            <th class="w-5">Sale Price</th>
                                            <th class="w-10">Status</th>
                                            <th class="w-10">Stock</th>
                                            <th class="w-5">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                        @foreach ($products as $product)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td><img src="{{ $product->main_image }}" alt="" width=75 />
                                                </td>
                                                <td>{{ $product->product_name }}</td>
                                                <td>{{ $product->category->category_name }}</td>
                                                <td class="text-end">₹ {{ number_format($product->price, 2) }}</td>
                                                <td class="text-end">₹ {{ number_format($product->sale_price, 2) }}</td>
                                                <td>{{ $product->status_text }}</td>
                                                <td>{{ $product->stock }}</td>
                                                <td>


                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                            href="#!" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href={{ route('admin.products.details', encrypt($product->product_id)) }}>Info</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href={{ route('admin.products.edit', encrypt($product->product_id)) }}>Edit</a>
                                                            </li>
                                                            {{-- <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="{{ route('admin.products.delete', encrypt($product->product_id)) }}">Delete
                                                                </a> --}}

                                                            <form method="POST"
                                                                action="{{ route('admin.products.delete', encrypt($product->product_id)) }}">
                                                                @csrf
                                                                <input name="_method" type="hidden" value="DELETE">
                                                                <button type="submit"
                                                                    class="dropdown-item d-flex align-items-center confirm-delete">Delete</button>
                                                            </form>


                                                            </li>
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>
                                        @endforeach




                                    </tbody>
                                </table>
                            </div>
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
