@extends('layouts.admin.master')
@section('title','user-delete')
@section('content')


    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

   
    @if (session('error'))
    <div class="alert alert-warning">
        {{ session('error') }}
    </div>
    @endif



{!! Form::open()->route('user.destroy',[$user->id])->method('delete') !!}  <!--meaning-->
<div> 
    <h4> Are sure you want to delete?</h4>
</div>
<a href="{{ route('user.index', $user->id) }}" class="btn btn-dark btn-md"><i class="mdi mdi-cancel"></i>Cancel</a>
<button class="btn btn-secondary btn-md float-right"><i class="mdi mdi-delete"></i> Delete </button>

{!! Form::close() !!}


@endsection