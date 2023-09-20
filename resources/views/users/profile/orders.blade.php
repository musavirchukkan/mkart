@extends('users.profile.userlayout')
@section('title', ' Settings')
@section('userDetails')



    <div>
        <div>

            <div>
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
                                                <th class=" pe-0  ">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="checkAll">
                                                        <label class="form-check-label" for="checkAll">

                                                        </label>
                                                    </div>
                                                </th>
                                                <th class="ps-1">Order Number</th>
                                                <th>Billing Name</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Total</th>
                                                <th>Payment</th>
                                                <th>Mode of Payment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($orders as $order)
                                                <tr>
                                                    <td class=" pe-0">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox" value=""
                                                                id="contactCheckbox2">
                                                            <label class="form-check-label" for="contactCheckbox2">

                                                            </label>
                                                        </div>
                                                    </td>
                                                    <td class="ps-1">
                                                        <a href="#!">{{ $order->order_number }}</a>
                                                    </td>
                                                    <td>{{ $order->billing_name }} </td>
                                                    <td>{{ $order->billing_email }}</td>
                                                    <td>{{ $order->billing_phone }}</td>
                                                    <td>{{ $order->price }}</td>

                                                    <td><span
                                                            class="badge @if ($order->payment_status == 'paid') bg-success
                                                        @elseif ($order->payment_status == 'refund') bg-warning
                                                        @else bg-danger @endif ">{{ $order->payment_status }}</span>


                                                    </td>
                                                    <td>{{ $order->mode_of_payment }}</td>

                                                    <td><span
                                                            class="badge @if ($order->status == 'placed') badge-info
                                                            @elseif ($order->status == 'confirmed') badge-success
                                                            @elseif ($order->status == 'delivered') badge-primary
                                                            @elseif ($order->status == 'returned') badge-danger @endif ">{{ $order->status }}</span>
                                                    </td>
                                                    <td>


                                                        <div class="dropdown">
                                                            <a class="btn btn-icon btn-sm btn-ghost rounded-circle"
                                                                href="#!" role="button" data-bs-toggle="dropdown"
                                                                aria-expanded="false">
                                                                <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                    height="24" viewBox="0 0 24 24" fill="none"
                                                                    stroke="currentColor" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round"
                                                                    class="feather feather-more-vertical icon-xs">
                                                                    <circle cx="12" cy="12" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="5" r="1">
                                                                    </circle>
                                                                    <circle cx="12" cy="19" r="1">
                                                                    </circle>
                                                                </svg>
                                                            </a>

                                                            <ul class="dropdown-menu" style="">
                                                                <li><a class="dropdown-item d-flex align-items-center"
                                                                        href={{ route('user.orders.details', encrypt($order->order_id)) }}>View</a>
                                                                </li>
                                                                <li><a class="dropdown-item d-flex align-items-center"
                                                                        href="#!">Track</a>
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
                            <div class="card-footer d-md-flex justify-content-between align-items-center">
                                {{ $orders->links() }}
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
