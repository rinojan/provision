@extends('layouts.admin.master')
@section('title','employee-job-index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> {{$employee->firstname}} </h2>
            </div>

            <div class="float-right">
                <a class="btn btn-primary btn-icon-spilt" href="{{ route('employee.job.create',$employee->id) }}"> </i> Employee Job </a> 
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
                <th>job id </th>
                <th>job name    </th>
                <th>Actions </th>
                <th> </th>
            </tr>
        </thead>

        <tbody>
                @foreach($employee->jobs as $job)
            <tr>
                <td>{{$job->id}} </td>
                <td>{{$job->title}}</td>  <!-- user etails than employee name  varuthu-->
                <td>{{$job->pivot->salary}}</td>
                <td>
                    <a href="{{ route('employee.job.show',$employee->id) }}" class="btn btn-outline-secondary""><span class="icon-text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
                    <a href="{{ route('employee.job.edit',$employee->id) }}" class="btn btn-outline-warning"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
                    <a href="{{ route('employee.job.delete',$employee->id) }}" class="btn btn-outline-danger"><span class="icon text-dark-50"><i class="mdi mdi-delete-forever"></i></span><span class="text">Delete</i></a> </td>
            </tr>
                @endforeach
        

        </tbody>
    </table>
</div>

 
@endsection