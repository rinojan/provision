@extends('layouts.customer.master')
@section('title','customer_charter_index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary"> 
            <div class="float-left">
                <h2> Hire Details </h2>
            </div>
            <div class="float-right">
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
            <th> job id </th>
            <th> job name</th>
            <th> Actions </th>
        </tr>

    </thead>
    </thead>
    <tbody>
                @foreach($jobs as $job)
        <tr>
            <td> {{$job->id}}</td>
            <td> {{$job->title}}</td>
            <td>
            <a href="{{ route('charter.show',$job->id) }}" class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
            <a href="{{ route('charter.show',$job->id) }}" class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Apply</i></a>
            </td>
        </tr>

                @endforeach
    </tbody>
</table>
</div>
@endsection




