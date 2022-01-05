@extends('layouts.admin.master')
@section('title','employee-edit')
@section('content')

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h4 class="card-title">Edit - {{ $employee->firstname. ' ' .$employee->lastname}}</h4>  <!-- $employee user details than varuthu-->
                </div>
            </div>

            <div class="card-body">
                {!! Form::open()->fill($employee)->route('employee.update',[$employee->id])->method('patch') !!} <!-- employee relation -->
                @include('admin.employee._form')
                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                        <button class="btn btn-success btn-md "><i class="fa fa-cloud-upload"></i> Update </button>
                        <a href="{{ route('employee.index') }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>

                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>

@endsection