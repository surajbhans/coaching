@extends("base")

@section('title')
apply for admission
@endsection
@section('post')

<div class="container">
    <div class="row">
        <div class="col-6 ">
            <div class="card">
              
                    <div class="card-header">apply for admission</div>
                    <div class="card-body">
                        <form action="{{route('student.store')}}" method="POST">
                            @csrf
                           <div class="mb-3">
                            <label for="">name</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" disabled>
                           </div>
                           <div class="mb-3">
                            <label for="">father name</label>
                            <input type="text" name="father_name" value="{{old('father_name')}}" class="form-control">
                            @error('father_name')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                           </div>
                           <div class="mb-3">
                            <label for="">mother name</label>
                            <input type="text" name="mother_name" value="{{old('mother_name')}}" class="form-control">
                            @error('mother_name')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                           </div>
                           <div class="mb-3">
                            <label for="">dob</label>
                            <input type="date" name="dob" value="{{old('dob')}}" class="form-control">
                            @error('dob')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                           </div>
                           <div class="mb-3">
                            <label for="">education</label>
                            <input type="text" name="education" value="{{old('education')}}" class="form-control">
                            @error('education')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                           </div>
                           <div class="mb-3">
                            <label for="">address</label>
                            <input type="text" name="address" value="{{old('address')}}" class="form-control">
                            @error('address')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                           </div>
                           <div class="mb-3">
                            <label for="">gender</label>
                            <select name="gender" id="" class="form-select">
                                <option value="m">male</option>
                                <option value="f">female</option>
                                <option value="o">other</option>
                            </select>
                            @error('gender')
                            <p class="text-danger small">{{$message}}</p>
                            @enderror
                           </div>
                           <div class="mb-3">
                            <input type="submit" value="apply for cws" class="btn btn-success w-100">
                           </div>

                        </form>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
