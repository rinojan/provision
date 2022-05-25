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
            @foreach($charters as $charter)
            <tbody>
               
         
              
                <tr> <td> {{$charter->charters}}          </td> </tr>

            </tbody>
            @endforeach
         </table>
            
            </div>
        </div>
    </div>
</div>


@endsection