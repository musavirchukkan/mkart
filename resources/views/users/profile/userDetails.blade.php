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

                        <h5 class="text-uppercase">Bio</h5>
                        <!-- text -->
                        <p class="mt-2 mb-6">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                            Suspen disse var ius enim in eros elementum tristique.
                            Duis cursus, mi quis viverra ornare, eros dolor interdum
                            nulla, ut commodo diam libero vitae erat.
                        </p>
                        <!-- row -->
                        <div class="row">
                            <div class="col-12 mb-5">
                                <!-- text -->
                                <h5 class="text-uppercase">Position</h5>
                                <p class="mb-0">Theme designer at Gumroad.</p>
                            </div>
                            <div class="col-6 mb-5">
                                <h5 class="text-uppercase">Phone</h5>
                                <p class="mb-0">+32112345689</p>
                            </div>
                            <div class="col-6 mb-5">
                                <h5 class="text-uppercase">
                                    Date of Birth
                                </h5>
                                <p class="mb-0">01.10.1997</p>
                            </div>
                            <div class="col-6">
                                <h5 class="text-uppercase">Email</h5>
                                <p class="mb-0">Dashui@gmail.com</p>
                            </div>
                            <div class="col-6">
                                <h5 class="text-uppercase">Location</h5>
                                <p class="mb-0">Ahmedabad, India</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div>
    </div>






@endsection

