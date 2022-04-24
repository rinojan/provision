@extends('layouts.customer.master')
@section('title','charter-edit')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit- {{ $charter->firstname}} </h4>
                </div>
             
            </div>
            <div class="card-body">
                {!! Form::open()->fill($user)->route('charter.update',[$charter->id])->method('patch') !!}
                @include('admin.charter._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('charter.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                        <a href="{{ route('charter.delete',[$charter->id]) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Delete</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>




@endsection