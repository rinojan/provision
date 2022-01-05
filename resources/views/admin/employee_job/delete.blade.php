@extends('layouts.admin.master')
@section('title','employee-job-delete')
@section('content')




{!! Form::open()->route('employee.job.destroy',[$employee->id])->method('delete') !!}  <!--meaning-->
<div> 
    <h4> Are sure you want to delete?</h4>
</div>
<a href="{{ route('employee.job.edit', $employee->id) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
<button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>

{!! Form::close() !!}

@endsection