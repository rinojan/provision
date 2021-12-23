@extends('layouts.admin.master')
@section('title','user-show')
@section('content')


<div class="row">
    <div class="col-6 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('user.index')}}" class="btn btn-primary btn-circle"><i class="far fa-arrow-left">back</i></a>
                </div>   
            </div>
        </div>


    <div class="card-body">
        <table class="table">
            <tbody>
                <tr><td> id:   {{ $user->id }}   </td></tr>
                <tr><td> Role  : {{ $user->role->name }}   </td></tr>
                <tr><td> Email : {{ $user->email }}  </td></tr>
            </tbody>
         </table>
    </div>
    </div>

    
</div>






@endsection