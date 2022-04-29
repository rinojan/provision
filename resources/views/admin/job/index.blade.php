@extends('layouts.admin.master')
@section('title','job-index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> Job </h2>
            </div>

            <div class="float-right">
            <a class="btn btn-success btn-rounded"href="{{ route('job.create') }}"><span class="icon text-dark-50"><i class="mdi mdi-plus-box"></i></span><span class="text">Job</i></a>
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
            <th>Job Id</th>
            <th>Job Title</th>
            <th>Job Category Name</th>
            <th>Actions</th>
        
        </tr>

    </thead>
    <tbody>
            @foreach ($jobs as $job) 

        <tr>
            <td> {{ $job->id }}</td>
            <td> {{ $job->title }}</td>
            <td> {{ $job->jobcategory->name }}</td>

            <td>
            <a href="{{ route('job.show',$job->id) }}" class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
            <a href="{{ route('job.edit',$job->id) }}" class="btn btn-warning btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
            <a href="{{ route('job.delete',$job->id) }}" class="btn btn-danger btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-delete-forever"></i></span><span class="text">Delete</i></a>
            </td>
        </tr>

        @endforeach
    </tbody>
    
</table>
</div>

 
@endsection
