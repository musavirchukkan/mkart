@extends('admin.layout.master')
@section('title', 'Dashboard')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-start transition">
        <div class="container-fluid dashboard">
            <div class="content-header">
                <h1>Dashboard</h1>
                <p></p>
            </div>

            <div class="row">
                <div class="pb-2 row"
                    style="
                padding-right: 0px;
                padding-left: 0px;
                margin-left: 0px;
                margin-right: 0px;">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="fas fa-inbox icon-home bg-primary text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Products</p>
                                        <h5>{{ $productCount }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="fas fa-chart-bar  icon-home bg-info text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Category</p>
                                        <h5> {{ $categoryCount }} </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="fas fa-clipboard-list icon-home bg-success text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Orders</p>
                                        <h5>{{ $orderCount }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-4 d-flex align-items-center">
                                        <i class="fas fa-id-card  icon-home bg-warning text-light"></i>
                                    </div>
                                    <div class="col-8">
                                        <p>Customers</p>
                                        <h5>{{ $userCount }}</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
                            <div id="columnchart"></div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">
                            <h4>Recent Messages</h4>
                        </div>
                        <div class="card-body pb-4">
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src={{ asset('img/Admin/images/message/4.jpg') }}>
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">Hank Schrader</h5>
                                    <h6 class="text-muted mb-0">@johnducky</h6>
                                </div>
                            </div>
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src={{ asset('img/Admin/images/message/5.jpg') }}>
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">Dean Winchester</h5>
                                    <h6 class="text-muted mb-0">@imdean</h6>
                                </div>
                            </div>
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src={{ asset('img/Admin/images/message/1.jpg') }}>
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">John Doe</h5>
                                    <h6 class="text-muted mb-0">@Doejohn</h6>
                                </div>
                            </div>
                            <div class="px-4">
                                <button class='btn btn-block btn-xl btn-primary font-bold mt-3'>Start
                                    Conversation</button>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h4>Latest Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">Order No</th>
                                            <th scope="col">Billing Name</th>
                                            <th scope="col">Date</th>
                                            <th scope="col">Total</th>
                                            <th scope="col">Payment Status</th>
                                            <th scope="col">Payment Method</th>
                                            <th scope="col">View Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        @foreach ($orders as $order)
                                            <tr>

                                                <td>#MK0{{ $order->order_id }}</td>
                                                <td>{{ $order->billing_name }}</td>
                                                <td>{{ $order->created_at }}</td>
                                                <td>{{ $order->price }}</td>
                                                <td>{{ $order->payment_status }}</td>
                                                <td>{{ $order->mode_of_payment }}</td>
                                                <td>{{ $order->status }}</td>

                                                <td><a href="{{ route('admin.orders.details', encrypt($order->order_id)) }}"
                                                        class="btn btn-primary">View Details</a></td>


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
    <!-- /.content -->
@endsection
