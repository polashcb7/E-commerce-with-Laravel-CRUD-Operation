


@extends('frontEnd.master')
@section('title')
    Registration
@endsection
@section('content')
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="border p-3 rounded">
                            <h6 class=" text-center text-uppercase text-success">Registration</h6>
                            <hr/>
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Give Information</h3></div>
                                            <div class="card-body">
                                                <h3 class="text-center text-danger">{{session('message')}}</h3>
                                                <form action="{{route('new.customer')}}" method="post" enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="name" name="name" type="text" placeholder="Enter Full Name" />
                                                        <label for="name">Full Name</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="email" name="email" type="email" placeholder="Enter Email" />
                                                        <label for="email">Email</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="phone" name="phone" type="phone" placeholder="Enter Phone Number" />
                                                        <label for="phone">Phone</label>
                                                    </div>
                                                    <div class="form-floating mb-3">
                                                        <input class="form-control" id="password" name="password" type="password" placeholder="Enter Password" />
                                                        <label for="password">Password</label>
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



{{--    <div class="container p-5 mb-5">--}}
{{--        <div class="row">--}}
{{--            <div class="card">--}}
{{--                <div class="col-md-12">--}}
{{--                    <div class="row align-items-center m-5">--}}
{{--                        <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2" style="border: 1px solid lightgray">--}}
{{--                            <div class="blog-content-wrap p-4">--}}
{{--                                <h3 class="text-center text-danger">{{session('message')}}</h3>--}}
{{--                                <form action="{{route('new.customer')}}" method="post" class="comment-form">--}}
{{--                                    @csrf--}}
{{--                                    <h5>Registration</h5>--}}
{{--                                    <div class="row">--}}
{{--                                        <div class="col-12 col-md-6 mb-4">--}}
{{--                                            <input type="text" class="form-control" name="name" placeholder="Full Name">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12 col-md-6 mb-4">--}}
{{--                                            <input type="email" class="form-control" name="email" placeholder="Email">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12 col-md-6 mb-4">--}}
{{--                                            <input type="text" class="form-control" name="phone" placeholder="Phone">--}}
{{--                                        </div>--}}
{{--                                        <div class="col-12 col-md-6 mb-4">--}}
{{--                                            <input type="password" class="form-control" name="password" placeholder="password">--}}
{{--                                        </div>--}}

{{--                                    </div>--}}
{{--                                    <button class="btn btn-solid" type="submit">Submit</button>--}}
{{--                                </form>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--            </div>--}}

{{--        </div>--}}


{{--    </div>--}}





{{--        <div class="row">--}}
{{--            <div class="col-md-12">--}}
{{--                <div class="card">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="border p-3 rounded">--}}
{{--                            <h6 class=" text-center text-uppercase text-success">Add Product Information</h6>--}}
{{--                            <hr/>--}}
{{--                            <div class="container">--}}
{{--                                <div class="row justify-content-center">--}}
{{--                                    <div class="col-lg-10">--}}
{{--                                        <div class="card shadow-lg border-0 rounded-lg mt-5">--}}
{{--                                            <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>--}}
{{--                                            <div class="card-body">--}}
{{--                                                <form action="" method="post" enctype="multipart/form-data">--}}
{{--                                                    @csrf--}}
{{--                                                    <div class="form-floating mb-3">--}}
{{--                                                        <input class="form-control" id="productName" name="product_name" type="text" placeholder="Enter Product Name" />--}}
{{--                                                        <label for="productName">Product Name</label>--}}
{{--                                                    </div>--}}

{{--                                                    <div class="form-floating mb-3">--}}
{{--                                                        <input class="form-control" id="price" name="price" type="text" placeholder="Enter Price" />--}}
{{--                                                        <label for="price">Price</label>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-floating mb-3 fixed">--}}
{{--                                                        <textarea id="description" name="description" class="form-control"></textarea>--}}
{{--                                                        <label for="description">Description</label>--}}
{{--                                                    </div>--}}
{{--                                                    <div class="form-floating mb-3">--}}
{{--                                                        <input class="form-control" id="image" required name="image" type="file" placeholder="Enter Image" />--}}
{{--                                                        <label for="image" class="pt-0 text-primary">Image</label>--}}

{{--                                                    </div>--}}




{{--                                                    <div class="form-check d-grid">--}}
{{--                                                        <input class="btn btn-primary" name="submit" type="submit" value="Submit" />--}}
{{--                                                    </div>--}}
{{--                                                </form>--}}
{{--                                            </div>--}}
{{--                                        </div>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}

{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

@endsection



