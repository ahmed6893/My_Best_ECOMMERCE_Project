@extends('admin.master')
@section('body')
    <main class="main-content-wrapper">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row mb-8">
                <div class="col-md-12">
                    <div class="d-md-flex justify-content-between align-items-center">
                        <!-- page header -->
                        <div>
                            <h2>Edit Product</h2>
                            <!-- breacrumb -->
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb mb-0">
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Dashboard</a></li>
                                    <li class="breadcrumb-item"><a href="#" class="text-inherit">Products</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
                                </ol>
                            </nav>
                        </div>
                        <!-- button -->
                        <div>
                            <a href="{{route('product.index')}}" class="btn btn-light">Back to Product</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- row -->
            <form action="{{route('product.update',$product->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-lg-8 col-12">
                        <!-- card -->
                        <div class="card mb-6 card-lg">
                            <h4 class="text-bg-primary text-center" >{{session('message')}}</h4>
                            <!-- card body -->
                            <div class="card-body p-6">
                                <h4 class="mb-4 h5">Product Information</h4>
                                <div class="row">
                                    <!-- input -->
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Product Name</label>
                                        <input type="text" class="form-control" value="{{$product->name}}" name="name" placeholder="Product Name" required />
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Product Category</label>
                                        <select class="form-select" name="category_id">
                                            <option selected>Product Category</option>
                                            @foreach($categories as $category)
                                                <option value="{{$category->id}}" @selected($category->id == $product->category_id)>{{$category->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Product Sub Category</label>
                                        <select class="form-select" name="sub_category_id">
                                            <option selected>Product Sub Category</option>
                                            @foreach($subCategories as $subCategory)
                                                <option value="{{$subCategory->id}}" @selected($subCategory->id ==$product->sub_category_id)>{{$subCategory->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <!-- input -->
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Brands</label>
                                        <select class="form-select" name="brand_id">
                                            <option >Select Brands</option>
                                            @foreach($brands as $brand)
                                                <option value="{{$brand->id}}" @selected($brand->id == $product->brand_id)>{{$brand->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Units</label>
                                        <select class="form-select" name="unit_id">
                                            <option >Select Units</option>
                                            @foreach($units as $unit)
                                                <option value="{{$unit->id}}" @selected($unit->id == $product->unit_id)>{{$unit->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="mb-3 col-lg-6">
                                        <label class="form-label">Colors</label>
                                        <select class="form-select" name="kilogram[]" multiple>
                                            <option value="">Select Colors</option>
                                            @foreach($kilograms as $kilogram)
                                                <option value="{{$kilogram->id}}" @foreach($product->productKilograms as $productKilogram) {{$kilogram->id == $productKilogram->kilogram_id ? 'selected' : ''}} @endforeach >{{$kilogram->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>

                                    <div>
                                        <div class="mb-3 col-lg-6 mt-5">
                                            <!-- heading -->
                                            <h4 class="mb-3 h5">Product Images</h4>

                                            <!-- input -->
                                            <div class="mb-4 d-flex">
                                                <div class="position-relative">
                                                    <img class="image icon-shape icon-xxxl bg-light rounded-4" src="{{asset($product->product_image)}}" alt="Image" />

                                                    <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                                        <input type="file" class="file-input" name="product_image"/>
                                                        <span class="icon-shape icon-sm rounded-circle bg-white">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-fill text-muted" viewBox="0 0 16 16">
                                          <path
                                              d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                       </svg>
                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mb-3 col-lg-6 mt-5">
                                            <!-- heading -->
                                            <h4 class="mb-3 h5">Product Other Images</h4>

                                            <!-- input -->
                                            <div class="mb-4 d-flex">
                                                <div class="position-relative">
                                                    @foreach($product->otherImages as $otherImage)
                                                        <img class="image icon-shape icon-xxxl bg-light rounded-4" src="{{asset($otherImage->other_image)}}" alt="Image" />
                                                    @endforeach
                                                    <div class="file-upload position-absolute end-0 top-0 mt-n2 me-n1">
                                                        <input type="file" class="file-input" name="other_image[]" multiple/>
                                                        <span class="icon-shape icon-sm rounded-circle bg-white">
                                       <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="currentColor" class="bi bi-pencil-fill text-muted" viewBox="0 0 16 16">
                                          <path
                                              d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                       </svg>
                                    </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- input -->
                                    <div class="mb-3 col-lg-12 mt-5">
                                        <h4 class="mb-3 h5">Product Short Descriptions</h4>
                                        <textarea class="form-control" name="short_description">{{$product->short_description}}</textarea>
                                    </div>
                                    <div class="mb-3 col-lg-12 mt-5">
                                        <h4 class="mb-3 h5">Product Long Descriptions</h4>
                                        <textarea name="long_description" class="form-control summernote" >{{ $product->long_description }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <!-- card -->
                        <div class="card mb-6 card-lg">
                            <!-- card body -->
                            <div class="card-body p-6">
                                <!-- input -->
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Product Code</label>
                                        <input type="text" class="form-control" value="{{$product->code}}" name="code" placeholder="Enter Product Code" />
                                    </div>
                                </div>
                            </div>
                            <div class="card-body p-6">
                                <!-- input -->
                                <div>
                                    <div class="mb-3">
                                        <label class="form-label">Stock Amount</label>
                                        <input type="text" class="form-control" name="stock_amount" value="{{$product->stock_amount}}" placeholder="Enter Stock Amount" />
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card mb-6 card-lg">
                            <!-- card body -->
                            <div class="card-body p-6">
                                <h4 class="mb-4 h5">Product Price</h4>
                                <!-- input -->
                                <div class="mb-3">
                                    <label class="form-label">Regular Price</label>
                                    <input type="text" name="regular_price" value="{{$product->regular_price}}" class="form-control" placeholder="here" />
                                </div>
                                <!-- input -->
                                <div class="mb-3">
                                    <label class="form-label">Sale Price</label>
                                    <input type="text" class="form-control" value="{{$product->selling_price}}" name="selling_price" placeholder="here" />
                                </div>
                            </div>
                        </div>
                        <!-- card -->
                        <div class="card mb-6 card-lg">
                            <!-- card body -->
                            <div class="card-body p-6">
                                <h4 class="mb-4 h5">Meta Data</h4>
                                <!-- input -->
                                <div class="mb-3">
                                    <label class="form-label">Meta Title</label>
                                    <textarea type="text" class="form-control" name="meta_title" placeholder="Title">{{$product->meta_title}}</textarea>
                                </div>

                                <!-- input -->
                                <div class="mb-3">
                                    <label class="form-label">Meta Description</label>
                                    <textarea class="form-control" rows="3" name="meta_description" placeholder="Meta Description">{{$product->meta_description}}</textarea>
                                </div>
                            </div>
                        </div>
                        <!-- button -->
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Update Product</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

    </main>

@endsection
