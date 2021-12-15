@extends('layouts.admin.master')
@section('title','employee-index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> Employee Details </h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary btn-icon-spilt" href="{{ route('employee.create') }}"> </i> Create Employee </a> 
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
            <th>Employee  Id </th>
            <th>Role Name    </th>
            <th>Role Id   </th>
            <th>Actions </th>
         
        </tr>

    </thead>
    <tbody>
            @foreach ($employees as $employee) 

        <tr>
            <td> {{ $employee->id }}</td>
            <td> {{ $employee->role->name }}</td>  <!-- user etails than employee name  varuthu-->
            <td> {{ $employee->role->id }}</td>

            <td>
                <a href="{{ route('employee.show',$employee->employee_id) }}" class="btn btn-info btn-rounded"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Show</i></a>
                <a href="{{ route('employee.edit',$employee->employee_id) }}" class="btn btn-warning btn-rounded"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Edit</i></a>
                <a href="{{ route('employee.delete',$employee->employee_id) }}" class="btn btn-danger btn-rounded"><span class="icon text-white-50"><i class="fas fa-trash"></i></span><span class="text">Delete</i></a>
            </td>
        </tr>

        @endforeach
        
    </tbody>
    
</table>
</div>

 
@endsection