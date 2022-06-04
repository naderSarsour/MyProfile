@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">My Personal Data</h1>
<a class="btn btn-outline-success" href="{{route('admin.personal.create')}}">Add My Personal Data</a>
</div>
@include('admin.personal.message')
    

<table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>Name</th>
    <th>Sex</th>
    <th>Age</th>
    <th>Address</th>
    <th>Email</th>
    <th>Mobile</th>
    <th>Image</th>
    <th>Action</th>
</tr>
 @foreach ($personal as $personals) 
<tr>
     <td>{{$personals->id}}</td>
    <td>{{$personals->name}}</td>
    <td>{{$personals->sex}}</td>
    <td>{{$personals->age}}</td>
    <td>{{$personals->address}}</td>
    <td>{{$personals->email}}</td>
    <td>{{$personals->mobile}}</td>
    <td><img width="100" src="{{asset('uploads/'.$personals->image)}}" alt=""></td>


    <td>
        <a href="{{ route('admin.personal.edit',$personals->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.personal.destroy',$personals->id)}}" method="POST">
        @csrf
        @method('delete')
        <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
        </form>
    </td>
    
</tr>  
 @endforeach 

</table>
@stop