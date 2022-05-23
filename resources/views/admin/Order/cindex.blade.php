@extends('layouts.customer.master')
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
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<table class="table table-striped">
    <thead class="thead-dark">
        <tr>
            <th>Jobs List </th>
            <th>Job Date </th>
            <th>Actions</th>
        </tr>
    </thead>

    <tbody>
          @foreach($orders as $order)
        <tr>
            <td>{{$order->id}}</td>
            <td>{{$order->jobdate}}</td>
       
            <td>   <!-- Button trigger modal -->
                <button type="button" class="btn btn-warning btn-rounded" data-toggle="modal" data-target="#example-{{$order->id}}">
                <span class="icon text-dark-50"><i class="mdi mdi-pencil-circle"></i></span><span class="text">Ratings</i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="example-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Rating and Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    {!! Form::open()->route('order.store',[$order->id])->method('post') !!}
                    <div class="modal-body">
                    <div class="form-group">
                    {!! Form::text('q', 'Your ratings',request()->input('q'))->required() !!}
                    
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button value="submit" class="btn btn-primary">Submit</button>
                    </div>
                    {!! Form::close() !!}
                    </div>
                </div>
                </div>
            </td>
       @endforeach
        </tr>
    </tbody>
</table>
</div>

@endsection
