@extends('admin.master')
@section('body')

    <body>

    <!-- navbar vertical -->

    <!-- main -->
    <main class="main-content-wrapper">
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-flex flex-column flex-md-row justify-content-between align-items-md-center gap-4">
                        <!-- pageheader -->
                        <div>
                            <h2>Kilogram</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Kilogram</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="{{route('kilogram.create')}}" class="btn btn-primary">Add New Kilogram</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12 col-12 mb-5">
                    <!-- card -->
                    <div class="card h-100 card-lg">
                        <div class="px-6 py-6">
                            <div class="row justify-content-between">
                                <div class="col-lg-4 col-md-6 col-12 mb-2 mb-md-0">
                                    <!-- form -->
                                    <form class="d-flex" role="search">
                                        <input class="form-control" type="search" placeholder="Search Category" aria-label="Search" />
                                    </form>
                                </div>
                                <!-- select option -->
                                <div class="col-xl-2 col-md-4 col-12">
                                    <select class="form-select">
                                        <option selected>Status</option>
                                        <option value="Published">Published</option>
                                        <option value="Unpublished">Unpublished</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!-- card body -->
                        <div class="card-body p-0">
                            <!-- table -->
                            <div class="table-responsive">
                                <p class="text-bg-primary text-center" >{{session('message')}}</p>
                                <table class="table table-centered table-hover mb-0 text-nowrap table-borderless table-with-checkbox">
                                    <thead class="bg-light">

                                    <tr>
                                        <th>SL</th>
                                        <th>Name</th>
                                        <th>Status</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($kilograms as $kilogram)
                                        <tr>
                                            <td>{{$loop->iteration}}</td>
                                            <td><a href="#" class="text-reset">{{$kilogram->name}}</a></td>
                                            <td class="text-dark">
                                                {{$kilogram->status == 1 ? 'Published' : 'Unpublished'}}
                                            </td>

                                            <td>
                                                <div class="dropdown">
                                                    <a href="#" class="text-reset" data-bs-toggle="dropdown" aria-expanded="false">
                                                        <i class="feather-icon icon-more-vertical fs-5"></i>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li>
                                                            <form action="{{route('kilogram.destroy',$kilogram->id)}}" method="post" onclick="return confirm('Are You Sure..')">
                                                                @method('DELETE')
                                                                @csrf
                                                                <button class="dropdown-item" type="submit">
                                                                    <i class="bi bi-trash me-3"></i>
                                                                    Delete
                                                                </button>
                                                            </form>
                                                        </li>
                                                        <li>
                                                            <a class="dropdown-item" href="{{route('kilogram.edit',$kilogram->id)}}">
                                                                <i class="bi bi-pencil-square me-3"></i>
                                                                Edit
                                                            </a>
                                                        </li>
                                                        <li>
                                                            @if($kilogram->status == 1)
                                                                <a href="{{route('kilogram.show',$kilogram->id)}}" class="badge bg-light-danger dropdown-item text-dark-danger ">Unpublished</a>
                                                            @else
                                                                <a href="{{route('kilogram.show',$kilogram->id)}}" class="badge bg-light-primary dropdown-item text-dark-primary">Published</a>
                                                            @endif
                                                        </li>
                                                    </ul>

                                                </div>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="border-top d-flex justify-content-between align-items-md-center px-6 py-6 flex-md-row flex-column gap-4">
                            <span>Showing 1 to 8 of 12 entries</span>
                            <nav>
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


    </body>
@endsection
