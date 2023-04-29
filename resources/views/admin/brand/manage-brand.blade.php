@extends('admin.master')
@section('title')
    Manage Brand
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Brand
            </div>
            @if($message = Session::get('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close">

                    </button>

                </div>
            @endif
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead class="text-center">
                    <tr>
                        <th>SL.</th>
                        <th>Brand ID</th>
                        <th>Brand Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @empty('$brands')

                        <h1>Nothing to show</h1>
                    @endempty
                    @php $i=1 @endphp
                    @foreach($brands as $brand)
                        <tr>
                            <td>{{$i++}}</td>
                            <td>{{$brand->brand_id}}</td>
                            <td>{{$brand->brand_name}}</td>
                            <td>
                                <div class="btn-group gap-2">
                                    <div>
                                        <a href="{{route('edit.brand',['id'=>$brand->id])}}" class="btn btn-primary" role="button" >Edit</a>
                                    </div>
                                    <form action="{{route('delete.brand')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="brand_id" value="{{$brand->id}}">
                                        <button class="btn btn-danger" onclick="return confirm('Are you sure')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

