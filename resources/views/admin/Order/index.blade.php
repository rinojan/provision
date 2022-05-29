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
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<table class="table table-striped">
    <thead class="table-dark">
        <tr>
            <th>Charter id</th>
           
            <th>Charter Description </th>
            <td> Ratings</td>
            <th> Job Status</th>      
            <th>Action </th>
         
           
        </tr>

    </thead>
    <tbody>
          
  

          @foreach($orders as $order)
      

        <tr>
            <td>    {{$order->id}}</td>
            <td>  
                <li> <b> Job Date :</b> {{$order->jobdate}}  </li>
                <li> <b> Job  :</b> {{$order->job->title}}  </li>
                <li>  <b>Customer Name :</b> {{$order->customer->firstname}} </li>
                <li>  <b>Employee Name : </b>{{$order->employee->firstname}} </li>
                <li>  <b>Message : </b> {{$order->description}} </li>
                                   
        
            </td>
        

            <td>
            @if($order->ratings == null )                
                        <span class="badge badge-pill badge-info"> Not Yet Rated </span>
                        
            @else
                <span class="badge badge-pill badge-secondary">  {{$order->ratings}}</span>              
            @endif
            </td>       
        
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

   
            <td>   <!-- Button trigger modal -->
                <button type="button" class="btn btn-secondary btn-rounded" data-toggle="modal" data-target="#example-{{$order->id}}">
                <span class="icon text-dark-50"><i class="mdi mdi-pencil-circle"></i></span><span class="text">Status</i>
                </button>
                <!-- Modal -->
                <div class="modal fade" id="example-{{$order->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">Status</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    
                    {!! Form::open()->route('order.storeStatus',[$order->id])->method('post') !!}
                    <div class="modal-body">
                    <div class="form-group">
                   
                    {!! Form::Select('q', 'Your Status')->options([''=>'----choose your status----','pending'=>'Pending','cancelled'=>'Cancelled','completed'=>'Completed','approved'=>'Approved'])->required() !!}

                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button"  class="btn btn-dark" data-dismiss="modal">Close</button>
                        <button value="submit" class="btn btn-success">Update</button>
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
@endsection
