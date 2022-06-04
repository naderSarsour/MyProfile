@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Add New qualification Data</h1>
<a class="btn btn-outline-dark" href="{{route('admin.qualification.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.qualification.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <lable>Qualification Name</lable>
                <input type="text" name="qualification_name" value="{{old('qualification_name')}}" placeholder="qualification_name" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>University</lable>
                <input type="text" name="university" value="{{old('university')}}" placeholder="university" class="form-control" />
            
            </div>
            <div class="mb-3">
                <lable>Year</lable>
                <input type="integer" name="year" value="{{old('year')}}" placeholder="year" class="form-control" />
            
            </div>
             <div class="mb-3">
                <lable>Grade</lable> 
                     <select class="form-control" name="grade">
                        {{-- <option value="grade" >Select</option> --}}
                          <option value="grade">Excellent</option> 
                          <option value="grade">Very_good</option> 
                          <option value="grade">Good</option> 
                          <option value="grade">Acceptable</option> 
                     </select>
                     
                </div>   
                </div>

            </div>
            <button class="ntn btn-primary">Add</button>
        </form>
      </div>
  </div>

</div> 
 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
@stop