@extends('admin.master')
@section('body')

    <body>

    <!-- main -->
    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <!-- page header -->
                        <div>
                            <h2 class="text-primary">Edit Category</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">All Orders</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Order</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
                            <a href="{{route('order')}}" class="btn btn-light">Back to All Order</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- card -->
                    <div class="card mb-6 shadow border-0">
                        <!-- card body -->
                        <p class="text-bg-primary text-center" >{{session('success')}}</p>
                        <form action="{{route('order.update',$order->id)}}" method="POST" >
                            @method('post')
                            @csrf
                            <div class="card-body p-6">
                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Order total</label>
                                        <input type="text" class="form-control" value="{{$order->order_total}}" readonly />
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Customer Info</label>
                                        <input type="text" class="form-control" value="{{$order->customer->first_name.$order->customer->last_name .'  Email:'.($order->customer->email)}}" readonly />
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Courier</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="courier_id">
                                                <option value=""> -- Select Courier -- </option>
                                                @foreach($couriers as $courier)
                                                <option value="{{$courier->id }}" @selected($order->courier_id == $courier->id)>{{$courier->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-2 col-form-label">Order Status</label>
                                        <div class="col-sm-10">
                                            <select class="form-control" name="order_status">
                                                <option value="">--Select Order Status -- </option>
                                                <option value="pending"     @selected($order->order_status == 'pending') >Pending</option>
                                                <option value="processing"  @selected($order->order_status == 'processing') >Processing </option>
                                                <option value="complete"    @selected($order->order_status == 'complete') >Complete </option>
                                                <option value="cancel"      @selected($order->order_status == 'cancel') >Cancel</option>
                                            </select>
                                        </div>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3 col-lg-12">
                                        <label class="form-label" >Delivery Address</label>
                                        <textarea class="form-control" name="delivery_address">{{$order->delivery_address}}</textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <button class="btn btn-primary" type="submit">Update Order</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </main>




@endsection
