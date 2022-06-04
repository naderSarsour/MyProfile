@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit experiance data from : <span class="text-danger">{{$experiance->job_title}}</span></h1>
<a class="btn btn-outline-dark" href="{{route('admin.experiance.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.experiance.update',$experiance->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')

            <div class="mb-3">
                <lable>Job Title</lable>
                <input type="text" name="job_title" value="{{old('job_title',$experiance->job_title)}}" placeholder="job_title" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Place</lable>
                <input type="text" name="place" value="{{old('place',$experiance->place)}}" placeholder="place" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Years Of Experiance</lable>
                <input type="integer" name="years_of_experiance" value="{{old('years_of_experiance',$experiance->years_of_experiance)}}" placeholder="years_of_experiance" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>Start Date</lable>
                <input type="date" name="created_at" value="{{old('created_at',$experiance->created_at)}}" class="form-control" />
          
            </div>

            <div class="mb-3">
                <lable>End Date</lable>
                <input type="date" name="updated_at" value="{{old('end_date',$experiance->created_at)}}" class="form-control" />
          
            </div>
            <button class="ntn btn-primary">Edit</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop