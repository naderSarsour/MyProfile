@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit skills</h1>
<a class="btn btn-outline-dark" href="{{route('admin.skills.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.skills.update',$skills->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>skills_name</lable>
                <input type="text" name="skills_name" value="{{old('skills_name',$skills->skills_name)}}" placeholder="skills_name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>skills_grade</lable>
                <input type="integer" name="skills_grade" value="{{old('skills_grade',$skills->skills_grade)}}" placeholder="skills_grade" class="form-control" />
          
            </div>
            <button class="ntn btn-primary">Edit</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop