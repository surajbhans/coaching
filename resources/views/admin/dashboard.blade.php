@extends('base')


@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-4">
                        <div class="card bg-primary text-white">
                            <div class="card-body">
                                <h2 class="display-2">{{$total_students}}</h2>
                                <h6>total students</h6>
                            </div>
                        </div>
                    </div>
                     @extends('base')

@section('data')
    <div class="container">
        <div class="row">
            <div class="col-3">
                @include('admin.side')
            </div>
            <div class="col-9">
                <div class="row">
                    <div class="col-8">
                        <h4 class="display-6">Manage Courses</h4>
                    </div>
                    <div class="col-4">
                        <a href="{{route('course.create')}}" class="btn btn-success">Create new Course</a>
                    </div>
                </div>
                <hr>
                <table class="table">
                    <tr>
                        <th>id</th>
                        <th>Title</th>
                        <th>Duration</th>
                        <th>Fee</th>
                        <th>Discount Fee</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>category</th>
                        <th>status</th>
                        <th>action</th>
                    </tr>
                    @foreach($courses as $course)
                        <tr>
                            <td>{{$course->id}}</td>
                            <td>{{$course->title}}</td>
                            <td>{{$course->duration}}</td>
                            <td>{{$course->fee}}</td>
                            <td>{{$course->discount_fee}}</td>
                            <td>{{$course->image}}</td>
                            <td>{{$course->description}}</td>
                            <td>{{$course->status}}</td>
                            <td>
                                <a href="" class="btn btn-danger">X</a>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
                    <div class="col-4">
                        <div class="card bg-danger text-white">
                            <div class="card-body">
                                <h2 class="display-2">{{$total_users}}</h2>
                                <h6 >total Users</h6>
                            </div>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="card text-white bg-success">
                            <div class="card-body">
                                <h2 class="display-2">30+</h2>
                                <h6>total Payment</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection