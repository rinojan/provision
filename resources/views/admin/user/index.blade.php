@extends('layouts.admin.master')
@section('title','user-index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> Admin Details </h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary btn-icon-spilt" href="{{ route('user.create') }}"> </i> Create Admin </a> 
            </div>
            </div>

<div class="card-body">
    @if (session('success'))
    <div class="alert alert-warning">
        {{ session('success') }}
    </div>
    @endif

<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>User Id </th>
            <th>Role Name    </th>
            <th>Role Id   </th>
            <th>Actions </th>
         
        </tr>

    </thead>
    <tbody>
            @foreach ($users as $user) 

        <tr>
            <td> {{ $user->id }}</td>
            <td> {{ $user->role->name }}</td>
            <td> {{ $user->role->id }}</td>

            <td>
                <a href="{{ route('user.show',$user->id) }}" class="btn btn-info btn-rounded"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Show</i></a>
                <a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning btn-rounded"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Edit</i></a>
                <a href="{{ route('user.delete',$user->id) }}" class="btn btn-danger btn-rounded"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Delete</i></a>
            </td>
        </tr>

        @endforeach
        
    </tbody>
    
</table>
</div>

 
@endsection