@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Add New Personal Data</h1>
<a class="btn btn-outline-dark" href="{{route('admin.personal.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.personal.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>Name</lable>
                <input type="text" name="name" value="{{old('name')}}" placeholder="name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Sex</lable>
                <input type="text" name="sex" value="{{old('sex')}}" placeholder="sex" class="form-control" />
            
            </div>
            <div class="mb-3">
                <lable>Age</lable>
                <input type="integer" name="age" value="{{old('age')}}" placeholder="age" class="form-control" />
            
            </div>
            <div class="mb-3">
                <lable>Address</lable>
                <input type="integer" name="address" value="{{old('address')}}" placeholder="address" class="form-control" />
            
            </div>
            <div class="mb-3">
                <lable>Email</lable>
                <input type="email" name="email" value="{{old('email')}}" placeholder="email" class="form-control" />
            
            </div>
            <div class="mb-3">
                <lable>Mobile</lable>
                <input type="mobile" name="mobile"  placeholder="mobile" class="form-control" />
                {{-- value="{{old('mobile')}}" --}}
            </div>
            <div class="mb-3">
                <lable>Image</lable>
                <input type="file" name="image"  class="form-control" />
               
            </div>
            <button class="ntn btn-primary">Add</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop