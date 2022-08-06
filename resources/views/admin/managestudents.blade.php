@extends('base')
@section('post')


<div class="container">
    <div class="row">
        <div class="col-3">
            @include('admin.side')
        </div>
        <div class="col-9">
            <table class="table">
                
                <tr>
                    <th>id</th>
                    <th>name</th>
                    <th>father_name</th>
                    <th>mother_name</th>
                    <th>dob</th>
                    <th>address</th>
                    <th>education</th>
                    <th>gender</th>
                    <th>created_at</th>
                    <th>action</th>
                </tr>
                @foreach($students as $student)
                <tr>
                    <td>{{$student->id}}</td>
                    <td>{{$student->user->name}}</td>
                    <td>{{$student->father_name}}</td>
                    <td>{{$student->mother_name}}</td>
                    <td>{{$student->dob}}</td>
                    <td>{{$student->address}}</td>
                    <td>{{$student->education}}</td>
                    <td>{{$student->gender}}</td>
                    <td>{{$student->created_at}}</td>
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