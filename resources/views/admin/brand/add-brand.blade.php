@extends('admin.master')
@section('title')
    Add Brand
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class=" text-center text-uppercase text-success">Add Brand Information</h6>
                        <hr/>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Brand</h3></div>
                                        <div class="card-body">
                                            <form action="{{route('new.brand')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="brandId" name="brand_id" type="text" placeholder="Enter Brand ID" />
                                                    <label for="brandId">Brand ID</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="brandName" name="brand_name" type="text" placeholder="Enter Brand Name" />
                                                    <label for="brandName">Brand Name</label>
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

