@extends('users.profile.userlayout')
@section('title', 'Customer Address')
@section('userDetails')



<div class="py-6">
    <div class="row">
      <!-- Section Heading -->
      <div class="col-md-12 col-12 mb-4">
        <div class="d-flex justify-content-between
          align-items-center">
          <!-- Heading -->
          <div class="mb-3 mb-lg-0">
            <h3 class="mb-0">Addresses</h3>
          </div>
          <!-- icons -->
          <div class="d-flex align-items-center">
            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle">
              <i  data-feather="settings" class="icon-xs"></i>
            </a>
            <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle">
              <i  data-feather="filter" class="icon-xs"></i>
            </a>
            <a href={{route('user.address.add')}} class="btn btn-primary ms-3">Add New Address</a>
          </div>
        </div>

      </div>
@foreach ($addresses as $address )


      <div class="col-xl-4 col-lg-6 col-md-12 col-12 mb-5">
        <!-- card -->
        <div class="card h-100">
          <!-- card body -->
          <div class="card-body">
            <!-- heading-->
            <div class="d-flex align-items-center
              justify-content-between">
              <div class="d-flex align-items-center
                justify-content-between">
                <!-- icon-->

                <!-- text-->
                <div class="ms-3">

                  <h5 class="mb-0"><a href="#" class="text-inherit">{{$address->fname}} {{$address->lname}}</a></h5>

                </div>
              </div>
              <!-- dropdown-->
              <div class="d-flex align-items-center">
                <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle"><i data-feather="star"
                    class="icon-xs"></i></a>
                <div class="dropdown dropstart">
                  <a href="#!" class="btn btn-ghost btn-icon btn-sm rounded-circle" id="dropdownProjectOne"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="icon-xs" data-feather="more-vertical"></i>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownProjectOne">
                    <a class="dropdown-item d-flex align-items-center" href="{{route('user.address.edit', encrypt($address->address_id)  )}}">Edit</a>
                    <a class="dropdown-item d-flex align-items-center" href="{{route('user.address.delete',encrypt($address->address_id))}}">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- para-->
            <div class="my-4 ms-3">
              <h6 class="mb-0">{{$address->house_name}} <br> {{$address->street}}, {{$address->city}}, <br>
                {{$address->state}}, {{$address->country}}, <br> {{$address->pincode}}</h6>
            </div>
            <div class="my-4 ms-3">
                <h6 class="mb-0">{{$address->phone}} <br> {{$address->email}}</h6>
              </div>

            <!-- progress -->



          </div>


        </div>
      </div>

      @endforeach


    </div>
  </div>

@endsection
