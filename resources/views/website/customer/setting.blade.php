@extends('website.master')
@section('body')

    <main>
        <!-- section -->
        <section>
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- col -->
                    <div class="col-12">
                        <div class="d-flex justify-content-between align-items-center d-md-none py-4">
                            <!-- heading -->
                            <h3 class="fs-5 mb-0">Account Setting</h3>
                            <!-- button -->
                            <button
                                class="btn btn-outline-gray-400 text-muted d-md-none btn-icon btn-sm ms-3"
                                type="button"
                                data-bs-toggle="offcanvas"
                                data-bs-target="#offcanvasAccount"
                                aria-controls="offcanvasAccount">
                                <i class="bi bi-text-indent-left fs-3"></i>
                            </button>
                        </div>
                    </div>
                    <!-- col -->
                    <div class="col-lg-3 col-md-4 col-12 border-end d-none d-md-block">
                        <div class="pt-10 pe-lg-10">
                            <!-- nav -->
                            <ul class="nav flex-column nav-pills nav-pills-dark">
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="{{route('customer.orders')}}">
                                        <i class="feather-icon icon-shopping-bag me-2"></i>
                                        Your Orders
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('customer.setting')}}">
                                        <i class="feather-icon icon-settings me-2"></i>
                                        Settings
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('customer.address')}}">
                                        <i class="feather-icon icon-map-pin me-2"></i>
                                        Address
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('customer.notification')}}">
                                        <i class="feather-icon icon-bell me-2"></i>
                                        Notification
                                    </a>
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <hr />
                                </li>
                                <!-- nav item -->
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('customer.logout')}}">
                                        <i class="feather-icon icon-log-out me-2"></i>
                                        Log out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-9 col-md-8 col-12">
                        <div class="py-6 p-md-6 p-lg-10">
                            <div class="mb-6">
                                <!-- heading -->
                                <h2 class="mb-0">Account Setting</h2>
                            </div>
                            <div>
                                <h4 class="text-center text-success">{{session('success')}}</h4>
                                <h4 class="text-center text-success">{{session('error')}}</h4>
                                <!-- heading -->
                                <h5 class="mb-4">Account details</h5>
                                <div class="row">
                                    <div class="col-lg-5">
                                        <!-- form -->
                                        <form action="{{route('customer.updateDetails')}}" method="POST">
                                            @csrf
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">First Name</label>
                                                <input type="text" class="form-control" name="first_name" value="{{$customer->first_name}}" />
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label">Last Name</label>
                                                <input type="text" class="form-control" name="last_name" value="{{$customer->last_name}}" />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-3">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" name="email" value="{{$customer->email}}" />
                                            </div>
                                            <!-- input -->
                                            <div class="mb-5">
                                                <label class="form-label">Phone</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone number" value="{{$customer->phone}}" />
                                            </div>
                                            <!-- button -->
                                            <div class="mb-3">
                                                <button class="btn btn-primary" type="submit">Save Details</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <hr class="my-10" />
                            <div class="pe-lg-14">
                                <!-- heading -->
                                <h5 class="mb-4">Password</h5>
                                <form class="row row-cols-1 row-cols-lg-2" action="{{route('customer.update.password')}}" method="POST">
                                    @csrf
                                    <!-- input -->
                                        <div class="mb-3 col">
                                            <label class="form-label">Current Password</label>
                                            <input type="password" class="form-control" name="current_password" required/>
                                        </div>
                                    <!-- input -->
                                    <div class="mb-3 col">
                                        <label class="form-label">New Password</label>
                                        <input type="password" class="form-control" name="new_password" required/>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3 col">
                                        <label class="form-label">Confirm New Password</label>
                                        <input type="password" class="form-control" name="new_password_confirmation" required/>
                                    </div>

                                    <div class="col-12">
                                        <p class="mb-4">
                                            Can’t remember your current password?
                                            <a href="#">Reset your password.</a>
                                        </p>
                                        <button type="submit" class="btn btn-primary">Save Password</button>
                                    </div>
                                </form>
                            </div>
                            <hr class="my-10" />
                            <div>
                                <!-- heading -->
                                <h5 class="mb-4">Delete Account</h5>
                                <p class="mb-2">Would you like to delete your account?</p>
                                <p class="mb-5">This account contain 12 orders, Deleting your account will remove all the order details associated with it.</p>
                                <!-- btn -->
                                <a href="#" class="btn btn-outline-danger">I want to delete my account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

@endsection
