@extends('layouts.admin.master')
@section('title','job-edit')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit Job {{ $job->name}}</h4>
                </div>
             
            </div>
            <div class="card-body">
                {!! Form::open()->fill($job)->route('job.update',[$job->id])->method('patch') !!}
                @include('admin.job._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('job.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                        <a href="{{ route('job.delete',[$job->id]) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Delete</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>












@endsection