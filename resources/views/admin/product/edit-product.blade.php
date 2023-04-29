@extends('admin.master')
@section('title')
    Update Product Information
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class=" text-center text-uppercase text-success">Update Product Information</h6>
                        <hr/>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Update Product</h3></div>
                                        <div class="card-body">
                                            <form action="{{route('update.product')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$products->id}}" name="product_id">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="productName" name="product_name" type="text" value="{{$products->product_name}}" />
                                                    <label for="productName">Product Name</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <label for="categoryName"></label>
                                                    <select name="category_name" id="" class="form-control" required>
                                                        <option value="">Select Category Previous was-{{$products->category_name}}</option>
                                                        @foreach($categories as $category)
                                                            <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <label for="brandName"></label>
                                                    <select name="brand_name" id="" class="form-control" required>
                                                        <option value="">Select Brand Previous was-{{$products->brand_name}}</option>
                                                        @foreach($brands as $brand)
                                                            <option value="{{$brand->brand_name}}">{{$brand->brand_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="price" name="price" type="text" value="{{$products->price}}" />
                                                    <label for="price">Price</label>
                                                </div>
                                                <div class="form mb-3 fixed">
                                                    <label for="description">Description</label>
                                                    <textarea id="description" name="description"  class="form-control" >{{$products->description}}</textarea>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="image" name="image" type="file" />
                                                    <img src="{{asset($products->image)}}" width="50" height="50" alt="">
                                                </div>
                                                <div class="form-check d-grid">
                                                    <input class="btn btn-primary" name="submit" type="submit" value="Submit"/>
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

