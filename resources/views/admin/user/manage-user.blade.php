@extends('admin.master')
@section('title')
    Manage User
@endsection
@section('content')

    <div class="container-fluid px-4">
        <div class="card mb-4">
            <div class="card-header">
                <i class="fas fa-table me-1"></i>
                Manage User
            </div>
            <div class="card-body">
                <table id="datatablesSimple">
                    <thead class="text-center">
                    <tr>
                        <th>SL. &nbsp;&nbsp;</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody class="text-center">
                    @php $i=1 @endphp
                    @foreach($users as $user)

                        <tr>
                            <td>{{$i++}} &nbsp;&nbsp; &nbsp;&nbsp;</td>
                            <td>{{$user->name}}  &nbsp;&nbsp;</td>
                            <td>{{$user->email}}  &nbsp;&nbsp;</td>
                            <td>
                                @if(Auth::user()->id == $user->id)
                                <a href="{{route('edit.user',['id' => $user->id ])}}" class="btn btn-secondary">Edit</a>
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
