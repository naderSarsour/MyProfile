@extends('admin.master')
@section('content')

<!-- Page Heading -->
<div class="d-flex justify-content-between align-items-center mb-4">
    <h1 class="h3 mb-3 text-gray-800">language</h1>
<a class="btn btn-outline-success" href="{{route('admin.language.create')}}">Add New language</a>
</div>
@include('admin.language.message')
    

<table class="table">
<tr class="table-primary">
    <th>ID</th>
    <th>language name</th>
    <th>language level</th>
    <th>Action</th>
</tr>
@foreach ($language as $language)
<tr>
    <td>{{$language->id}}</td>
    <td>{{$language->language_name}}</td>
    <td>{{$language->language_level}}</td>
  
    <td>
        <a href="{{ route('admin.language.edit',$language->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
        <form class="d-inline" action="{{route('admin.language.destroy',$language->id)}}" method="POST">
            @csrf
            @method('delete')
            <button onclick="return confirm ('Are You Sure ?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
            </form>
    </td>
    

</tr>  
@endforeach

</table>
@stop