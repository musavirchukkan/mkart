@extends('users.profile.userlayout')
@section('title', 'Customer Details')
@section('userDetails')

    <!-- content -->
    <div>
        <!-- row -->
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-12 mb-5">
                <!-- card -->
                <div class="card h-100">
                    <!-- card body -->
                    <div class="card-header">
                        <h4 class="mb-0">About Me</h4>
                    </div>
                    <div class="card-body">
                        <!-- card title -->

                        <h5 class="text-uppercase">Full Name</h5>
                        <!-- text -->
                        <p class="mt-2 mb-6">
                            {{ $profile->f_name }} {{ $profile->l_name }}
                        </p>
                        <!-- row -->
                        <div class="row">

                            <div class="col-6 mb-5">
                                <h5 class="text-uppercase">Phone</h5>
                                <p class="mb-0">{{$profile->phone}}</p>
                            </div>
                            <div class="col-6 mb-5">
                                <h5 class="text-uppercase">
                                    Email
                                </h5>
                                <p class="mb-0">{{$profile->email}}</p>
                            </div>
                            <div class="col-6">
                                <h5 class="text-uppercase">Username</h5>
                                <p class="mb-0">{{$profile->username}}</p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>






@endsection

