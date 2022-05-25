@extends('layouts.admin.master')
@section('title','Report index')
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <h6 class="float-left ml-2">Monthly Job Report</br>
                </h6>
            </div>
            <div class="card-body">
                <form method="get">
                <select name="job_title" class="btn btn-outline-info ml-2">
                        @foreach($job_titles as $job_title)
                            <option value="{{ $job_title->title}}" {{ request()->input('job_title->title') == $job_title->title ? 'selected' : '' }}> {{ $job_title->title}}</option>
                        @endforeach
                    </select>
                    
                    <input class="btn btn-success ml-2" type="submit" name="action" value="Generate">
                    <input class="btn btn-secondary ml-2" type="submit" name="action" value="Export">
                </form>
            <table class="table table-striped">
                    <tr>
                        <th>Job Title</th>
                        <th>Total Number of Jobs</th>
                        <th>Completed Jobs</th>
                        <th>Pending Jobs</th>
             
                    <tr>
                   
                
                    </tr>
                    </tr>
               
            </table>
            <div class="pt-2">
            </div>
        </div>
    </div>
</div>
</div>
@endsection