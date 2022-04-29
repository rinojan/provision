@extends('layouts.admin.master')
@section('title','admin-dashboard')
@section('content')
<div class="row">

 <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number of users</p>
                      <p class="fs-30 mb-2">{{App\Models\User::count() }}</p>
                      <a href="#" class="btn btn-primary stretched-link">Reports</a>
                    </div>
                  </div>
                </div>
                                
<div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Numbers of employees</p>
                      <p class="fs-30 mb-2">{{App\Models\Employee::count() }}</p>
                      <a href="#" class="btn btn-primary stretched-link">Reports</a>
                    </div>
                </div>

</div>




<div class="col-md-4 mb-4 stretch-card transparent">
<div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Numbers of customers</p>
                      <p class="fs-30 mb-2">{{App\Models\Customer::count() }}</p>
                      <a href="#" class="btn btn-primary stretched-link">Reports</a>
                    </div>
                  </div>
                </div>
</div>




<div class="row">

<div class="col-md-4 mb-4 stretch-card transparent">
<div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Numbers of Jobcategories</p>
                      <p class="fs-30 mb-2">{{App\Models\Jobcategory::count() }}</p>
                      <a href="#" class="btn btn-primary stretched-link">Reports</a>
                    </div>
                  </div>
                </div>

             

<div class="col-md-4 mb-4 stretch-card transparent">
<div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Numbers of jobs</p>
                      <p class="fs-30 mb-2">{{App\Models\Job::count() }}</p>
                               
                      <a href="#" class="btn btn-primary">Reports</a>
                    </div>
                  </div>
                </div>




</div>
@endsection
