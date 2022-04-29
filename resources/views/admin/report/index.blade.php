@extends('layouts.admin.master')
@section('title','report List')
@section('content')
<div class="row">
    
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                    <h2>Reports</h2>
                </div>
            </div>

            <div class="card-body">
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
                @endif
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>Id</th>
                            <th>Role</th>
                            <th>Comments</th>
                        </tr>
                    </thead>
                    <tbody>
                 
                        <tr>
                           
                            <td>
                            </td>
                        </tr>
                  
                    </tbody>
                </table>
                <div class="pt-2">
                    <div class="float-right">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection