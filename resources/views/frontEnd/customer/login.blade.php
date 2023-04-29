@extends('frontEnd.master')
@section('title')
    Login
@endsection
@section('content')
    <div class="container" style="padding: 50px">
        <div class="row align-items-center m-5">
            <div class="col-md-10 offset-md-1 col-lg-8 offset-lg-2" style="border: 1px solid lightgray; padding: 50px">
                <div class="blog-content-wrap p-4">
                    {{ session('message') }}
                    <form action="{{route('customer.loginCheck')}}" method="post" class="comment-form">
                        @csrf
                        <h5 class="text-center text-primary" >Login</h5>
                        <div class="row">
                            <div class="col-12 col-md-6 mb-4">
                                <input type="text" class="form-control" name="user_name" placeholder="User Name">User Name
                            </div>
                            <div class="col-12 col-md-6 mb-4">
                                <input type="password" class="form-control" name="password" placeholder="password">Password
                            </div>


                        </div>
                        <div class="text-center" style="padding-top: 10px">
                            <button class="btn btn-solid text-center" type="submit">Submit</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>


@endsection
