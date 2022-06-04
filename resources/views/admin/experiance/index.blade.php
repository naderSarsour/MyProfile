@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">My Experiance Data</h1>
<a class="btn btn-outline-success" href="{{route('admin.experiance.create')}}">Add My Experiance Data</a>
</div>
@include('admin.experiance.message')
    

<table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Job Title</th>
    <th>Place</th>
    <th>Years Of Experiance</th>
    <th>From</th>
    <th>To</th>
    <th>Action</th>

</tr>
 @foreach ($experiance as $experiances) 
<tr>
     <td>{{$experiances->id}}</td>
    <td>{{$experiances->job_title}}</td>
    <td>{{$experiances->place}}</td>
    <td>{{$experiances->years_of_experiance}}</td>
    <td>{{$experiances->created_at}}</td>
    <td>{{$experiances->updated_at}}</td>
    <td>
        <a href="{{ route('admin.experiance.edit',$experiances->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.experiance.destroy',$experiances->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
 @endforeach 

</table>
@stop