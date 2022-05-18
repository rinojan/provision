@extends('layouts.admin.master')
@section('title','employee-delete')
@section('content')



<div class="card-body">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
     @endif
    
 <div class="card-body">
     @if (session('success'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
    @endif

{!! Form::open()->route('employee.destroy',[$employee->id])->method('delete') !!}  <!--meaning-->
<div> 
    <h4> Are sure you want to delete?</h4>
</div>
<a href="{{ route('employee.edit', $employee->id) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
<button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>

{!! Form::close() !!}

@endsection