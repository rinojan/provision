@extends('layouts.admin.master')
@section('title','customer-Index')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-info">
            <div class="card-header rounded border-primary">
                
            <div class="float-left">
                <h2> Customer Details </h2>
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
            <th>User Id </th>
            <th>Role</th>
            <th>Actions </th>
         
        </tr>

    </thead>
    <tbody>
            @foreach ($customers as $customer) 

        <tr>

            <td> {{ $customer->id }}</td>
            <td> {{ $customer->role->name }}</td>
            <td>
            <a href="{{ route('customer.show',$customer->customer_id) }}" class="btn btn-outline-secondary"><span class="icon text-dark-50"><i class="mdi mdi-receipt"></i></span><span class="text">Show</i></a>
            <a href="{{ route('customer.edit',$customer->customer_id) }}" class="btn btn-outline-warning"><span class="icon text-dark-50"><i class="mdi mdi-tooltip-edit"></i></span><span class="text">Edit</i></a>
            <a href="{{ route('customer.delete',$customer->customer_id) }}" class="btn btn-outline-danger"><span class="icon text-dark-50"><i class="mdi mdi-delete-forever"></i></span><span class="text">Delete</i></a> </td>         
            </td>
        </tr>

        @endforeach
    </tbody>
    
</table>
</div>

@endsection