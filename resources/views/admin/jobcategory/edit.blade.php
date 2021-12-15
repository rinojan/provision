@extends('layouts.admin.master')
@section('title','JobCategory-Edit')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit- {{ $jobcategory->name}}</h4>
                </div>
             
            </div>
            <div class="card-body">
                {!! Form::open()->fill($jobcategory)->route('jobcategory.update',[$jobcategory->id])->method('patch') !!}
                @include('admin.jobcategory._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('jobcategory.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                        <a href="{{ route('jobcategory.delete',[$jobcategory->id]) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Delete</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>


@endsection