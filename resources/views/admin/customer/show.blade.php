@extends('layouts.admin.master')
@section('title','customer-show')
@section('content')

<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{ route('customer.index') }}" class="btn btn-primary btn-circle"><i class="mdi mdi-arrow-left-bold-circle">back</i></a>
</div>
</div>

    <div class="card-body">
    <table class="table table-hover">
            <tbody>
                <tr> <td> Customer id:  {{$customer->id}}          </td> </tr>           
                <tr> <td> Firstname :   {{$customer->firstname}}   </td> </tr>
                <tr> <td> Lastname  :   {{$customer->lastname}}    </td> </tr>         
                <tr> <td> Nic   :       {{$customer->nic}}         </td> </tr>
                <tr> <td> Email :       {{$customer->user->email}} </td> </tr>
                <tr> <td> Mobileno  :   {{$customer->mobileno}}    </td> </tr>
                <tr> <td> Address   :   {{$customer->address }}    </td> </tr>
        
            </tbody>
         </table>
    </div>
    </div>
</div>

@endsection