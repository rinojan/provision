@extends('layouts.admin.master')
@section('title','jobcategory-show')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('jobcategory.index')}}" class="btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold-circle">back</i></a>
                </div>
               
            </div>
          

    <div class="card-body">
    <table class="table table-hover">
            <tbody>
                <tr><td>Jobcategory id-    {{$jobcategory->id}}</td></tr>
                <tr><td>Jobcategory Name - {{$jobcategory->name}}</td></tr>
            </tbody>
        </table>
        </div>
    </div>
</div>
</div>


         






@endsection