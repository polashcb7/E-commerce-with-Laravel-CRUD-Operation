@extends('frontEnd.master')
@section('title')
    Cart Details
@endsection
@section('content')
    <div class="container px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Cart Details
                <div>
                    <h3 class="text-primary"> {{ session('message') }}</h3>
                </div>
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead>
                    <tr >
                        <th>SL.</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>Total</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php $i=1;$total=0; @endphp
                    @foreach($cartDetails as $cartDetails)
                        <tr class="text-center">
                            <td>{{$i++}}</td>
                            <td>{{$cartDetails->product_name}}</td>
                            <td>{{$cartDetails->price}}</td>
                            <td>
                                <div>
                                    <form class="cart_form text-center">
                                        <button class="cart_button" type="button" id="increase" onclick="window.location.href='{{route('plus.cart',['id'=>$cartDetails->id])}}'">+</button>
                                        <input class="cart_input" readonly type="text" name="quantity" value="{{$cartDetails->quantity}}">
                                        <button class="cart_button" type="button" id="decrease" onclick="window.location.href='{{route('minus.cart',['id'=>$cartDetails->id])}}'">-</button>
                                    </form>

                                </div>

                            </td>
                            <td>{{$cartDetails->total_price}}</td>
                            <h5 class="card-title hidden">{{$total+=$cartDetails->total_price}}</h5>
                            <td>
                                <div class="btn btn-group">
                                    <form action="{{route('delete.cart_item')}}" method="post" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="cart_id" value="{{$cartDetails->id}}">
                                        <button class="btn btn-group btn-danger" onclick="return confirm('Are you Sure')">Delete</button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <h1 style="text-align: right">Total: @php echo  $total; @endphp</h1>

{{--                    <div class="quantity">--}}
{{--                        <a href="{{route('place.order',['id'=>Session::get('customerId')])}}" class="btn add_to_cart_button">Place an Order</a>--}}
{{--                    </div>--}}

                @if( $i>1 )
                <div class="container" style="padding: 40px">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form">
                                <form action="{{route('place.order')}}" method="post">
                                    @csrf
                                    <input type="hidden" name="total" value="{{ $total }}">
                                    <input type="hidden" name="customerId" value="{{Session::get('customerId')}}">
                                    <input type="text" name="name" value="{{Session::get('customerName')}}">
                                    <input type="text" name="address" placeholder="Your Address">
                                    <input type="text" name="phone" placeholder="Your Phone">
                                    <button type="submit" class="btn add_to_cart_button" >Place an Order</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                    @endif

            </div>
        </div>
    </div>
@endsection
