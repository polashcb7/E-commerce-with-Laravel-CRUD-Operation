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
                                        <div class="card-header"><h3 class="text-center font-weight-light my-4">Add Product</h3></div>
                                        <div class="card-body">
                                            <form action="{{route('update.user')}}" method="post" enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" value="{{$user->id}}" name="user_id">
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="name" name="name" type="text" value="{{$user->name}}" />
                                                    <label for="name">Name</label>
                                                </div>
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="email" name="email" type="text" value="{{$user->email}}" readonly />
                                                    <label for="email">Email</label>
                                                </div>
                                                @if(Auth::user()->id == $user->id)
                                                <div class="form-floating mb-3">
                                                    <input class="form-control" id="password" name="password" type="password"  />
                                                    <label for="password">Password</label>
                                                </div>
                                                @endif

                                                <div class="form-check d-grid">
                                                    <input class="btn btn-primary" name="submit" type="submit" />
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

