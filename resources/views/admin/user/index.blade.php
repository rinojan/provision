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
           <a class="btn btn-success btn-rounded"href="{{ route('user.create') }}"><span class="icon text-dark-50"><i class="mdi mdi-plus-box"></i></span><span class="text">Admin</i></a>
 
            </div>
            </div>

<div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif


<div class="card-body">
    @if (session('error'))
    <div class="alert alert-success">
        {{ session('error') }}
    </div>
    @endif

<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>User Id </th>
            <th>Role</th>
            <th>Actions </th>
         
        </tr>

    </thead>
    <tbody>
            @foreach ($users as $user) 

        <tr>
            <td> {{ $user->id }}</td>
            <td> {{ $user->role->name }}</td>
            

            <td>
                    <a href="{{ route('user.show',$user->id) }}" class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
                    <a href="{{ route('user.edit',$user->id) }}" class="btn btn-warning btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
                    <a href="{{ route('user.delete',$user->id) }}" class="btn btn-danger btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-delete-forever"></i></span><span class="text">Delete</i></a> </td>  
            </td>
        </tr>

        @endforeach
        
    </tbody>
    
</table>
</div>
</div> <!-- -->
</div>
 
@endsection