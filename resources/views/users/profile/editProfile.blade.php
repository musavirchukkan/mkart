@extends('users.profile.userlayout')
@section('title', 'Customer Address')
@section('userDetails')
    <div class="container-fluid">
        <div class="row px-xl-0">
            <div class="col-lg-12">
                <h5 class="section-title position-relative text-uppercase mb-3"><span class="bg-secondary pr-3">Address</span>
                </h5>
                <div class="bg-light p-30 mb-5">
                    <form action={{route('user.profile.doEdit')}} method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label>First Name</label>
                            <input class="form-control" value="{{$profile->f_name}}" name="f_name" type="text" placeholder="John" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Last Name</label>
                            <input class="form-control" value="{{$profile->l_name}}" name="l_name" type="text" placeholder="Doe">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>User Name</label>
                            <input class="form-control" value="{{$profile->username}}" name="username" type="text" placeholder="username" required>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>E-mail</label>
                            <input class="form-control" value="{{$profile->email}}" name="email" type="email" placeholder="example@email.com" required readonly>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>Mobile No</label>
                            <input class="form-control" value="{{$profile->phone}}" name="phone" type="number" placeholder="919876543210" required>
                        </div>

                        <div class="col-md-6 form-group">
                            <label>Image</label>
                            <input class="form-control"  name="image" type="file" >
                        </div>


                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">
                                update Profile
                            </button>
                        </div>

                    </div>
                </form>
                </div>

            </div>

        </div>
    </div>
@endsection
