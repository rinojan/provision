<?php
namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Job;
use App\Models\Charter;
use Barryvdh\DomPDF\Facade as PDF;
use Carbon\Carbon;
use Carbon\CarbonPeriod;


class ReportController extends Controller
{
    public function report1(Request $request){
        $data = [];
        $year=$request->input('year');
        $month=$request->input('month');
        $action=$request->input('action');
        if(in_array($month,["01","03","05","07","09","11"])){
            //dd($month);
        for($i=1;$i<32;$i++){
            $data[$i]= [
                'date' => date("{$year}-{$month}-$i"),
                'num_of_orders' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->count(),
                'num_of_completed' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','completed')->count(),
                'num_of_pending' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','pending')->count(),
                'num_of_cancelled' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','cancelled')->count(),
                'num_of_approved' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','approved')->count(),

            ];
        }
        }
        if(in_array($month,["04","06","08","10","12"])){
            //dd($month);
        for($i=1;$i<31;$i++){
            $data[$i]= [
                'date' => date("{$year}-{$month}-$i"),
                'num_of_orders' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->count(),
                'num_of_completed' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','completed')->count(),
                'num_of_pending' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','pending')->count(),
                'num_of_cancelled' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','cancelled')->count(),
                'num_of_approved' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','approved')->count(),
            ];
        }
        }
        if($month=="02"){

            for($i=1;$i<29;$i++){
                $data[$i]= [
                    'date' => date("{$year}-{$month}-$i"),
                    'num_of_orders' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->count(),
                    'num_of_completed' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','completed')->count(),
                    'num_of_pending' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','pending')->count(),
                    'num_of_cancelled' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','cancelled')->count(),
                    'num_of_approved' => Charter::whereDate('updated_at',date("{$year}-{$month}-$i"))->where('status','approved')->count(),
                ];
            }

        }
      if ($action == 'Export') {
         $pdf = PDF::loadView('admin.report.export.report1', [
             'data' => $data,
             'year' => $year,
             'month' => $month,
         ]);
         return $pdf->download("Job Monthly Report{$year}-{$month}.pdf");
      }
         $jobs=Job::all();
         $status= Charter::distinct()->get(['status']);
         $years = range(Carbon::now()->year, 2020);
         $months = CarbonPeriod::create('2020-01-01', '1 month', '2020-12-31');
         return view('admin.report.report1',compact('data','years','months'));
     }
    }
