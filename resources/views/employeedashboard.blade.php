@extends('layouts.admin.master')
@section('title','employee-dashboard')
@section('content')

@if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

<div class="col-12 col-xl-8 mb-4 mb-xl-0">
                 
                  <h3 class="font-weight-bold">Welcome {{Auth::user()->employee->firstname." ".Auth::user()->employee->lastname}}</h3>
                  <h6 class="font-weight-bold"> Logged in as: {{Auth::user()->email}} </h6> 
                </div>
                <hr/>
                <div class="card-body">
  
<div class="row">



<div class="col-md-4 mb-4 stretch-card transparent">
          <div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of Pending Orders</p>
                      <p class="fs-30 mb-2">{{$orders->where('status','pending')->count()}}</p>
                   
                    </div>
                  </div>
                </div>

      <div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Completed Orders</p>
                      <p class="fs-30 mb-2">{{$orders->where('status','completed')->count()}}</p>
                    </div>
                </div>


</div>

@endsection