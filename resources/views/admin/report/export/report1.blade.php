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
    <h1 style="font-family: bamini">Name : Mobile@net Computer Services</h1> 
    <h4 style="text-align: left">Year : {{ date("F", strtotime($month)).' '. $year }}</h4>
    <h4 style="text-align: left">Monthly Report</h4>
    <hr style="margin-top: 10px; height: 1px; color: black; background-color: black">
</div>
<table style="width: 100%; border: 0.5px solid gray; border-collapse: collapse">
    <tr>
        <th style="padding:10px 5px 20px 10px; border: 0.5px solid gray">Date</th>
        <th style="padding:10px 5px 20px 10px; border: 0.5px solid gray">Orders</th>
        <th style="padding:10px 5px 20px 10px; border: 0.5px solid gray">Completed</th>
        <th style="padding:10px 5px 20px 10px; border: 0.5px solid gray">Pending</th>
        <th style="padding:10px 5px 20px 10px; border: 0.5px solid gray">Cancelled</th>
        <th style="padding:10px 5px 20px 10px; border: 0.5px solid gray">Approved</th>
        

    </tr>
    @foreach($data as $data1)
        <tr>
            <td style="padding:10px 5px 20px 10px; border: 0.5px solid gray">{{ $data1['date'] }}</td> 
            <td style="padding:10px 5px 20px 10px; border: 0.5px solid gray">{{ $data1['num_of_orders'] }}</td>         
            <td style="padding:10px 5px 20px 10px; border: 0.5px solid gray">{{ $data1['num_of_completed'] }}</td>
            <td style="padding:10px 5px 20px 10px; border: 0.5px solid gray">{{ $data1['num_of_pending'] }}</td>
            <td style="padding:10px 5px 20px 10px; border: 0.5px solid gray">{{ $data1['num_of_cancelled'] }}</td>
            <td style="padding:10px 5px 20px 10px; border: 0.5px solid gray">{{ $data1['num_of_approved'] }}</td>

         
        </tr>
    @endforeach
</table>                                                                           
                                                                             
</body>
</html>


