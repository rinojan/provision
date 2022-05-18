@extends('layouts.admin.master')
@section('title','jobcategory-create')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2> Create Job Category</h2>
                </div>
            </div>
            <div class="card-body">
            @if(session('error'))
            <div class="alert alert-success">
                {{session('error')}}
            </div>
            @endif

            {!! Form::open()->route('jobcategory.store')->method('post') !!}

            @include('admin.jobcategory._form')

                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="mdi mdi-floppy"></i> Create</button>
                        <a href="{{ route ('jobcategory.index') }}" class="btn btn-dark btn-md"> <i class="mdi mdi-cancel"> </i>Cancel</a>
                       
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
</div>
@endsection