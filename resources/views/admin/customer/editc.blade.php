@extends('layouts.customer.master')
@section('title','customer-editc')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit- {{ $customer->firstname. ' '.$customer->lastname}}</h4>
                </div>
             
            </div>
            <div class="card-body">
                {!! Form::open()->fill($customer)->route('customer.update',[$customer->id])->method('patch') !!} <!--customer relatonship -->
                @include('admin.customer._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('dashboard') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection