<div id="app-content">

    <!-- Container fluid -->
    <div class="app-content-area">
        <div class="container-fluid">


                <!-- row -->
                <div class="row">
                    <div class="col-12">
                        <!-- card -->
                        <div class="card mb-4">

                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered table-hover">
                                        <thead class="table-light">
                                            <tr>
                                                <th class=" pe-0  ">#</th>

                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Payment Status</th>
                                                <th>Total</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                            <tr>

                                                <td class=" pe-0">{{$loop->iteration}}</td>

                                                <td>{{$order->user->f_name}} </td>
                                                <td>{{$order->updated_at}}</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>$120.00</td>
                                                <td><span class="badge badge-info-soft">Shipped</span></td>
                                                <td>


                                                    <div class="dropdown">
                                                        <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                            href="#!" role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            <i data-feather="more-vertical" class="icon-xs"></i>
                                                        </a>

                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Action</a></li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Another action</a>
                                                            </li>
                                                            <li><a class="dropdown-item d-flex align-items-center"
                                                                    href="#!">Something else
                                                                    here</a></li>
                                                        </ul>
                                                    </div>

                                                </td>
                                            </tr>






                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
