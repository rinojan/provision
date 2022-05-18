@extends('layouts.admin.master')
@section('title','Order-index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> Order Details </h2>
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
            <th>Charter id</th>
            <th>Description </th>
            <th>Job Date </th>
            <th>Type </th>
            <th>Work Duration</th>
            <th>Amount </th>
        
        </tr>

    </thead>
    <tbody>
          @foreach($orders as $order)
      

        <tr>
            <td>    {{$order->id}}</td>
            <td>    {{$order->description}}</td>
            <td>    {{$order->jobdate}}</td>
            <td>    </td>
            <td>    </td>
            <td>    </td>
           
        @endforeach
   
         
        </tr>

    </tbody>
    
</table>
</div>

 
@endsection
