@extends('layouts.customer.master')
@section('title','customer_charter_index')
@section('content')

<div class="row">
    <div class="col-6 text-dark">
        <div class="card shadow p-3 mb-5 bg-white rounded border-primary">
            <div class="card-header rounded border-primary">
                <div class="float-left">
                <a href="{{route('customer.index')}}" class="btn btn-primary btn-circle"><i class="far fa-arrow-left">back</i></a>
                </div>   
            </div>
        </div>

    <div class="card-body">
        <table class="table">
            <tbody>
                <tr> <td> Customer id:  {{$customer->id}}          </td> </tr>
                <tr> <td> Email :       {{$customer->user->email}} </td> </tr>
        
            </tbody>
         </table>
    </div>
    </div>
</div>
@endsection