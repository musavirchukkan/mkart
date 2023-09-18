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
            <a href="#!" class="btn btn-primary ms-3">Create new Team</a>
          </div>
        </div>

      </div>

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
                <div>
                  <img src={{asset('img/images/svg/brand-logo-1.svg')}} alt="Image">
                </div>
                <!-- text-->
                <div class="ms-3">

                  <h4 class="mb-0"><a href="#!" class="text-inherit">File
                      Management App</a></h4>

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
                    <a class="dropdown-item d-flex align-items-center" href="#!">Edit</a>
                    <a class="dropdown-item d-flex align-items-center" href="#!">Delete</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- para-->
            <div class="my-4">
              <p class="mb-0">Web application design is an important
                stage when building a web application...</p>
            </div>
            <!-- date and budget-->
            <div class="row g-2 mb-4">
              <!-- col -->
              <div class="col-xl-6 col-lg-12 col-12 mb-1 mb-lg-1
                mb-xl-0">
                <div class="border border-dashed rounded-3 p-2
                  text-center ">
                  <span class="lh-1"><span class="me-1 text-muted">Due
                      Date:</span><span class="text-dark
                      font-weight-medium">10 Oct 2023</span></span>
                </div>
              </div>
              <!-- col -->
              <div class="col-xl-6 col-lg-12 col-12">
                <div class="border border-dashed rounded-3 p-2
                  text-center ">
                  <span class="lh-1"><span class="me-1 text-muted">Budget:</span><span
                      class="text-dark font-weight-medium">$284,900.00</span></span>
                </div>
              </div>

            </div>
            <!-- progress -->
            <div class="d-flex justify-content-between
              align-items-center mb-6">
              <div class="d-flex align-items-center">
                <!-- avatar group -->
                <div class="avatar-group">
                  <span class="avatar avatar-sm">
                    <img alt="avatar" src={{asset('img/images/avatar/avatar-11.jpg')}} class="rounded-circle">
                  </span>
                  <span class="avatar avatar-sm">
                    <img alt="avatar" src={{asset('img/images/avatar/avatar-2.jpg')}} class="rounded-circle">
                  </span>
                  <span class="avatar avatar-sm">
                    <img alt="avatar" src={{asset('img/images/avatar/avatar-3.jpg')}} class="rounded-circle">
                  </span>

                </div>
                <!-- text -->
                <div class="ms-2">
                  <span class="text-muted ">+5 more</span>
                </div>
              </div>
              <!-- text -->
              <div>
                <span class="badge badge-info-soft">In Progress</span>
              </div>

            </div>
            <div>
              <!-- progress bar -->
              <div class="d-flex justify-content-between
                align-items-center mb-1">
                <!-- text -->
                <div>
                  <h5>Progress</h5>
                </div>


                <!-- number text -->
                <div>
                  <span class="text-dark">45%</span>
                </div>

              </div>
              <div class="progress" style="height: 6px;">
                <div class="progress-bar bg-info" role="progressbar" style="width: 45%;" aria-valuenow="45"
                  aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>
          <!-- card footer -->
          <div class="card-footer">
            <span class="me-3 "><i class="align-middle icon-xs text-muted me-2
                " data-feather="list"></i>10 Task</span>

            <span class="me-3 "><i class="align-middle icon-xs text-muted me-2
                " data-feather="message-square"></i>2k Comments</span>
            <span><i class="align-middle icon-xs text-muted me-2
                "  data-feather="folder"></i>30+ Files</span>
          </div>

        </div>
      </div>




    </div>
  </div>

@endsection
