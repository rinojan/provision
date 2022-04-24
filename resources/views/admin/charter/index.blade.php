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
            @foreach ($charter->jobs as $chat) 
        <tr>
            <td> {{$chat->jobcategory->name}}</td>
            <td> {{$chat->title}}</td>
            <td> {{$chat->pivot->salary}} </td>
            <td> {{$chat->pivot->type}} </td>
            <td> {{$chat->pivot->working_duration}} </td>

            <td> <a href="{{ route('charter.create',$charter->id) }}" class="btn btn-info btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Apply</i></a> </td>

        </tr>
           
       @endforeach
              
    </tbody>
</table>
</div>
@endsection




