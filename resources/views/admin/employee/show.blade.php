@extends('layouts.admin.master')
@section('title','employee-show')
@section('content')


<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-6 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('employee.index')}}" class="btn btn-primary btn-circle"><i class="far fa-arrow-left">back</i></a>
                </div>  
            </div>  
        </div>

    <div class="card-body">
        <table class="table">
            <tbody>
                <tr> <td> id    :       {{$employee->id}}          </td> </tr>
                <tr> <td> Role    :     {{$employee->Role->name}}  </td> </tr>
                <tr> <td> Email :       {{$employee->user->email}} </td> </tr>
                <tr> <td> Firstname :   {{$employee->firstname}}   </td> </tr>
                <tr> <td> Lastname  :   {{$employee->lastname}}    </td> </tr>
                <tr> <td> Mobileno  :   {{$employee->mobileno}}    </td> </tr>
                <tr> <td> Address   :   {{$employee->address }}    </td> </tr>
                <tr> <td> Nic   :       {{$employee->nic}}         </td> </tr>
                <tr> <td> Gender :      {{$employee->gender}}      </td> </tr>
                <tr> <td> 

        </tbody>
        </table>
    </div>
    </div>
</div>




@endsection