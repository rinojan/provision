@extends('layouts.admin.master')
@section('title','Order-eindex')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">                
            <div class="float-left">
                <h2>My Order Details </h2>
            </div>
            <div class="float-right">
            </div>
            </div>

<div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Charter id</th>
            <th>Job Date </th>
            <th>Description </th>
            <th> Job Status</th> 
            <td> Ratings</td>                
        </tr>

    </thead>
    <tbody>         
            @foreach($orders as $order)    

        <tr>
            <td>    {{$order->id}}</td>
            <td>    {{$order->jobdate}}</td>
            <td>    {{$order->description}}</td>
           
            <td>
            @if("$order->status"=="completed")                
                <span class="badge badge-pill badge-success">Completed</span>
            @elseif( "$order->status"=="pending")                
                <span class="badge badge-pill badge-warning">Pending</span>
            @elseif( "$order->status"=="approved")                
                <span class="badge badge-pill badge-success">Approved</span>            
            @else
                <span class="badge badge-pill badge-danger">Cancelled</span>  
            @endif
            </td>     

            <td>
            @if($order->ratings == null )                
                        <span class="badge badge-pill badge-info"> Not Yet Rated </span>          
            @else
                <span class="badge badge-pill badge-secondary">  {{$order->ratings}}</span>              
            @endif
            </td> 

        @endforeach  
         
        </tr>
    </tbody>    
</table>
 
@endsection
