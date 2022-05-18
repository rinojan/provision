@extends('layouts.customer.master')
@section('title','customer-crate')
@section('content')


<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2> Apply job</h2>
                </div>
            </div>
            <div class="card-body">
            @if(session('error'))
            <div class="alert alert-warning">
                {{session('error')}}
            </div>
            @endif

            {!! Form::open()->route('charter.store',[$charter->id,$chart->id])->method('post') !!}
            @include('admin.charter._form')

                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="mdi mdi-shape-square-plus"></i> Apply</button>
                        <a href="{{ route ('charter.index',['charter'=>$charter->id,'chart'=>$chart->id]) }}" class="btn btn-dark btn-md"> <i class="mdi mdi-cancel"> </i>Cancel</a>
                    </div>  
                    </div>
                </div>

            {!! Form::close() !!}
            
            </div>
        </div>
    </div>
</div>


@endsection