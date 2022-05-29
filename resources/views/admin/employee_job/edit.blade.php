@extends('layouts.admin.master')
@section('title','employee-job-edit')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit - {{ $employee->firstname. ' ' .$employee->lastname}}</h4>  <!-- $employee user details than varuthu-->
                </div>
            </div>
            @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

   
    @if (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
    @endif


            <div class="card-body">
                {!! Form::open()->fill($employee,$job)->route('employee.job.update',[$employee->id,$job->id,$type])->method('patch') !!} <!-- employee relation -->
                @include('admin.employee_job._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('employee.job.index',$employee->id) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>

                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection