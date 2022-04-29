@extends('layouts.admin.master')
@section('title','payment-index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> Payment Details </h2>
            </div>

            <div class="float-right">
            <a class="btn btn-success btn-rounded"href="{{ route('payment.create') }}"><span class="icon text-dark-50"><i class="mdi mdi-plus-box"></i></span><span class="text">Payment</i></a>
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
            <th>Payment Id</th>
            <th>Charter id</th>
            <th>Payment Mode</th>
            <th>Actions</th>
        
        </tr>

    </thead>
    <tbody>
          

        <tr>
            <td> hi</td>
            <td> </td>
            <td> </td>

            <td>

            </td>
        </tr>

   
    </tbody>
    
</table>
</div>

 
@endsection
