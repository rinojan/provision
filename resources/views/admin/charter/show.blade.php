@extends('layouts.customer.master')
@section('title','charter_index')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2>Profile</h2>
                </div>
            </div>
            <div class="card-body">
            <table class="table">
            <tbody>
                <tr> <td> charter id:  {{$charter->id}}          </td> </tr>
                <tr> <td> Job : {{$chart->title}}          </td> </tr>
                <tr> <td> Job  {{$chart}}          </td> </tr>

  
        
            </tbody>
         </table>
            
            </div>
        </div>
    </div>
</div>


@endsection