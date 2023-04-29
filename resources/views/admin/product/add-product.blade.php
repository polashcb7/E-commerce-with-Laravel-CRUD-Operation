@extends('admin.master')
@section('title')
    Add Product Information
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class=" text-center text-uppercase text-success">Add Product Information</h6>
                        <hr/>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                                        <div class="card-body">
                                            <form action="{{route('new.product')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="productName" name="product_name" type="text" placeholder="Enter Product Name" />
                                                    <label for="productName">Product Name</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <label for="categoryName"></label>
                                                    <select name="category_name" id="" class="form-control">
                                                        <option value="">Select Category</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <label for="brandName"></label>
                                                    <select name="brand_name" id="" class="form-control">
                                                        <option value="">Select Brand</option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="price" name="price" type="text" placeholder="Enter Price" />
                                                    <label for="price">Price</label>
                                                </div>
                                                <div class="form-floating mb-3 fixed">
                                                    <textarea id="description" name="description" class="form-control"></textarea>
                                                    <label for="description">Description</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="image" required name="image" type="file" placeholder="Enter Image" />
                                                    <label for="image" class="pt-0 text-primary">Image</label>

                                                </div>




                                                <div class="form-check d-grid">
                                                    <input class="btn btn-primary" name="submit" type="submit" value="Submit" />
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
