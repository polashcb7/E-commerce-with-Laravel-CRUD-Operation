@extends('admin.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <div class="border p-3 rounded">
                        <h6 class=" text-center text-uppercase text-success">Edit Category Information</h6>
                        <hr/>
                        <div class="container">
                            <div class="row justify-content-center">
                                <div class="col-lg-10">
                                    <div class="card shadow-lg border-0 rounded-lg mt-5">
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Edit Category</h3></div>
                                        <div class="card-body">
                                            <form action="{{route('new.category')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$category->id}}" name="default_database_id">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="categoryId" name="category_id" type="text" value="{{$category->category_id}}"/>
                                                    <label for="categoryId">Category ID</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="categoryName" name="category_name" type="text" value="{{$category->category_name}}" />
                                                    <label for="categoryName">Category Name</label>
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

