@extends('layouts.admin.master')
@section('title','payment-edit')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Payment edit</h4>
                </div>
             
            </div>
            <div class="card-body">
                {!! Form::open()->fill($payment)->route('job.update',[$job->id])->method('patch') !!}
                @include('admin.payment._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('payment.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                        <a href="{{ route('payment.delete',[$payment->id]) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Delete</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>












@endsection