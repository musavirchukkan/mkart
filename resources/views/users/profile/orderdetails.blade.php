@extends('users.profile.userlayout')
@section('title', ' Settings')
@section('userDetails')


    <div>

        <div>
            <div>
                <!-- row -->
                <div class="row mb-6">
                    <div class="col-12">
                        <div class="progress-container">
                            <ul class="progress-steps">
                                <li class="active">Order Placed</li>
                                <li>Packed</li>
                                <li>Shipped</li>
                                <li>Delivered</li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-lg-9 col-xxl-9 col-12">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex justify-content-between">
                                    <div>
                                        <h4 class="mb-1">Order ID: {{ $order->order_number }}</h4>
                                        <div class="d-flex align-items-center">
                                            <small>Order Date: {{ $order->created_at }}</small> <span
                                                class="badge badge-success">{{ $order->payment_status }}</span>
                                        </div>
                                    </div>
                                    <div>
                                        <a href="#!" class="btn btn-primary">Invoice</a>
                                    </div>
                                </div>

                            </div>
                            <div class="card-body">
                                <div class="table-responsive table-card">
                                    <table class="table text-nowrap mb-0 table-centered">
                                        <thead class="table-light">
                                            <tr>

                                                <th scope="col">Products</th>
                                                <th scope="col">Items</th>
                                                <th scope="col">Amounts</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($order->orderLines as $products)
                                                <tr>

                                                    <td>
                                                        <div class="d-flex align-items-center">
                                                            <a
                                                                href="{{ route('product.details', encrypt($products->product_id)) }}"><img
                                                                    src="{{ $products->product->main_image }}"
                                                                    alt="Image" class="img-4by3-md rounded-3 "></a>
                                                            <div class="ms-3">
                                                                <h5 class="mb-0"> <a href="#!" class="text-inherit">
                                                                        {{ $products->product->product_name }}</a></h5>
                                                                <small>{{ $products->product->product_code }}</small>
                                                            </div>
                                                        </div>
                                                    </td>
                                                    <td>{{ $products->quantity }}</td>
                                                    <td>{{ $products->product->sale_price }}</td>
                                                </tr>
                                            @endforeach

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xxl-3 col-12">
                        <div class="card mb-4 mt-4 mt-lg-0">
                            <div class="card-header">
                                <h4 class="mb-0">Order Summary</h4>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-centered mb-0">
                                    <thead class="table-light">
                                        <tr>

                                            <th scope="col">Descriptions</th>
                                            <th scope="col">Amounts</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>

                                            <td>Sub Total :</td>
                                            <td>₹ {{ $order->price }}</td>

                                        </tr>
                                        <tr>

                                            <td>Discount (DIS15%) : </td>
                                            <td>-$51.00</td>

                                        </tr>
                                        <tr>

                                            <td>Shipping Charge :</td>
                                            <td>$15.00</td>

                                        </tr>
                                        <tr>

                                            <td>Tax Vat 19% (included) :</td>
                                            <td>$64.00</td>

                                        </tr>
                                        <tr>

                                            <td>Total Amount</td>
                                            <td>₹ {{ $order->price }}</td>

                                        </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header">
                                <h4 class="mb-0">Payment Details</h4>
                            </div>
                            <div class="card-body">

                                <div>
                                    <ul class="list-unstyled mb-0">
                                        <li class="d-flex justify-content-between mb-2"><span>Transactions:
                                            </span> <span class="text-dark">#DU444TO10000</span></li>
                                        <li class="d-flex justify-content-between mb-2"><span>Payment Method:
                                            </span> <span class="text-dark">{{ $order->mode_of_payment }}</span></li>
                                        <li class="d-flex justify-content-between mb-2"><span>Card Holder Name:
                                            </span> <span class="text-dark">{{ $order->billing_name }}</span></li>
                                        <li class="d-flex justify-content-between mb-2"><span>Card Number:
                                            </span> <span class="text-dark">xxxx xxxx xxxx 6779</span></li>
                                        <li class="d-flex justify-content-between"><span>Total Amount: </span>
                                            <span class="text-dark ">₹ {{ $order->price }}</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
