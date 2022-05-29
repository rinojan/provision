@extends('layouts.admin.master')
@section('title','employee-job-show')
@section('content')


<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-6 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <h2> <a href="{{route('employee.job.index',$employee->id)}}" class="btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold-circle"></i></a>{{$employee->firstname}} </h2>

                </div>  
            </div>  
        </div>

    <div class="card-body">

    <table class="table table-hover">
        <thead class="table-dark">

        <tr>    
                <th> Job id</th>
                <th> Job </th>
                <th> Working_type </th>
                <th> Working_duration </th>               
                <th> Salary </th>

        </tr>
        </thead>
        @foreach($employee->jobs as $job)
        <tr>
      
            <td> {{$job->id}}</td>
            <td> {{$job->title}}</td>
            <td> {{$job->pivot->type}}</td>
            <td> {{$job->pivot->working_duration}}</td>
            <td> {{$job->pivot->salary}}</td>
          
        </tr>

        @endforeach
         
        </tbody>
        </table>
    </div>
    </div>
</div>




@endsection