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
                            <h2 class="text-primary">Edit Color</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Color</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Color</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
                            <a href="{{route('color.index')}}" class="btn btn-light">Back to Color</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <!-- card -->
                    <div class="card mb-6 shadow border-0">
                        <!-- card body -->
                        <p class="text-bg-primary text-center" >{{session('message')}}</p>
                        <form action="{{route('color.update',$color->id)}}" method="POST" enctype="multipart/form-data">
                            @method('PUT')
                            @csrf
                            <div class="card-body p-6">
                                <h4 class="mb-4 h5 mt-5">Color Information</h4>

                                <div class="row">

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Color Name</label>
                                        <input type="text" class="form-control" value="{{$color->name}}" name="name" placeholder="Color Name" required />
                                    </div>

                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Color Name</label>
                                        <input type="color" class="form-control" value="{{$color->code}}" name="code" placeholder="Color Code" required />
                                    </div>

                                    <div class="col-lg-12">
                                        <button class="btn btn-primary" type="submit">Update Color</button>
                                        <a href="#" class="btn btn-secondary ms-2">Save</a>
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
