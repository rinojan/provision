@extends('layouts.admin.master')
@section('title','admin-dashboard')
@section('content')



<div class="col-12 col-xl-8 mb-4 mb-xl-0">
                  <h3 class="font-weight-bold">Welcome {{Auth::user()->role->name}}</h3>
                  <h6 class="font-weight-bold"> Logged in as: {{Auth::user()->email}} </h6>
                </div>
                <hr/>
<div class="row">

 <div class="col-md-4 mb-4 stretch-card transparent">
                <div class="card card-tale">
                    <div class="card-body">
                      <p class="mb-4">Number of users</p>
                      <p class="fs-30 mb-2">{{App\Models\User::count() }}</p>
                    </div>
                  </div>
                </div>
                                
<div class="col-md-4 mb-4 stretch-card transparent">
                  <div class="card card-dark-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of employees</p>
                      <p class="fs-30 mb-2">{{App\Models\Employee::count() }}</p>
                    </div>
                </div>

</div>




<div class="col-md-4 mb-4 stretch-card transparent">
<div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Number of customers</p>
                      <p class="fs-30 mb-2">{{App\Models\Customer::count() }}</p>
                    </div>
                  </div>
                </div>
</div>




<div class="row">

<div class="col-md-4 mb-4 stretch-card transparent">
<div class="card card-light-blue">
                    <div class="card-body">
                      <p class="mb-4">Number of Jobcategories</p>
                      <p class="fs-30 mb-2">{{App\Models\Jobcategory::count() }}</p>
                    </div>
                  </div>
                </div>

             

<div class="col-md-4 mb-4 stretch-card transparent">
<div class="card card-light-danger">
                    <div class="card-body">
                      <p class="mb-4">Numbers of jobs</p>
                      <p class="fs-30 mb-2">{{App\Models\Job::count() }}</p>
                               
                    </div>
                  </div>
                </div>
 <div class="col-md-4 mb-4 stretch-card transparent">
 <div class="card card-tale">
    <div class="card-body">
            <p class="mb-4">Number of orders</p>
            <p class="fs-30 mb-2">{{App\Models\Charter::count() }}</p>
            </div>
          </div>
      </div>


</div>
@endsection
