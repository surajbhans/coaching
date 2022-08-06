@extends('base')
@section('post')


<div class="container">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <h4 class="display-6">manage users</h4>
            <a href="" class="btn btn-success float-end">Add</a>
            <table class="table">
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>contact</th>
                    <th>email</th>
                    <th>created at</th>
                    <th>action</th>
                </tr>
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->contact}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{$user->created_at}}</td>
                    <td>
                        <a href="" class="btn btn-danger">x</a>
                    </td>
                </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection