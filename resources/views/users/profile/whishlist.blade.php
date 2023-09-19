@extends('users.profile.userlayout')
@section('title', 'whishlist')
@section('userDetails')




    <div>
        <div>
            <!-- row -->

            <div class="row">
                <div class="col-xxl-9 col-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive table-card">
                                <table class="table table-centered text-nowrap mb-0">
                                    <thead class="table-light">
                                        <tr>

                                            <th>Products</th>
                                            <th>Sale Price</th>

                                            <th>Price</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($wishlists as $wishlist)
                                        <tr>

                                            <td>
                                                <div class="d-flex align-items-center">
                                                    <a href="#!"><img src="{{asset($wishlist->product->main_image)}}"
                                                            alt="Image" class="img-4by3-md rounded-3"></a>
                                                    <div class="ms-3">
                                                        <h5 class="mb-0"> <a href="#!" class="text-inherit">{{$wishlist->product->product_name}}</a></h5>
                                                    </div>
                                                </div>
                                            </td>

                                            <td>₹{{ $wishlist->product->sale_price }}</td>

                                            <td>₹{{ $wishlist->product->price }}</td>
                                            <td>
                                                <a href="{{ route('product.addToCart', encrypt($wishlist->product_id)) }}"
                                                    class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                    data-template="cartOne">
                                                    <i data-feather="shopping-cart" class="icon-xs"></i>
                                                    <div id="cartOne" class="d-none">
                                                        <span>Add to Cart</span>
                                                    </div>
                                                </a>
                                                <a href="{{ route('user.wishlist.delete', encrypt($wishlist->favorite_id)) }}"
                                                    class="btn btn-ghost btn-icon btn-sm rounded-circle texttooltip"
                                                    data-template="trashOne">
                                                    <i data-feather="trash-2" class="icon-xs"></i>
                                                    <div id="trashOne" class="d-none">
                                                        <span>Delete</span>
                                                    </div>
                                                </a>

                                            </td>
                                        </tr>
                                        @endforeach

                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card-footer  justify-content-between d-flex">
                            <a href="{{route('product.shop')}}" class="btn btn-outline-primary">Continue Shopping</a>
                            <a href="#!" class="btn btn-primary">Checkout</a>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-3">
                    <div class="card mb-4  mt-xxl-0">
                        <div class="card-header">
                            <h4 class="mb-3">Order Summary</h4>
                            <form class="row g-2">
                                <div class="col">
                                    <input type="text" class="form-control" placeholder="Coupon Code">
                                </div>
                                <div class="col-auto">
                                    <button type="submit" class="btn btn-dark">Apply</button>
                                </div>

                            </form>
                        </div>
                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between mb-3">
                                    <span>Sub Total :</span>
                                    <span>$340.00</span>

                                </li>
                                <li class="d-flex justify-content-between mb-3">
                                    <span>Discount (DIS15%) : </span>
                                    <span class="text-success">-$51.00</span>

                                </li>
                                <li class="d-flex justify-content-between mb-3">
                                    <span>Shipping Charge : </span>
                                    <span class="text-success">Free</span>

                                </li>
                                <li class="d-flex justify-content-between">
                                    <span>Tax Vat 19% (included) : </span>
                                    <span class="text-success">$64.00</span>

                                </li>
                            </ul>
                        </div>
                        <div class="card-footer">
                            <ul class="list-unstyled mb-0">
                                <li class="d-flex justify-content-between">
                                    <span class="text-dark">Order Total</span>
                                    <span class="text-primary ">$368.00</span>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>



@endsection
