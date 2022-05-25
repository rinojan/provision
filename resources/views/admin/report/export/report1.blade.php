@extends('layouts.admin.master')
@section('title','Report index')
@section('content')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body style="border: 2px solid black; padding: 10px">
<div style="text-align: center">
    <h1 style="font-family: bamini">Name : Mobie@net Computer Services</h1> 
    <h4 style="text-align: left">Year : {{ date("F", strtotime($month)).' '. $year }}</h4>
    <h4 style="text-align: left">Monthly Report</h4>
    <hr style="margin-top: 10px; height: 1px; color: black; background-color: black">
</div>
<table style="width: 100%; border: 0.5px solid gray; border-collapse: collapse">
    <tr>
        <th style="padding:10px 10px 20px 10px; border: 0.5px solid gray">Job Title</th>
        <th style="padding:10px 10px 20px 10px; border: 0.5px solid gray">Total Number of Jobs</th>
        <th style="padding:10px 10px 20px 10px; border: 0.5px solid gray">Completed Jobs</th>
        <th style="padding:10px 10px 20px 10px; border: 0.5px solid gray">Pending jobs</th>
    </tr>
    @foreach($data as $data1)
        <tr>
            <td style="padding:10px 10px 20px 10px; border: 0.5px solid gray">{{ $data1['job_title'] }}</td>
         
        </tr>
    @endforeach
</table>
</body>
</html>



@endsection
