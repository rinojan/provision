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
            <a class="btn btn-success btn-rounded"href="{{ route('employee.job.create',$employee->id) }}"><span class="icon text-dark-50"><i class="mdi mdi-plus-box"></i></span><span class="text">Employee Job</i></a>
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
                <th>job</th>
                <th> Work Duration</th>
                <th> Salary</th>
                <th>Actions </th>
               
            </tr>
        </thead>

        <tbody>
                @foreach($employee->jobs as $job)
            <tr>
                <td>{{$job->pivot->job_id}} </td>
                <td>{{$job->title}}</td>  <!-- user etails than employee name  varuthu-->
                <td>{{$job->pivot->type}}</td>
                <td>{{$job->pivot->salary}}</td>
                <td>
                    <a href="{{ route('employee.job.show',[$employee->id,$job->pivot->job_id]) }}" class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
                    @if($job->pivot->type=="hours")
                    <a href="{{ route('employee.job.edith',[$employee->id,$job->pivot->job_id]) }}" class="btn btn-warning btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
                    @else
                    <a href="{{ route('employee.job.editd',[$employee->id,$job->pivot->job_id]) }}" class="btn btn-warning btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
                    @endif
                    <a href="{{ route('employee.job.delete',[$employee->id,$job->pivot->job_id,$job->pivot->type]) }}" class="btn btn-danger btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-delete-forever"></i></span><span class="text">Delete</i></a> </td>  
            </tr>
                @endforeach
        

        </tbody>
    </table>
</div>

 
@endsection