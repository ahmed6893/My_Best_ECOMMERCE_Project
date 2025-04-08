@extends('admin.master')
@section('body')

    <main class="main-content-wrapper">
        <div class="container">
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                        <div>
                            <h2>Customers</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Customers</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
                            <a href="create-customers.html" class="btn btn-primary">Add New Customer</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <div class="card h-100 card-lg">
                        <div class="p-6">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-12">
                                    <form class="d-flex" role="search">
                                        <label for="searchCustomers" class="visually-hidden">Search Customers</label>
                                        <input class="form-control" type="search" id="searchCustomers" placeholder="Search Customers" aria-label="Search" />
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-centered table-hover table-borderless mb-0 table-with-checkbox text-nowrap">
                                    <thead class="bg-light">
                                    <tr>

                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Purchase Date</th>
                                        <th>Phone</th>
                                        <th>Spent</th>

                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($customers as $customer)
                                    <tr>
                                        <td>
                                            <div class="d-flex align-items-center">
                                                <img src="{{asset($customer->image)}}" alt="No Photo" class="avatar avatar-xs rounded-circle" />
                                                <div class="ms-2">
                                                    <a href="#!" class="text-inherit" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">{{$customer->first_name.$customer->last_name}}</a>
                                                </div>
                                            </div>
                                        </td>
                                        <td>{{$customer->email}}</td>

                                        <td>
                                            @if($customer->orders->count()>0)
                                                {{$customer->orders->last()->order_date->format('d m,y')}}
                                            @else
                                                No Orders
                                            @endif
                                        </td>
                                        <td>{{$customer->phone}}</td>
                                        <td>{{number_format($customer->orders->sum('order_total'),2)}}</td>

                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="bi bi-trash me-3"></i>
                                                            Delete
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="customers-edits.html">
                                                            <i class="bi bi-pencil-square me-3"></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <div class="border-top d-md-flex justify-content-between align-items-center p-6">
                                <span>Showing 1 to 8 of 12 entries</span>
                                <nav class="mt-2 mt-md-0">
                                    <ul class="pagination mb-0">
                                        <li class="page-item disabled"><a class="page-link" href="#!">Previous</a></li>
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
    </main>
    <!--offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header border-bottom">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Customer Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body d-flex flex-column gap-4">
            <div class="d-flex flex-row align-items-center gap-4 w-100">
                <div class="flex-shrink-0">
                    <img src="../assets/images/avatar/avatar-1.jpg" alt="avatar" class="avatar avatar-xl rounded-circle" />
                </div>

                <div class="d-flex flex-column gap-1 flex-grow-1">
                    <h3 class="mb-0 h5 d-flex flex-row gap-3">
                        Anita Parmar
                        <span class="badge bg-light-success text-dark-success">Verified</span>
                    </h3>

                    <div class="d-md-flex align-items-center justify-content-between">
                        <div class="">#CU001</div>
                        <div class="text-black-50">
                            Last Active:
                            <span class="text-dark">31 May, 2025 3:24PM</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex flex-md-row flex-column gap-md-6 gap-2">
                <div class="d-flex flex-row gap-2">
                    <span class="text-dark fw-semibold">Email</span>
                    <span class="text-black-50">anitaparmar@example.com</span>
                </div>
                <div class="d-flex flex-row gap-2">
                    <span class="text-dark fw-semibold">Phone Number</span>
                    <span class="text-black-50">123-456-7890</span>
                </div>
            </div>
            <div class="card rounded">
                <div class="card-body">
                    <div class="row">
                        <div class="border-end col-4">
                            <div class="d-flex flex-column gap-1">
                                <span class="text-black-50">Join Date</span>
                                <span class="text-dark">31 May, 2024</span>
                            </div>
                        </div>
                        <div class="border-end col-4">
                            <div class="d-flex flex-column gap-1">
                                <span class="text-black-50">Total Spent</span>
                                <span class="text-dark">$105</span>
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="d-flex flex-column gap-1">
                                <span class="text-black-50">Total Order</span>
                                <span class="text-dark">3</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="border-bottom p-4">
                    <h3 class="mb-0 h6">Details</h3>
                </div>
                <div class="card-body p-4 d-flex flex-column gap-5">
                    <div class="d-flex flex-column gap-2 lh-1">
                        <div class="h6 mb-0">Email</div>
                        <span class="text-black-50">anitaparmar@example.com</span>
                    </div>
                    <div class="d-flex flex-column gap-2 lh-1">
                        <div class="h6 mb-0">Phone Number</div>
                        <span class="text-black-50">123-456-7890</span>
                    </div>

                    <div class="d-flex flex-column gap-2">
                        <div class="h6 mb-0">Address</div>
                        <div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked />
                                <label class="form-check-label" for="flexRadioDefault1">123 Apple St., Springfield, IL, 62701, USA</label>
                            </div>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" />
                                <label class="form-check-label" for="flexRadioDefault2">456 Banana St., Metropolis, NY, 10001, USA</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="bg-light rounded-top px-4 py-3">
                    <a
                        href="#"
                        class="d-flex align-items-center justify-content-between text-inherit"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseOne"
                        aria-expanded="true"
                        aria-controls="collapseOne"
                    >
                        <div class="d-flex flex-row align-items-center gap-2">
                            <h3 class="mb-0 h5">Orders</h3>
                            <span class="text-black-50 lh-1">#001</span>
                        </div>
                        <div class="d-flex flex-row gap-6 align-items-center">
                            <div>
										<span class="text-inherit">
											Date:
											<span class="text-dark">31 May, 2025</span>
										</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card-body py-0 px-4">
                    <div class="accordion d-flex flex-column" id="accordionExample1">
                        <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample1">
                            <ul class="list-group list-group-flush mb-0">
                                <li class="list-group-item px-0 py-1">
                                    <a href="#!" class="text-inherit d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row justify-content-between gap-3 align-items-center">
                                            <img src="../assets/images/products/product-img-18.jpg" class="icon-shape icon-xxl" alt="product img" />

                                            <span class="h6 mb-0">Organic Banana</span>
                                        </div>
                                        <span class="text-black-50">$35.00</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 py-1">
                                    <a href="#!" class="text-inherit d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row justify-content-between gap-3 align-items-center">
                                            <img src="../assets/images/products/product-img-15.jpg" class="icon-shape icon-xxl" alt="product img" />

                                            <span class="h6 mb-0">Fresh Apple</span>
                                        </div>
                                        <span class="text-black-50">$70.00</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 py-1">
                                    <a href="#!" class="text-inherit d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row justify-content-between gap-3 align-items-center">
                                            <img src="../assets/images/products/product-img-19.jpg" class="icon-shape icon-xxl" alt="product img" />

                                            <span class="h6 mb-0">BeetRoot</span>
                                        </div>
                                        <span class="text-black-50">$29.00</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex flex-row justify-content-between">
                                        <span class="text-dark fw-semibold">Total Order Amount</span>
                                        <span class="text-dark fw-semibold">$134.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card">
                <div class="bg-light rounded-top px-4 py-3">
                    <a
                        href="#"
                        class="d-flex align-items-center justify-content-between text-inherit"
                        data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo"
                        aria-expanded="false"
                        aria-controls="collapseTwo"
                    >
                        <div class="d-flex flex-row align-items-center gap-2">
                            <h3 class="mb-0 h5">Orders</h3>
                            <span class="text-black-50 lh-1">#002</span>
                        </div>
                        <div class="d-flex flex-row gap-6 align-items-center">
                            <div>
										<span class="text-inherit">
											Date:
											<span class="text-dark">12 May, 2025</span>
										</span>
                            </div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-down chevron-down" viewBox="0 0 16 16">
                                <path fill-rule="evenodd" d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708" />
                            </svg>
                        </div>
                    </a>
                </div>
                <div class="card-body py-0 px-4">
                    <div class="accordion d-flex flex-column" id="accordionExample2">
                        <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample2">
                            <ul class="list-group list-group-flush mb-0">
                                <li class="list-group-item px-0 py-1">
                                    <a href="#!" class="text-inherit d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row justify-content-between gap-3 align-items-center">
                                            <img src="../assets/images/products/product-img-18.jpg" class="icon-shape icon-xxl" alt="product img" />

                                            <span class="h6 mb-0">Organic Banana</span>
                                        </div>
                                        <span class="text-black-50">$35.00</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 py-1">
                                    <a href="#!" class="text-inherit d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row justify-content-between gap-3 align-items-center">
                                            <img src="../assets/images/products/product-img-15.jpg" class="icon-shape icon-xxl" alt="product img" />

                                            <span class="h6 mb-0">Fresh Apple</span>
                                        </div>
                                        <span class="text-black-50">$70.00</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 py-1">
                                    <a href="#!" class="text-inherit d-flex flex-row align-items-center justify-content-between">
                                        <div class="d-flex flex-row justify-content-between gap-3 align-items-center">
                                            <img src="../assets/images/products/product-img-19.jpg" class="icon-shape icon-xxl" alt="product img" />

                                            <span class="h6 mb-0">BeetRoot</span>
                                        </div>
                                        <span class="text-black-50">$29.00</span>
                                    </a>
                                </li>
                                <li class="list-group-item px-0 py-3">
                                    <div class="d-flex flex-row justify-content-between">
                                        <span class="text-dark fw-semibold">Total Order Amount</span>
                                        <span class="text-dark fw-semibold">$134.00</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
