@extends('website.master')
@section('body')

    <body>

    <script src="{{asset('/')}}website/assets/js/vendors/validation.js"></script>

    <main>
        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <div>
                    <!-- row -->
                    <div class="row">
                        <div class="col-xl-7 col-lg-6 col-md-12">
                            <!-- accordion -->
                            <form action="{{route('checkout.order')}}" method="POST">
                                @csrf
                            <div class="accordion accordion-flush" id="accordionFlushExample">
                                <!-- accordion item -->
                                <div class="accordion-item py-4">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <!-- heading one -->
                                        <a
                                            href="#"
                                            class="fs-5 text-inherit collapsed h4"
                                            data-bs-toggle="collapse"
                                            data-bs-target="#flush-collapseOne"
                                            aria-expanded="true"
                                            aria-controls="flush-collapseOne">
                                            <i class="feather-icon icon-map-pin me-2 text-muted"></i>
                                            Add delivery address
                                        </a>
                                    </div>
                                    <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div class="row">
                                                <div class="col-12 mb-4">
                                                    <!-- form -->
                                                    <div class="card card-body p-6">
                                                        <div class="w-100 mb-3">
                                                            <label for="address" class="form-label">Address</label>
                                                            <textarea id="address" class="form-control" rows="3" placeholder="Enter your full address" name="delivery_address" required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- accordion item -->
                                <div class="accordion-item py-4">
                                    <a href="#" class="text-inherit h5" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                        <i class="feather-icon icon-credit-card me-2 text-muted"></i>
                                        Payment Method
                                        <!-- collapse -->
                                    </a>
                                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                                        <div class="mt-5">
                                            <div>
                                                <div class="card card-bordered shadow-none mb-2">
                                                    <!-- card body -->
                                                    <div class="card-body p-6">
                                                        <!-- check input -->
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="payment_method" value="online"/>
                                                                <label class="form-check-label ms-2"></label>
                                                            </div>
                                                            <div>
                                                                <!-- title -->
                                                                <h5 class="mb-1 h6">Online</h5>
                                                                <p class="mb-0 small">You will be redirected to online your purchase securely.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- card -->
                                                <div class="card card-bordered shadow-none">
                                                    <div class="card-body p-6">
                                                        <!-- check input -->
                                                        <div class="d-flex">
                                                            <div class="form-check">
                                                                <input class="form-check-input" type="radio" name="payment_method" id="cashonDelivery" value="cash"/>
                                                                <label class="form-check-label ms-2" for="cashonDelivery"></label>
                                                            </div>
                                                            <div>
                                                                <!-- title -->
                                                                <h5 class="mb-1 h6">Cash on Delivery</h5>
                                                                <p class="mb-0 small">Pay with cash when your order is delivered.</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Button -->
                                    <div class="mt-5 d-flex justify-content-end">
                                        <button class="btn btn-primary ms-2" type="submit">Place Order</button>
                                    </div>
                                </div>
                            </div>
                            </form>
                        </div>

                        <div class="col-md-12 offset-xl-1 col-xl-4 col-lg-6">
                            <div class="mt-4 mt-lg-0">
                                <div class="card shadow-sm">
                                    <h5 class="px-6 py-4 bg-transparent mb-0">Order Details</h5>
                                    <ul class="list-group list-group-flush">
                                        @foreach(Cart::content() as $item)
                                        <li class="list-group-item px-4 py-3">
                                            <div class="row align-items-center">
                                                <div class="col-2 col-md-2">
                                                    <img src="{{asset($item->options->image)}}" alt="Ecommerce" class="img-fluid" />
                                                </div>
                                                <div class="col-5 col-md-5">
                                                    <h6 class="mb-0">{{$item->name}}</h6>
                                                    <span><small class="text-muted">{{$item->options->kilogram}}</small></span>
                                                </div>
                                                <div class="col-2 col-md-2 text-center text-muted">
                                                    <span>{{$item->qty}}</span>
                                                </div>
                                                <div class="col-3 text-lg-end text-start text-md-end col-md-3">
                                                    <span class="fw-bold">{{$item->price}}</span>
                                                </div>
                                            </div>
                                        </li>
                                        @endforeach
                                        <li class="list-group-item px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>Item Subtotal</div>
                                                <div class="fw-bold">{{ Cart::subtotal() }}</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between mb-2">
                                                <div>Tax (10%)</div>
                                                <div class="fw-bold">${{ number_format(Cart::subtotal() * 0.10, 2) }}</div>
                                            </div>
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    Delivery Fee
                                                    <i class="feather-icon icon-info text-muted" data-bs-toggle="tooltip" title="Default tooltip"></i>
                                                </div>
                                                <div class="fw-bold">60</div>
                                            </div>
                                        </li>
                                        <!-- list group item -->
                                        <li class="list-group-item px-4 py-3">
                                            <div class="d-flex align-items-center justify-content-between fw-bold">
                                                <div>Subtotal</div>
                                                <div>{{  number_format(Cart::subtotal() * 0.10 +Cart::subtotal() + 60 )}}</div>
                                            </div>
                                        </li>
                                            <?php
                                            $subtotal = (float) Cart::subtotal();
                                            $tax = $subtotal * 0.10;
                                            $shipping = 60;
                                            $total = $subtotal + $tax + $shipping;

                                            Session::put('order_total', $total);
                                            Session::put('tax_total', $tax);
                                            Session::put('shipping_total', $shipping);
                                            ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete address</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h6>Are you sure you want to delete this address?</h6>
                    <p class="mb-6">
                        Jitu Chauhan
                        <br />

                        4450 North Avenue Oakland,
                        <br />

                        Nebraska, United States,
                        <br />

                        402-776-1106
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-gray-400" data-bs-dismiss="modal">Cancel</button>
                    <button type="button" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="addAddressModal" tabindex="-1" aria-labelledby="addAddressModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- modal body -->
                <div class="modal-body p-6">
                    <div class="d-flex justify-content-between mb-5">
                        <!-- heading -->
                        <div>
                            <h5 class="h6 mb-1" id="addAddressModalLabel">New Shipping Address</h5>
                            <p class="small mb-0">Add new shipping address for your order delivery.</p>
                        </div>
                        <div>
                            <!-- button -->
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                    </div>
                    <!-- row -->
                    <div class="row g-3">
                        <!-- col -->
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="First name" aria-label="First name" required="" />
                        </div>
                        <!-- col -->
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Last name" aria-label="Last name" required="" />
                        </div>
                        <!-- col -->
                        <div class="col-12">
                            <input type="text" class="form-control" placeholder="Address Line 1" />
                        </div>
                        <div class="col-12">
                            <!-- button -->
                            <input type="text" class="form-control" placeholder="Address Line 2" />
                        </div>
                        <div class="col-12">
                            <!-- button -->
                            <input type="text" class="form-control" placeholder="City" />
                        </div>
                        <div class="col-12">
                            <!-- button -->
                            <select class="form-select">
                                <option selected="">India</option>
                                <option value="1">UK</option>
                                <option value="2">USA</option>
                                <option value="3">UAE</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <!-- button -->
                            <select class="form-select">
                                <option selected="">Gujarat</option>
                                <option value="1">Northern Ireland</option>
                                <option value="2">Alaska</option>
                                <option value="3">Abu Dhabi</option>
                            </select>
                        </div>
                        <div class="col-12">
                            <!-- button -->
                            <input type="text" class="form-control" placeholder="Zip Code" />
                        </div>
                        <div class="col-12">
                            <!-- button -->
                            <input type="text" class="form-control" placeholder="Business Name" />
                        </div>
                        <div class="col-12">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" />
                                <!-- label -->
                                <label class="form-check-label" for="flexCheckDefault">Set as Default</label>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="col-12 text-end">
                            <button type="button" class="btn btn-outline-primary" data-bs-dismiss="modal">Cancel</button>
                            <button class="btn btn-primary" type="button">Save Address</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    </body>

@endsection
