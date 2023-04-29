@extends('admin.master')
@section('title')
    Manage Category
@endsection
@section('content')
    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage Category
            </div>
            @if($message = Session::get('message'))
                <div class="alert alert-success alert-dismissible fade show">
                    {{$message}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr class="text-center">
                        <th>SL.</th>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @empty('$categories')
                        <h1>Nothing to show</h1>
                    @endempty
                    @php $i=1 @endphp
                    @foreach($categories as $category)
                        <tr class="text-center ">
                            <td>{{$i++}}</td>
                            <td>{{$category->category_id}}</td>
                            <td>{{$category->category_name}}</td>
                            <td>
                                <div class="btn-group gap-2">
                               <div>
                                   <a href="{{route('edit.category',['id'=>$category->id])}}" class="btn btn-primary" role="button" >Edit</a>
                               </div>
                                    <form action="{{route('delete.category')}}" method="post">
                                        @csrf
                                        <input type="hidden" name="category_id" value="{{$category->id}}">
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

