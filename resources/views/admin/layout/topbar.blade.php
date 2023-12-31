<div class="topbar transition">
    <div class="bars">
        <button type="button" class="btn transition" id="sidebar-toggle">
            <i class="fa fa-bars"></i>
        </button>
    </div>
    <div class="menu">
        <ul>

            <li class="nav-item dropdown dropdown-list-toggle">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <i class="fa fa-bell size-icon-1"></i>
                    {{-- <span class="badge bg-danger notif">4</span> --}}
                </a>
                <div class="dropdown-menu dropdown-list">
                    <div class="dropdown-header">Notifications</div>
                    <div class="dropdown-list-content dropdown-list-icons">
                        <div class="custome-list-notif">
                            {{-- <a href="#" class="dropdown-item dropdown-item-unread">
                                <div class="dropdown-item-icon bg-primary text-white">
                                    <i class="fas fa-code"></i>
                                </div>
                                <div class="dropdown-item-desc">
                                    The Atrana template has the latest update!
                                    <div class="time text-primary">3 Min Ago</div>
                                </div>
                            </a> --}}


                        </div>
                    </div>

                    <div class="dropdown-footer text-center">
                        <a href="#">View All</a>
                    </div>


            </li>

            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false">
                    <img src={{ asset('img/Admin/images/avatar/avatar-1.png') }} alt="">
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href={{ route('admin.profile') }}><i class="fa fa-user size-icon-1"></i>
                        <span>My
                            Profile</span></a>
                    <a class="dropdown-item" href="#"><i class="fa fa-cog size-icon-1"></i>
                        <span>Settings</span></a>
                    <hr class="dropdown-divider">
                    <a class="dropdown-item" href={{ route('admin.logout') }}><i
                            class="fa fa-sign-out-alt  size-icon-1"></i> <span>Logout</span></a>
                </ul>
            </li>
        </ul>
    </div>
</div>
