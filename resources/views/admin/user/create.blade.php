@extends('layouts.admin.master')
@section('title','user-crate')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2> Create Admin</h2>
                </div>
            </div>
            <div class="card-body">
            @if(session('error'))
            <div class="alert alert-warning">
                {{session('error')}}
            </div>
            @endif

            {!! Form::open()->route('user.store')->method('post') !!}
            @include('admin.user._form')

                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="mdi mdi-floppy"></i> Create</button>
                        <a href="{{ route ('user.index') }}" class="btn btn-dark btn-md"> <i class="mdi mdi-cancel"> </i>Cancel</a>
                    </div>  
                    </div>
                </div>

            {!! Form::close() !!}
            
            </div>
        </div>
    </div>
</div>


@endsection