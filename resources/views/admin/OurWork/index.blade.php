@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">Our Works</h1>
<a class="btn btn-outline-success" href="{{route('admin.OurWork.create')}}">Add New Our Work</a>
</div>
@include('admin.OurWork.message')
    

<table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Title</th>
    <th>Image</th>
    <th>Action</th>
</tr>
@foreach ($OurWork as $OurWork)
<tr>
    <td>{{$OurWork->id}}</td>
    <td>{{$OurWork->title}}</td>
    <td><img width="100" src="{{asset('uploads/'.$OurWork->image)}}" alt=""></td>
  
    <td>
        <a href="{{ route('admin.OurWork.edit',$OurWork->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>

        
    </td>
    

</tr>  
@endforeach

</table>
@stop