@extends('base')

@section('title')
student dashboard
@endsection
@section('post')
<div class="container">
    @if($checkstudent)
    <div class="row">
        <div class="col-3">
            <div class="card">
                <img src="https://picsum.photos/200/200?random=3" alt="" class="rounded-circle">
                <div class="card-body">
                    <h5>{{auth()->user()->name}}</h5>
                    <p class="small text-muted"><i class="bi bi-phone"></i>{{auth()->user()->contact}}</p>
                </div>
            </div>
          <div class="col-12 text-center py-2">
            <a href="" class="btn btn-info w-100 ">edit profile</a>
          </div>
            <div class="list-group">
                <a href="" class="list-group-item list-group-item-action">payment</a>
                <a href="" class="list-group-item list-group-item-action">cources</a>
                <a href="" class="list-group-item list-group-item-action">paymeexamination</a>
                <a href="{{route('logout')}}" class="list-group-item list-group-item-action bg-danger text-white">logout</a>
            </div>
        </div>
        <div class="col-9">
            <div class="card card-body bg-light">
                <div class="container">
                    <h1 class="display-3">{{auth()->user()->name}}</h1>
                    <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Expedita ut veniam quos cum vel est iste quam tenetur corporis ex ab quibusdam, et quidem illum earum accusantium eveniet? Doloribus, rerum.</p>
                    <a href="" class="btn btn-success">check cources</a>
                </div>
            </div>
        </div>
    </div>
        
    @else
    <div class="alert alert-warning">
        <h2 class="alert-title">notice</h2>
        <p class="lead">please apply for admission</p>
        <a href="{{route('student.create')}}" class="btn btn-success">apply first</a>
    </div>
        
    @endif
</div>
@endsection