@extends('admin.master')
@section('body')

    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                        <div>
                            <!-- page header -->
                            <h2>Order Single</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Order Details</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="{{route('order')}}" class="btn btn-primary">Back to all orders</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="card-body p-6">
                            <div class="d-md-flex justify-content-between">
                                <div class="d-flex align-items-center mb-2 mb-md-0">
                                    <h2 class="mb-0">Order ID - {{$order->id}}</h2>
                                    <span class="badge bg-light-warning text-dark-warning ms-2">{{$order->order_status}}</span>
                                </div>
                            </div>
                            <div class="mt-8">
                                <div class="row">
                                    <!-- address -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Customer Details</h6>
                                            <p class="mb-1 lh-lg">
                                                {{$order->customer->first_name}}
                                                <br />
                                                {{$order->customer->email}}
                                                <br />
                                                {{$order->delivery_address}}
                                                <br />
                                                {{$order->customer->phone}}
                                            </p>
                                        </div>
                                    </div>

                                    <!-- address -->
                                    <div class="col-lg-4 col-md-4 col-12">
                                        <div class="mb-6">
                                            <h6>Order Details</h6>
                                            <p class="mb-1 lh-lg">
                                                Order ID:
                                                <span class="text-dark">{{$order->id}}</span>
                                                <br />
                                                Order Total:
                                                <span class="text-dark">{{$order->order_total}}</span>
                                                <br />
                                                Tax Total:
                                                <span class="text-dark">{{$order->tax_total}}</span>
                                                <br />
                                                Shipping Total:
                                                <span class="text-dark">{{$order->shipping_total}}</span>
                                                <br />
                                                Order Date:
                                                <span class="text-dark">{{$order->order_date}}</span>
                                                <br />
                                                Payment Method:
                                                <span class="text-dark">{{$order->payment_method}}</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="table-responsive">
                                    <!-- Table -->
                                    <table class="table mb-0 text-nowrap table-centered">
                                        <!-- Table Head -->
                                        <thead class="bg-light">
                                        <tr>
                                            <th>Products</th>
                                            <th>Price</th>
                                            <th>Quantity</th>
                                            <th>Code</th>
                                            <th>Kilogram</th>
                                            <th>Total</th>
                                        </tr>
                                        </thead>
                                        <!-- tbody -->
                                        <tbody>
                                            @foreach($order->orderDetails as $details)
                                                <tr>
                                                    <td>
                                                        <a href="#" class="text-inherit">
                                                            <div class="d-flex align-items-center">
                                                                <div>
                                                                    <img src="{{asset($details->product_image)}}" alt="" class="icon-shape icon-lg" />
                                                                </div>
                                                                <div class="ms-lg-4 mt-2 mt-lg-0">
                                                                    <h5 class="mb-0 h6">{{$details->product_name}}</h5>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </td>
                                                    <td><span class="text-body">{{$details->product_price}}</span></td>
                                                    <td>{{$details->product_qty}}</td>
                                                    <td>{{$details->product_code}}</td>
                                                    <td>{{$details->product_kilogram}}</td>
                                                    <td>{{$details->product_qty * $details->product_price}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
