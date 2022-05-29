@extends('layouts.admin.master')
@section('title','job-delete')
@section('content')




{!! Form::open()->route('job.destroy',[$job->id])->method('delete') !!}  <!--meaning-->
<div> 
    <h4> Are sure you want to delete?</h4>
</div>
<a href="{{ route('job.index', $job->id) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
<button class="btn btn-danger btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>

{!! Form::close() !!}











@endsection