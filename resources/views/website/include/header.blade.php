<header class="py-lg-5 py-4 border-bottom border-bottom-lg-0">
    <div class="container">
        <div class="row w-100 align-items-center gx-3">
            <div class="col-xl-7 col-lg-8">
                <div class="d-flex align-items-center">
                    <a class="navbar-brand d-none d-lg-block" href="{{route('home')}}">
                        <img src="{{asset('/')}}website/assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" />
                    </a>
                    <div class="w-100 ms-4 d-none d-lg-block">
                        <form action="#">
                            <div class="input-group">
                                <input class="form-control rounded" type="search" placeholder="Search for products" />
                                <span class="input-group-append">
                                 <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                                    <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="16"
                                        height="16"
                                        viewBox="0 0 24 24"
                                        fill="none"
                                        stroke="currentColor"
                                        stroke-width="2"
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        class="feather feather-search">
                                       <circle cx="11" cy="11" r="8"></circle>
                                       <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                    </svg>
                                 </button>
                              </span>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="d-flex justify-content-between align-items-center w-100 d-lg-none">
                    <a class="navbar-brand mb-0" href="../index.html">
                        <img src="{{asset('/')}}website/assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" />
                    </a>

                    <div class="d-flex align-items-center lh-1">
                        <div class="list-inline me-4">
                            <div class="list-inline-item">
                                <!-- Button trigger modal -->
                                <a href="#" class="text-reset d-none d-md-block" data-bs-toggle="modal" data-bs-target="#locationSecondModal">
                                    <i class="feather-icon icon-map-pin me-2"></i>
                                    Set A Location
                                </a>
                            </div>
                            <div class="list-inline-item">
                                <div class="dropdown">
                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                    <span>
                                       <svg
                                           xmlns="http://www.w3.org/2000/svg"
                                           width="16"
                                           height="16"
                                           viewBox="0 0 24 24"
                                           fill="none"
                                           stroke="currentColor"
                                           stroke-width="2"
                                           stroke-linecap="round"
                                           stroke-linejoin="round"
                                           class="feather feather-shopping-cart align-text-bottom">
                                          <circle cx="9" cy="21" r="1"></circle>
                                          <circle cx="20" cy="21" r="1"></circle>
                                          <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                       </svg>
                                    </span>

                                        <span>$0.00</span>
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-5">
                                        <div class="d-flex justify-content-between align-items-center border-bottom pb-5 mb-3">
                                            <div>
                                                <span><i class="feather-icon icon-shopping-cart"></i></span>
                                                <span class="text-success">3</span>
                                            </div>
                                            <div>
                                                <span>Total:</span>
                                                <span class="text-success">$105.00</span>
                                            </div>
                                        </div>
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item px-0 py-3">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-lg-3 col-3 text-center">
                                                        <!-- img -->
                                                        <img src="{{asset('/')}}website/assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-xxl" />
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <!-- title -->
                                                        <a href="shop-single.html" class="text-inherit">
                                                            <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                        </a>
                                                        <small class="text-muted">1 x $35.00</small>
                                                    </div>

                                                    <!-- price -->
                                                    <div class="text-end col-lg-2 col-2">
                                                        <a href="#" class="text-inherit" aria-label="Close"><i class="bi bi-x fs-4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                            <li class="list-group-item px-0 py-3">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-lg-3 col-3 text-center">
                                                        <!-- img -->
                                                        <img src="{{asset('/')}}website/assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-xxl" />
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <!-- title -->
                                                        <a href="shop-single.html" class="text-inherit">
                                                            <h6 class="mb-0">NutriChoice Digestive</h6>
                                                        </a>
                                                        <small class="text-muted">1 x $29.00</small>
                                                    </div>

                                                    <!-- price -->
                                                    <div class="text-end col-lg-2 col-2">
                                                        <a href="#" class="text-inherit" aria-label="Close"><i class="bi bi-x fs-4"></i></a>
                                                    </div>
                                                </div>
                                            </li>

                                            <li class="list-group-item px-0 py-3">
                                                <div class="row align-items-center g-0">
                                                    <div class="col-lg-3 col-3 text-center">
                                                        <!-- img -->
                                                        <img src="{{asset('/')}}website/assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-xxl" />
                                                    </div>
                                                    <div class="col-lg-7 col-7">
                                                        <!-- title -->
                                                        <a href="shop-single.html" class="text-inherit">
                                                            <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                                        </a>
                                                        <small class="text-muted">1 x $29.00</small>
                                                    </div>

                                                    <!-- price -->
                                                    <div class="text-end col-lg-2 col-2">
                                                        <a href="#" class="text-inherit" aria-label="Close"><i class="bi bi-x fs-4"></i></a>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                        <div class="mt-2 d-grid">
                                            <a href="#" class="btn btn-primary">Checkout</a>
                                            <a href="#" class="btn btn-light mt-2">View Cart</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Button -->
                        <button
                            class="navbar-toggler collapsed"
                            type="button"
                            data-bs-toggle="offcanvas"
                            data-bs-target="#navbar-default"
                            aria-controls="navbar-default"
                            aria-expanded="false"
                            aria-label="Toggle navigation">
                            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-text-indent-left text-primary" viewBox="0 0 16 16">
                                <path
                                    d="M2 3.5a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm.646 2.146a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1 0 .708l-2 2a.5.5 0 0 1-.708-.708L4.293 8 2.646 6.354a.5.5 0 0 1 0-.708zM7 6.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 3a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm-5 3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z" />
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-xl-5 col-lg-4 d-flex align-items-center">

                <div class="list-inline ms-auto d-lg-block d-none">
                    <div class="list-inline-item me-3">
                        <div class="dropdown d-none d-xl-block">
                            <a href="#" class="dropdown-toggle text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                              <span>
                                 <svg
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-shopping-cart align-text-bottom">
                                    <circle cx="9" cy="21" r="1"></circle>
                                    <circle cx="20" cy="21" r="1"></circle>
                                    <path d="M1 1h4l2.68 13.39a2 2 0 0 0 2 1.61h9.72a2 2 0 0 0 2-1.61L23 6H6"></path>
                                 </svg>
                              </span>

                                <span>$0.00</span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-lg p-5">
                                <div class="d-flex justify-content-between align-items-center border-bottom pb-5">
                                    <div>
                                        <span><i class="feather-icon icon-shopping-cart"></i></span>
                                        <span class="text-success">3</span>
                                    </div>
                                    <div>
                                        <span>Total:</span>
                                        <span class="text-success">$105.00</span>
                                    </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item px-0 py-3">
                                        <div class="row align-items-center g-0">
                                            <div class="col-lg-3 text-center">
                                                <!-- img -->
                                                <img src="{{asset('/')}}website/assets/images/products/product-img-1.jpg" alt="Ecommerce" class="icon-xxl" />
                                            </div>
                                            <div class="col-lg-7">
                                                <!-- title -->
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">Haldiram's Sev Bhujia</h6>
                                                </a>
                                                <small class="text-muted">1 x $35.00</small>
                                            </div>

                                            <!-- price -->
                                            <div class="text-end col-lg-2">
                                                <a href="#" class="text-inherit" aria-label="Close"><i class="bi bi-x fs-4"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-group-item px-0 py-3">
                                        <div class="row align-items-center g-0">
                                            <div class="col-lg-3 text-center">
                                                <!-- img -->
                                                <img src="{{asset('/')}}website/assets/images/products/product-img-2.jpg" alt="Ecommerce" class="icon-xxl" />
                                            </div>
                                            <div class="col-lg-7">
                                                <!-- title -->
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">NutriChoice Digestive</h6>
                                                </a>
                                                <small class="text-muted">1 x $29.00</small>
                                            </div>

                                            <!-- price -->
                                            <div class="text-end col-lg-2">
                                                <a href="#" class="text-inherit" aria-label="Close"><i class="bi bi-x fs-4"></i></a>
                                            </div>
                                        </div>
                                    </li>

                                    <li class="list-group-item px-0 py-3">
                                        <div class="row align-items-center g-0">
                                            <div class="col-lg-3 text-center">
                                                <!-- img -->
                                                <img src="{{asset('/')}}website/assets/images/products/product-img-3.jpg" alt="Ecommerce" class="icon-xxl" />
                                            </div>
                                            <div class="col-lg-7">
                                                <!-- title -->
                                                <a href="shop-single.html" class="text-inherit">
                                                    <h6 class="mb-0">Cadbury 5 Star Chocolate</h6>
                                                </a>
                                                <small class="text-muted">1 x $29.00</small>
                                            </div>

                                            <!-- price -->
                                            <div class="text-end col-lg-2">
                                                <a href="#" class="text-inherit" aria-label="Close"><i class="bi bi-x fs-4"></i></a>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                                <div class="mt-2 d-grid">
                                    <a href="#" class="btn btn-primary">Checkout</a>
                                    <a href="#" class="btn btn-light mt-2">View Cart</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @if(Session('customerId'))
                        <div class="list-inline-item ">
                            <span class="text-white me-2"><a href="{{route('customer.orders')}}">Welcome, {{ Session('customerName') }}</a></span>
                        </div>
                        <div class="list-inline-item ">
                            <a href="{{route('customer.logout')}}" class="btn btn-dark d-none d-xl-block">Sign Out</a>
                        </div>
                    @else
                    <div class="list-inline-item me-3">
                        <a href="{{route('customer.register')}}" class="text-reset" data-bs-toggle="modal" data-bs-target="#registerModal">Register</a>
                    </div>
                    <div class="list-inline-item">
                        <a href="{{route('customer.login')}}" class="btn btn-dark d-none d-xl-block">Sign In</a>
                    </div>
                    @endif

                </div>

            </div>
        </div>
    </div>
</header>

<nav class="navbar navbar-expand-lg navbar-light navbar-default py-0 py-lg-2 border-top navbar-offcanvas-color" aria-label="Offcanvas navbar large">
    <div class="container">
        <div class="offcanvas offcanvas-start" tabindex="-1" id="navbar-default" aria-labelledby="navbar-defaultLabel">
            <div class="offcanvas-header pb-1">
                <a href="index.html"><img src="{{asset('/')}}website/assets/images/logo/freshcart-logo.svg" alt="eCommerce HTML Template" /></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <div class="d-block d-lg-none mb-4">
                    <form action="#">
                        <div class="input-group">
                            <input class="form-control rounded" type="search" placeholder="Search for products" />
                            <span class="input-group-append">
                              <button class="btn bg-white border border-start-0 ms-n10 rounded-0 rounded-end" type="button">
                                 <svg
                                     xmlns="http://www.w3.org/2000/svg"
                                     width="16"
                                     height="16"
                                     viewBox="0 0 24 24"
                                     fill="none"
                                     stroke="currentColor"
                                     stroke-width="2"
                                     stroke-linecap="round"
                                     stroke-linejoin="round"
                                     class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                 </svg>
                              </button>
                           </span>
                        </div>
                    </form>
                    <div class="mt-2">
                        <button type="button" class="btn btn-outline-gray-400 text-muted w-100" data-bs-toggle="modal" data-bs-target="#locationModal">
                            <i class="feather-icon icon-map-pin me-2"></i>
                            Pick Location
                        </button>
                    </div>
                </div>

                <div>
                    <ul class="navbar-nav align-items-center">
                        <li class="dropdown me-3 d-none d-lg-block">
                            <button class="btn btn-primary" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-text-left text-white me-2" viewBox="0 0 16 16">
                                    <path
                                        fill-rule="evenodd"
                                        d="M2 12.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"></path>
                                </svg>
                                All Categories
                            </button>

                            <ul class="dropdown-menu dropdown-menu-lg">
                                @foreach($categories as $category)
                                <li class="dropdown-menu-list">
                                    <a href="{{route('fresh',['id'=>$category->id])}}" class="dropdown-item d-flex justify-content-between mb-1 py-1">
                                        <div>
                                            <img src="{{asset($category->images)}}" style="height: 25px" width="25px" >

                                            <span class="ms-1" >{{$category->name}}</span>
                                        </div>
                                        @if(count($category->subCategory) > 0)
                                        <div>
                                            <i class="feather-icon icon-chevron-right"></i>
                                        </div>
                                        @endif
                                    </a>
                                    @if(count($category->subCategory) > 0)
                                    <div class="dropdown-menu-list-submenu">
                                        <div>

                                            <ul class="list-unstyled">
                                                @foreach($category->subCategory as $subCategory)
                                                <li>
                                                    <a href="{{route('sub-category-fresh',['id'=>$subCategory->id])}}" class="dropdown-item">{{$subCategory->name}}</a>
                                                </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @endif
                                </li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="nav-item dropdown dropdown-flyout">
                            <a class="nav-link" href="#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Docs</a>
                            <div class="dropdown-menu dropdown-menu-lg" aria-labelledby="navbarDropdownDocs">
                                <a class="dropdown-item align-items-start" href="../docs/index.html">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-file-text text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M5 4a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm-.5 2.5A.5.5 0 0 1 5 6h6a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5zM5 8a.5.5 0 0 0 0 1h6a.5.5 0 0 0 0-1H5zm0 2a.5.5 0 0 0 0 1h3a.5.5 0 0 0 0-1H5z" />
                                            <path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm10-1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h6 class="mb-1">Documentations</h6>
                                        <p class="mb-0 small">Browse the all documentation</p>
                                    </div>
                                </a>
                                <a class="dropdown-item align-items-start" href="../docs/changelog.html">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-layers text-primary" viewBox="0 0 16 16">
                                            <path
                                                d="M8.235 1.559a.5.5 0 0 0-.47 0l-7.5 4a.5.5 0 0 0 0 .882L3.188 8 .264 9.559a.5.5 0 0 0 0 .882l7.5 4a.5.5 0 0 0 .47 0l7.5-4a.5.5 0 0 0 0-.882L12.813 8l2.922-1.559a.5.5 0 0 0 0-.882l-7.5-4zm3.515 7.008L14.438 10 8 13.433 1.562 10 4.25 8.567l3.515 1.874a.5.5 0 0 0 .47 0l3.515-1.874zM8 9.433 1.562 6 8 2.567 14.438 6 8 9.433z" />
                                        </svg>
                                    </div>
                                    <div class="ms-3 lh-1">
                                        <h6 class="mb-1">
                                            Changelog
                                            <span class="text-primary ms-1">v1.3.0</span>
                                        </h6>
                                        <p class="mb-0 small">See what's new</p>
                                    </div>
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
