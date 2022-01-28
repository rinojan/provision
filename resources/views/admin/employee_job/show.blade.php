@extends('layouts.admin.master')
@section('title','employee-job-show')
@section('content')


<div class="row">
    <div class="col-12 text-dark">
        <div class="card shadow p-3 mb-6 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('employee.job.index',$employee->id)}}" class="btn btn-primary btn-circle"><i class="far fa-arrow-left">back</i></a>
                </div>  
            </div>  
        </div>

    <div class="card-body">
        <table class="table">
            <tbody>
                <tr> <td>  {{$employee->jobs}} </td> </tr>
                <tr> <td></td> </tr>
                <tr> <td>  </td> </tr>
         
            

        </tbody>
        </table>
    </div>
    </div>
</div>




@endsection