@extends('admin.master')

@section('content')

<div class="container my-5">
<div class="d-flex justify-content-between align-items-center">
    <h1>Edit Our Work</h1>
<a class="btn btn-outline-dark" href="{{route('admin.OurWork.index')}}">Return Back</a>
</div>  
@include('admin.errors')      
  <div class="card">
      <div class="card-body">
        <form class="container my-5" action="{{route('admin.OurWork.update',$OurWork->id)}}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="mb-3">
                <lable>Title</lable>
                <input type="text" name="title" value="{{old('title',$OurWork->title)}}" placeholder="Title" class="form-control" />
          
            </div>
            <div class="mb-3">
                <lable>image</lable>
                <input type="file" name="image"  class="form-control" />
                {{-- @if ($news->image) --}}
                <img class="mt-1 img-thumbnail" width="200" src="{{asset('uploads/'.$OurWork->image)}}" alt="">                    
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