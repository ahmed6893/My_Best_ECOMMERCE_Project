<!-- navbar vertical -->
<!-- navbar -->
<nav class="navbar-vertical-nav d-none d-xl-block">
    <div class="navbar-vertical">
        <div class="px-4 py-5">
            <a href="../index.html" class="navbar-brand">
                <img src="{{asset('/')}}admin/assets/images/logo/freshcart-logo.svg" alt="" />
            </a>
        </div>
        <div class="navbar-vertical-content flex-grow-1" data-simplebar="">
            <ul class="navbar-nav flex-column" id="sideNavbar">
                <li class="nav-item">
                    <a class="nav-link  active " href="index.html">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><i class="bi bi-house"></i></span>
                            <span class="nav-link-text">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mt-6 mb-3">
                    <span class="nav-label">Store Managements</span>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link  collapsed "
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#navCategoriesOrders"
                        aria-expanded="false"
                        aria-controls="navCategoriesOrders"
                    >
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><i class="bi bi-arrow-90deg-down"></i></span>
                            <span class="nav-link-text">Settings Modules</span>
                        </div>
                    </a>
                    <div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('category.index')}}">Category</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('sub-category.index')}}">Sub Category</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('brand.index')}}">Brand</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('unit.index')}}">Unit</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('kilogram.index')}}">Kilogram</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('color.index')}}">Color</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link " href="{{route('size.index')}}">Size</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('courier.index')}}">Courier</a>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="{{route('product.index')}}">
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><i class="bi bi-cart"></i></span>
                            <span class="nav-link-text">Products</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item">
                    <a
                        class="nav-link  collapsed "
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#navCategoriesOrders"
                        aria-expanded="false"
                        aria-controls="navCategoriesOrders"
                    >
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><i class="bi bi-bag"></i></span>
                            <span class="nav-link-text">Orders</span>
                        </div>
                    </a>
                    <div id="navCategoriesOrders" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="{{route('order')}}">All Orders</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a
                        class="nav-link  collapsed "
                        href="#"
                        data-bs-toggle="collapse"
                        data-bs-target="#navCustomer"
                        aria-expanded="false"
                        aria-controls="navCustomer"
                    >
                        <div class="d-flex align-items-center">
                            <span class="nav-link-icon"><i class="bi bi-people"></i></span>
                            <span class="nav-link-text">Customers</span>
                            <span class="badge bg-light-success text-dark-success ms-2">New</span>
                        </div>
                    </a>
                    <div id="navCustomer" class="collapse " data-bs-parent="#sideNavbar">
                        <ul class="nav flex-column">
                            <li class="nav-item">
                                <a class="nav-link " href="customers.html">Customers Module</a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link " href="create-customers.html">Create Customers</a>
                            </li>
                            <!-- Nav item -->
                            <li class="nav-item">
                                <a class="nav-link " href="customers-edits.html">Edit Customers</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>

