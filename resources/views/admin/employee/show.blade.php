@extends('layouts.admin.master')
@section('title','employee-show')
@section('content')


<div class="row">
    <div class="col-6 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('employee.index')}}" class="btn btn-primary btn-circle"><i class="far fa-arrow-left">back</i></a>
                </div>   
            </div>
        </div>


    <div class="card-body">
        <table class="table">
            <tbody>
                <tr>
                    <td>User {{$employee->id}}</td>
                </tr>

                <tr>
                    <td>Email -{{$employee->email}}</td>
                </tr>
            
            </tbody>
         </table>
    </div>
</div>
</div>




@endsection