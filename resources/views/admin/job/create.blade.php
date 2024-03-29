@extends('layouts.admin.master')
@section('title','job-create')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2> Create Job </h2>
                </div>
            </div>
            <div class="card-body">
            @if(session('success'))
            <div class="alert alert-warning">
                {{session('success')}}
            </div>
            @endif

            {!! Form::open()->route('job.store')->method('post') !!}
            @include('admin.job._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="mdi mdi-floppy"></i> Create</button>
                        <a href="{{ route ('job.index') }}" class="btn btn-dark btn-md"> <i class="mdi mdi-cancel"> </i>Cancel</a>
                       
                        </div>
                    </div>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>

@endsection