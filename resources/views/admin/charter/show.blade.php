@extends('layouts.customer.master')
@section('title','charter_index')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2><a href="{{ route('dashboard') }}" class="btn btn-info btn-circle"><i class="mdi mdi-chevron-left-box"></i></a> Profile</h2>

                </div>
            </div>
            <div class="card-body">
            <table class="table table-hover">
               
         
            <tbody>             
             
                <tr> <td> Name -:  {{$charter->title." "." .".$charter->firstname. " ".$charter->lastname}}          </td> </tr>
                <tr> <td>Location : {{App\Models\District::whereId($charter->district_id)->value('name')}}   </td> </tr>
                <tr> <td>Ratings : ( {{App\Models\Charter::where('employee_id',$charter->id)->avg('ratings')}} )  </td> </tr>
              
                
            </tbody>
         


         </table>
            
            </div>
        </div>
    </div>
</div>


@endsection