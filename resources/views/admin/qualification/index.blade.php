@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">My qualification Data</h1>
<a class="btn btn-outline-success" href="{{route('admin.qualification.create')}}">Add My qualification Data</a>
</div>
@include('admin.qualification.message')
    

<table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Qualification Name</th>
    <th>University</th>
    <th>Year</th>
    <th>Grade</th>
    <th>Action</th>

</tr>
 @foreach ($qualification as $qualifications) 
<tr>
     <td>{{$qualifications->id}}</td>
    <td>{{$qualifications->qualification_name}}</td>
    <td>{{$qualifications->university}}</td>
    <td>{{$qualifications->year}}</td>
    <td>{{$qualifications->grade}}</td>
    <td>
        <a href="{{ route('admin.qualification.edit',$qualifications->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.qualification.destroy',$qualifications->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
 @endforeach 

</table>
@stop