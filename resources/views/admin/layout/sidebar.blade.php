<div class="sidebar transition overlay-scrollbars animate__animated  animate__slideInLeft">
    <div class="sidebar-content">
        <div id="sidebar">

            <!-- Logo -->
            <div class="logo">
                <h2 class="mb-0"><img src={{ asset('img/Admin/images/logo.png') }}> Mkart</h2>
            </div>

            <ul class="side-menu" id="navBar">
                <li>
                    <a href={{ route('admin.dashboard') }}>
                        <i class='bx bxs-dashboard bx-sm icon'></i> Dashboard
                    </a>
                </li>

                <li>
                    <a href={{ route('admin.products.list') }}>
                        <i class='bx bx-list-ul bx-sm icon'></i>
                        Product List
                    </a>
                </li>
                <li>
                    <a href={{ route('admin.products.categories') }}>
                        <i class='bx bx-category bx-sm icon'></i>
                        Category
                    </a>


                </li>



                <li>
                    <a href={{ route('admin.products.list') }}>
                        <i class='bx bx-cart bx-sm icon'></i>
                        Orders
                    </a>
                </li>

                <li>
                    <a href={{ route('admin.products.list') }}>
                        <i class='bx bx-group bx-sm icon'></i>
                        Customers
                    </a>
                </li>
                <li>
                    <a href={{ route('homepage') }}>
                        <i class='bx bx-home bx-sm icon'></i>
                        Home Page
                    </a>
                </li>
            </ul>

        </div>

    </div>
</div>
</div>



