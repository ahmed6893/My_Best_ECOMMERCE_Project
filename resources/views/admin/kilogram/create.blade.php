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
                            <h2 class="text-primary">Add New Kilogram</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Kilogram</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Add New Kilogram</li>
                                </ol>
                            </nav>
                        </div>
                        <div>
                            <a href="{{route('kilogram.index')}}" class="btn btn-light">Back to Kilograms</a>
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
                        <form action="{{route('kilogram.store')}}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="card-body p-6">
                                <h4 class="mb-4 h5 mt-5">Kilogram Information</h4>

                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Kilogram Name</label>
                                        <input type="text" class="form-control" name="name" placeholder="Kilogram Name" required />
                                    </div>
                                    <div></div>
                                    <!-- input -->
                                    <div class="mb-3 col-lg-12">
                                        <label class="form-label" >Descriptions</label>
                                        <textarea class="form-control" id="editor" name="description"></textarea>
                                    </div>

                                    <div class="col-lg-12">
                                        <button class="btn btn-primary" type="submit">Create Kilogram</button>
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
    </body>

@endsection
