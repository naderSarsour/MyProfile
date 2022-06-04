@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit personal data from : <span class="text-danger">{{$personal->name}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.personal.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.personal.update',$personal->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <lable>Name</lable>
                <input type="text" name="name" value="{{old('name',$personal->name)}}" placeholder="name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Age</lable>
                <input type="text" name="age" value="{{old('age',$personal->age)}}" placeholder="age" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Sex</lable>
                <input type="text" name="sex" value="{{old('sex',$personal->sex)}}" placeholder="sex" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Address</lable>
                <input type="text" name="address" value="{{old('address',$personal->address)}}" placeholder="address" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Email</lable>
                <input type="text" name="email" value="{{old('email',$personal->email)}}" placeholder="email" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Mobile</lable>
                <input type="text" name="mobile" value="{{old('mobile',$personal->mobile)}}" placeholder="mobile" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>image</lable>
                <input type="file" name="image"  class="form-control" />
                {{-- @if ($news->image) --}}
                <img class="mt-1 img-thumbnail" width="200" src="{{asset('uploads/'.$personal->image)}}" alt="">                    
                {{-- @endif --}}
               
            </div>
            <button class="ntn btn-primary">Edit</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop