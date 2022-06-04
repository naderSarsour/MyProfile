@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">Skills</h1>
<a class="btn btn-outline-success" href="{{route('admin.skills.create')}}">Add New Skills</a>
</div>
@include('admin.skills.message')
    

<table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>skills name</th>
    <th>skills grade</th>
    <th>Action</th>
</tr>
@foreach ($skills as $skills)
<tr>
    <td>{{$skills->id}}</td>
    <td>{{$skills->skills_name}}</td>
    <td>{{$skills->skills_grade}}</td>
  
    <td>
        <a href="{{ route('admin.skills.edit',$skills->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
   
    </td>
    

</tr>  
@endforeach

</table>
@stop