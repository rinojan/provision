@extends('layouts.admin.master')
@section('title','job-show')
@section('content')



<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('job.index')}}" class="btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold-circle">back</i></a>
                </div>
                    
            </div>
        </div>
    <div class="card-body">
    <table class="table table-hover">
            <tbody>
                <tr><td>Job Id :  {{$job->id}}</td></tr>
                <tr><td>Job Title :  {{$job->title}}</td></tr>                
                <tr><td>Jobcategory Name :  {{$job->jobcategory->name}}</td></tr>
            </tbody>
            
        </table>
    </div>
</div>
</div>



          












@endsection