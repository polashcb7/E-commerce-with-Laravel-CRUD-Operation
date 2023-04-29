@extends('admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
   <div class="container-fluid px-4">
       <div class="card mb-4">
           <div class="card-header">
               <i class="fas fa-table me-1"></i>
               Manage Product
           </div>
           <div class="card-body">
               <table id="datatablesSimple">
                   <thead>
                   <tr class="text-center">
                       <th>SL.</th>
                       <th>Product Name</th>
                       <th>Category Name</th>
                       <th>Brand Name</th>
                       <th>Price</th>
                       <th>Description</th>
                       <th>Image</th>
                       <th>Status</th>
                       <th>Action</th>
                   </tr>
                   </thead>
                   <tbody>
                   @php $i=1 @endphp
                      @foreach($products as $product)

                   <tr class="text-center">
                       <td>{{$i++}}</td>
                       <td>{{$product->product_name}}</td>
                       <td>{{$product->category_name}}</td>
                       <td>{{$product->brand_name}}</td>
                       <td>{{$product->price}}</td>
                       <td>{{ substr($product->description,0,30) }}</td>
                       <td>
                           <img src="{{asset($product->image)}}" width="50" height="50" alt="">
                       </td>
                       <td>
                           {{$product->status == 1 ? 'Published' : 'Unpublished'}}
                       </td>
                       <td>
                           <div class="btn btn-group">
                               <a href="{{route('edit.product',['id'=>$product->id])}}" class="btn btn-secondary">Edit</a>
                               <form action="{{route('delete.product',['id'=>$product->id])}}" method="post" enctype="multipart/form-data">
                                   @csrf
                                   <input type="hidden" name="product_id" value="{{$product->id}}">
                                   <button class="btn btn-group btn-danger" onclick="return confirm('Are you Sure')">Delete</button>
                               </form>
                           </div>


                           @if($product->status == 1)
                           <a href="{{route('status.product',['id'=>$product->id])}}" class="btn btn-warning">Unpublished</a>
                           @else
                           <a href="{{route('status.product',['id'=>$product->id])}}" class="btn btn-success">Published</a>
                           @endif
                       </td>

                   </tr>
                      @endforeach
                   </tbody>

               </table>
           </div>
       </div>
   </div>


@endsection
