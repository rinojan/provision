@extends('layouts.customer.master')
@section('title','customer_charter_index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary"> 
            <div class="float-left">
                <h2>Employee: {{$charter->firstname}} </h2>
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
    <thead class="thead-dark">
        <tr>
            <th> job category</th>
            <th> job name</th>
            <th> salary</th>
            <th> type</th>
            <th> working_duration </th>
            <th> Actions</th>
        </tr>

    </thead>
    <tbody >
            @foreach ($charter->jobs as $chart) 
        <tr>
            <td> {{$chart->jobcategory->name}}</td>
            <td> {{$chart->title}}</td>
            <td> {{$chart->pivot->salary}} </td>
            <td> {{$chart->pivot->type}} </td>
            <td> {{$chart->pivot->working_duration}} </td>

            <td> <a href="{{ route('charter.create',[$charter->id,$chart->id]) }}" class="btn btn-success btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-shape-square-plus"></i></span><span class="text"> Apply</i></a>
            <a href="{{ route('dashboard',[$charter->id,$chart->id]) }}" class="btn btn-dark btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-shape-square-plus"></i></span><span class="text"> Cancel</i></a>
            </td>

        </tr>
           
       @endforeach
              
    </tbody>
</table>
</div>
@endsection




