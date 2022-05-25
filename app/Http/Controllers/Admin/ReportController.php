<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Report;
use App\Models\Job;

use Barryvdh\DomPDF\Facade as PDF;



class ReportController extends Controller
{

    public function report1(Request $request){
       $data=[];
       $job_title=$request->input('job_title');
       //$grade = $request->input('grade');
       //$section = $request->input('section');
       $action=$request->input('action');
       $data = [
          [
              'job_title' => $job_title,
              //'grade' => $grade,
             // 'A'=>80,
              //'B'=>67,
             // 'C'=>55,
            //  'S'=>35,
             // 'W'=>21,
          ],
      ];
       if ($action == 'Export') {
          $pdf = PDF::loadView('admin.report.export.report1', [
              'data' => $data,
              'job_title' => $job_title,
             // 'section' => $section,
          ]);
          return $pdf->download("SDA-Report-{$job_title}-{$section}.pdf");
       }
         $job_titles =Job::distinct()->get(['title']);
         // $grades= Student::distinct()->get(['grade']);
         // $sections= Student::distinct()->get(['section']);
         return view('admin.report.report1',compact('job_titles'));
      }
      public function report2(){
         return view('admin.report.report2');
      }
   
 }
