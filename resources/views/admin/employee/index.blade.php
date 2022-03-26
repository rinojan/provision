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
                <a class="btn btn-success btn-rounded" href="{{ route('employee.create') }}"><span class="icon text-dark-50"><i class="mdi mdi-plus-box"></i></span><span class="text">Employee</i></a>
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
                <th> Name </th>
                <th>user id </th>
                <th>Actions </th>
                <th>Job</th>
            </tr>

        </thead>

        <tbody>
                @foreach ($employees as $employee) 
            <tr>
                <td> {{ $employee->employee_id}}</td> <!--user model la employee controler index blade -->
                <td> {{ $employee->employee->firstname }}</td>  <!-- user etails than employee name  varuthu-->
                <td> {{ $employee->id}}
                <td>
                    <a href="{{ route('employee.show',$employee->employee_id) }}"class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
                    <a href="{{ route('employee.edit',$employee->employee_id) }}" class="btn btn-warning btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
                    <a href="{{ route('employee.delete',$employee->employee_id) }}" class="btn btn-danger btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-delete-forever"></i></span><span class="text">Delete</i></a> </td>
                <td>
                    <a href="{{ route('employee.job.index',$employee->employee_id) }}" class="btn btn-success btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-plus-box"></i></span><span class="text">Employee Job</i></a> </td>
          

                </tr>

                @endforeach

        </tbody>
    </table>
</div>

 
@endsection