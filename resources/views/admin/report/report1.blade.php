@extends('layouts.admin.master')
@section('title','Job Monthly Report')
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
                    <select name="year" class="btn btn-outline-info ml-2">
                    @foreach($years as $year)
                            <option value="{{ $year }}" {{ request()->input('year') == $year ? 'selected' : '' }}>{{ $year }}</option>
                        @endforeach
                        </select>
                        <select name="month" class="btn btn-outline-info ml-2">
                        @foreach($months as $month)
                            <option value="{{ date("m", strtotime($month)) }}" {{ request()->input('month') == date("m", strtotime($month)) ? 'selected' : '' }}>{{ date("F", strtotime($month)) }}</option>
                        @endforeach
</select>
                    <input class="btn btn-success ml-2" type="submit" name="action" value="Generate">
                    <input class="btn btn-success ml-2" type="submit" name="action" value="Export">
                </form>
            <table class="table table-striped">
                    <tr>
                        <th>Date</th>
                        <th>Total Numbers of Jobs</th>
                        <th>Completed Jobs</th>
                        <th>Pending Jobs</th>
                        <th>Cancelled Jobs</th>
                        <th>Approved Jobs</th>
                    </tr>
                    @foreach ( $data as $data1 )
                    <tr>
                        <td>{{  $data1['date'] }} </td>
                        <td>{{  $data1['num_of_orders'] }} </td>
                        <td>{{  $data1['num_of_completed']}} </td>
                        <td>{{  $data1['num_of_pending']}} </td>
                        <td>{{  $data1['num_of_cancelled']}} </td>
                        <td>{{  $data1['num_of_approved']}} </td>
                @endforeach
            </table>
            <div class="pt-2">
            </div>
        </div>
    </div>
</div>
</div>
@endsection