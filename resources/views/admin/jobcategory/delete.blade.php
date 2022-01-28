@extends('layouts.admin.master')
@section('title','JobCategory-Delete')
@section('content')



{!! Form::open()->route('jobcategory.destroy',[$jobcategory->id])->method('delete') !!}  <!--meaning-->
<div> 
    <h4> Are sure you want to delete?</h4>
</div>
<a href="{{ route('jobcategory.edit',$jobcategory->id) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
<button class="btn btn-secondary btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>

{!! Form::close() !!}


@endsection