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


                        <table id="order-list" class="table table-striped" style="width:100%">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Order No</th>
                                            <th scope="col">Billing Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">Actions</th>



                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td scope="row">{{ $loop->iteration }}</td>
                                        <td>#MK0{{ $order->order_id }}</td>
                                        <td>{{ $order->billing_name}}</td>
                                        <td>{{ $order->created_at }}</td>
                                        <td>{{ $order->price }}</td>
                                        <td>{{ $order->payment_status }}</td>
                                        <td>{{ $order->mode_of_payment }}</td>
                                        <td>{{ $order->status }}</td>
                                        <td>
                                            <div class="dropdown">
                                                <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                    href="#!" role="button" data-bs-toggle="dropdown"
                                                    aria-expanded="false">
                                                    <i data-feather="more-vertical" class="icon-xs"></i>
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item d-flex align-items-center"
                                                            href={{ route('admin.orders.details', encrypt($order->order_id)) }}>Info</a>
                                                    </li>
                                                    <li><a class="dropdown-item d-flex align-items-center"
                                                            href={{ route('admin.orders.edit', encrypt($order->order_id)) }}>Edit</a>
                                                    </li>


                                                        <form method="POST" action="{{ route('admin.orders.delete', encrypt($order->order_id)) }}">
                                                            @csrf
                                                            <input name="_method" type="hidden" value="DELETE">
                                                            <button type="submit" class="dropdown-item d-flex align-items-center confirm-delete" >Delete</button>
                                                        </form>


                                                    </li>
                                                </ul>
                                            </div>
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


@endsection
