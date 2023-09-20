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
                                                <th class="ps-1">Order ID</th>
                                                <th>Name</th>
                                                <th>Date</th>
                                                <th>Payment Status</th>
                                                <th>Total</th>
                                                <th>Order Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
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
                                                    <a href="#!">#DU00017</a>
                                                </td>
                                                <td>Harold Gonzalez </td>
                                                <td>3 Oct, 2023 10:02 PM</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>$120.00</td>
                                                <td><span class="badge badge-info-soft">Shipped</span></td>
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
                                            <tr>
                                                <td class=" pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="contactCheckbox3">
                                                        <label class="form-check-label" for="contactCheckbox3">

                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="ps-1">
                                                    <a href="#!">#DU00016</a>
                                                </td>
                                                <td>Anthony Anderson </td>
                                                <td>19 August, 2023 6:22 PM</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>$220.00</td>
                                                <td><span class="badge badge-warning-soft text-warning">In Progress</span>
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
                                            <tr>
                                                <td class=" pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="contactCheckbox4">
                                                        <label class="form-check-label" for="contactCheckbox4">

                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="ps-1">
                                                    <a href="#!">#DU00015</a>
                                                </td>
                                                <td>Gary Faulkner</td>
                                                <td>8 August, 2023 8:13 AM</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>$113.42</td>
                                                <td><span class="badge badge-info-soft">In Shipped</span></td>
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

                                            <tr>
                                                <td class=" pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="contactCheckbox6">
                                                        <label class="form-check-label" for="contactCheckbox6">

                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="ps-1">
                                                    <a href="#!">#DU00013</a>
                                                </td>
                                                <td>Kimberly Sullivan</td>
                                                <td>18 July, 2023 9:52 PM</td>
                                                <td><span class="badge bg-secondary">Refunded</span></td>
                                                <td>$113.00</td>
                                                <td><span class="badge badge-success-soft text-success">Delivered</span>
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
                                            <tr>
                                                <td class=" pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="contactCheckbox7">
                                                        <label class="form-check-label" for="contactCheckbox7">

                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="ps-1">
                                                    <a href="#!">#DU00012</a>
                                                </td>
                                                <td>Susan Pugh</td>
                                                <td>2 July, 2023 8:00 AM</td>
                                                <td><span class="badge bg-success">Paid</span></td>
                                                <td>$831.99</td>
                                                <td><span class="badge badge-success-soft text-success">Delivered</span>
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
                                            <tr>
                                                <td class=" pe-0">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" value=""
                                                            id="contactCheckbox8">
                                                        <label class="form-check-label" for="contactCheckbox8">

                                                        </label>
                                                    </div>
                                                </td>
                                                <td class="ps-1">
                                                    <a href="#!">#DU00011</a>
                                                </td>
                                                <td>Elliott Potts</td>
                                                <td>23 June, 2023 8:14 PM</td>
                                                <td><span class="badge bg-danger">Cancel</span></td>
                                                <td>$113.00</td>
                                                <td><span class="badge badge-success-soft text-success">Delivered</span>
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
                            <div class="card-footer d-md-flex justify-content-between align-items-center">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item"><a class="page-link" href="#!">Previous</a></li>
                                        <li class="page-item"><a class="page-link active" href="#!">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#!">Next</a></li>
                                    </ul>
                                </nav>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
