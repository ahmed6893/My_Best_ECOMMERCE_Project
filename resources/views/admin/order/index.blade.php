@extends('admin.master')
@section('body')
    <!-- main wrapper -->
    <main class="main-content-wrapper">
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                              <!-- page header -->
                    <div>
                        <h2>All Order List</h2>
                        <!-- breacrumb -->
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">All Order List</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- row -->
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="p-6">
                            <div class="row justify-content-between">
                                <div class="col-md-4 col-12 mb-2 mb-md-0">
                                    <!-- form -->
                                    <form class="d-flex" role="search">
                                        <input class="form-control" type="search" placeholder="Search" aria-label="Search" />
                                    </form>
                                </div>
                                <div class="col-lg-2 col-md-4 col-12">
                                    <!-- select -->
                                    <select class="form-select">
                                        <option selected>Status</option>
                                        <option value="Success">Success</option>
                                        <option value="Pending">Pending</option>
                                        <option value="Cancel">Cancel</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body p-0">
                            <!-- table responsive -->
                            <div class="table-responsive">
                                <p class="text-bg-primary text-center" >{{session('success')}}</p>
                                <table class="table table-centered table-hover text-nowrap table-borderless mb-0 table-with-checkbox">
                                    <thead class="bg-light">
                                    <tr>
                                        <th>Image</th>
                                        <th>Order Name</th>
                                        <th>Customer</th>
                                        <th>Date & TIme</th>
                                        <th>Payment</th>
                                        <th>Status</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($orders as $order)
                                            @foreach($order->orderDetails as $orderDetail)
                                         <tr>

                                        <td>
                                            <a href="#!"><img src="{{asset($orderDetail->product_image)}}" alt="" class="icon-shape icon-md" /></a>
                                        </td>
                                        <td><a href="#" class="text-reset">{{$orderDetail->product_name}}</a></td>
                                        <td>{{$order->customer->first_name}}</td>

                                        <td>{{$order->order_date}}</td>
                                        <td>{{$order->payment_method}}</td>

                                        <td>
                                            <span class="badge bg-light-primary text-dark-primary">{{$order->order_status}}</span>
                                        </td>

                                        <td>
                                            <div class="dropdown">
                                                <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                    <i class="feather-icon icon-more-vertical fs-5"></i>
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('order.details',$order->id)}}">
                                                            <i class="bi bi-ticket-detailed me-3"></i>
                                                            Details
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('order.invoice',$order->id)}}">
                                                            <i class="bi bi-book me-3"></i>
                                                            Invoice
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item" href="{{route('order.download-invoice',$order->id)}}" target="_blank">
                                                            <i class="bi bi-download me-3"></i>
                                                            Download Invoice
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item {{$order->order_status == 'complete'?:'disabled'}}" href="{{route('order.edit',$order->id)}}">
                                                            <i class="bi bi-pencil-square me-3"></i>
                                                            Edit
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <form action="{{route('order.destroy',$order->id)}}" method="post">
                                                            @csrf
                                                            <button class="btn dropdown-item {{$order->order_status == 'cancel'? '':'disabled'}} " type="submit" onclick="return confirm('Are you Sure..?')">
                                                                <i class="bi bi-trash me-3"></i>
                                                                Delete
                                                            </button>
                                                        </form>
                                                    </li>
                                                </ul>
                                            </div>
                                        </td>
                                    </tr>
                                            @endforeach
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
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
    </main>

@endsection
