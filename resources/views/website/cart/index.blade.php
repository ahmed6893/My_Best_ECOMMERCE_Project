@extends('website.master')
@section('body')

    <body>

    <script src="{{asset('/')}}website/assets/js/vendors/validation.js"></script>

    <main>

        <section class="mb-lg-14 mb-8 mt-8">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-lg-8 col-md-7">
                        <div class="py-3">
                            <!-- alert -->
                            <h3 class="text-success text-center">{{session('success')}}</h3>
                            <h3 class="text-success text-center">{{session('message')}}</h3>
                            <h3 class="text-danger text-center">{{session('delete')}}</h3>
                            <ul class="list-group list-group-flush">
                                <!-- list group -->
                                <li class="list-group-item py-3 ps-0 border-top">
                                    <!-- row -->
                                    @foreach($products as $product)
                                    <div class="row align-items-center">
                                        <div class="col-6 col-md-6 col-lg-7">
                                            <div class="d-flex">
                                                <img src="{{asset($product->options->image)}}" alt="Ecommerce" class="icon-shape icon-xxl" />
                                                <div class="ms-3">
                                                    <!-- title -->
                                                    <a href="shop-single.html" class="text-inherit">
                                                        <h6 class="mb-0">{{$product->name}}</h6>
                                                    </a>
                                                    <span><small class="text-muted">{{$product->options->kilogram}}</small></span>
                                                    <!-- text -->
                                                    <div class="mt-2 small lh-1">
                                                        <form action="{{ route('cart.destroy', $product->rowId) }}" method="post">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button type="submit" class="text-decoration-none text-inherit border-0 bg-transparent">
                                                                    <span class="me-1 align-text-bottom">
                                                                        <svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            width="14"
                                                                            height="14"
                                                                            viewBox="0 0 24 24"
                                                                            fill="none"
                                                                            stroke="currentColor"
                                                                            stroke-width="2"
                                                                            stroke-linecap="round"
                                                                            stroke-linejoin="round"
                                                                            class="feather feather-trash-2 text-success">
                                                                            <polyline points="3 6 5 6 21 6"></polyline>
                                                                            <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                                            <line x1="10" y1="11" x2="10" y2="17"></line>
                                                                            <line x1="14" y1="11" x2="14" y2="17"></line>
                                                                        </svg>
                                                                    </span>
                                                                <span class="text-muted">Remove</span>
                                                            </button>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- input group -->
                                        <div class="col-4 col-md-4 col-lg-3">
                                            <!-- input -->
                                            <!-- input -->
                                            <form action="{{ route('cart.update', $product->rowId) }}" method="post">
                                                @csrf
                                                @method('PUT')
                                                <div class="input-group input-spinner">
                                                    <input type="button" value="-" class="button-minus btn btn-sm" data-field="qty" />
                                                    <input type="number" step="1" min="1" max="10" value="{{ $product->qty }}" name="qty" class="quantity-field form-control-sm form-input" />
                                                    <input type="button" value="+" class="button-plus btn btn-sm" data-field="qty" />
                                                </div>
                                                <button type="submit" class="btn btn-primary mt-2">Update</button>
                                            </form>
                                        </div>
                                        <!-- price -->
                                        <div class="col-2 text-lg-end text-start text-md-end col-md-2">
                                            <span class="fw-bold">{{$product->qty*$product->price}}</span>
                                        </div>
                                    </div>
                                    @endforeach
                                </li>
                            </ul>
                            <!-- btn -->
                            <div class="d-flex justify-content-between mt-4">
                                <a href="#!" class="btn btn-primary">Continue Shopping</a>
                            </div>
                        </div>
                    </div>

                    <!-- sidebar -->
                    <div class="col-12 col-lg-4 col-md-5">
                        <!-- card -->
                        <div class="mb-5 card mt-6">
                            <div class="card-body p-6">
                                <!-- heading -->
                                <h2 class="h5 mb-4">Summary</h2>
                                <div class="card mb-2">
                                    <!-- list group -->
                                    <ul class="list-group list-group-flush">
                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Item Subtotal</div>
                                            </div>
                                            <span>{{ Cart::subtotal() }} ৳</span>
                                        </li>

                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div>Shipping Fee</div>
                                            </div>
                                            <span>60৳</span>
                                        </li>

                                        <!-- list group item -->
                                        <li class="list-group-item d-flex justify-content-between align-items-start">
                                            <div class="me-auto">
                                                <div class="fw-bold">Subtotal</div>
                                            </div>
                                            <span class="fw-bold">{{  doubleval(Cart::subtotal()) + 60 }} ৳</span>
                                        </li>
                                    </ul>

                                    <a href="{{ route('product.checkout') }}">
                                        <div class="d-grid mb-1 mt-4">
                                            <!-- btn -->
                                            <button class="btn btn-primary btn-lg d-flex justify-content-between align-items-center" type="submit">
                                                Go to Checkout
                                                <span class="fw-bold">{{  doubleval(Cart::subtotal()) + 60 }} ৳</span>
                                            </button>
                                        </div>
                                    </a>
                                <!-- text -->
                                <p>
                                    <small>
                                        By placing your order, you agree to be bound by the Freshcart
                                        <a href="#!">Terms of Service</a>
                                        and
                                        <a href="#!">Privacy Policy.</a>
                                    </small>
                                </p>

                                <!-- heading -->
                                <div class="mt-8">
                                    <h2 class="h5 mb-3">Add Promo or Gift Card</h2>
                                    <form>
                                        <div class="mb-2">
                                            <!-- input -->
                                            <label for="giftcard" class="form-label sr-only">Email address</label>
                                            <input type="text" class="form-control" id="giftcard" placeholder="Promo or Gift Card" />
                                        </div>
                                        <!-- btn -->
                                        <div class="d-grid"><button type="submit" class="btn btn-outline-dark mb-1">Redeem</button></div>
                                        <p class="text-muted mb-0"><small>Terms & Conditions apply</small></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const minusButtons = document.querySelectorAll(".button-minus");
            const plusButtons = document.querySelectorAll(".button-plus");

            minusButtons.forEach((btn) => {
                btn.addEventListener("click", function () {
                    let input = this.nextElementSibling;
                    let value = parseInt(input.value);
                    if (value > 1) {
                        input.value = value - 1;
                    }
                });
            });

            plusButtons.forEach((btn) => {
                btn.addEventListener("click", function () {
                    let input = this.previousElementSibling;
                    let value = parseInt(input.value);
                    if (value < 10) {
                        input.value = value + 1;
                    }
                });
            });
        });
    </script>

    </body>

@endsection
