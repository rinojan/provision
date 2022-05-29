@extends('layouts.customer.master')
@section('title','customer-dashboard')
@section('content')


<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my- my-md-0 mw-100 navbar-search">
                <div class="input-group">
                  
                    {!! Form::open()->route('dashboard')->method('get') !!}
                    {!! Form::text('q','',request()->input('q'))->placeholder('Search by job.....') !!}
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="mdi mdi-briefcase-search"></i>
                            </button>
                        </div>
                    {!! Form::close() !!}
                </div>
            </form>

  <div class="card-body">
              @if(session('success'))
              <div class="alert alert-success">
                  {{session('success')}}
              </div>
              @endif
     


                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      
   
                      <h1 class="display-6">Recent jobs</h2>
                      

                    </div>

                    <div class="card-body slim-scroll py-0" style="overflow: hidden; width: auto; height: 100%;">
                      <table class="table ">
                        <tbody>
                    @foreach($jobs as $job)
                    @if(isset($job->employees))

                      @foreach($job->employees as $job1)
                         
                      <tr>
                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-4 rounded">
                          <a href="#"><img src="assets/img/products/job3.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                
                          <h5 class="mb-6 text-dark font-weight-bold"> {{$job->title}} </h5>
                          <hr/>
                          <h6 class="mb-2 text-dark font-weight-medium">Name : {{$job1->title}}.{{$job1->firstname}}</h6>
                          <h6 class="mb-2 text-dark font-weight-medium">Location : {{App\Models\District::whereId($job1->district_id)->value('name')}} </h6>
                          <h6 class="mb-2 text-dark font-weight-medium">  Published: {{ $date =$job1->created_at->format('Y.m.d')}} </h6>
                          <h6 class="mb-2 text-dark font-weight-medium">Ratings : ( {{App\Models\Charter::where('employee_id',$job1->id)->avg('ratings')}} )  <h6>

                          
                         <!-- // $user->ratings()->avg('rating_for_user') -->

                         <!-- <h6 class="mb-3 text-dark font-weight-medium"> {{$job->id}}</h6> -->
                       
                         
                          <p class="float-md-right"><span class="text-dark mr-2"></span>
                          <a href="{{ route('charter.index',['charter'=>$job1->id,'chart'=>$job->id])}}" class="btn btn-success btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-shape-square-plus"></i></span><span class="text"> Apply</i></a> 
                          <a href="{{ route('charter.show',['charter'=>$job1->id,'chart'=>$job->id])}}" class="btn btn-secondary btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-expand-all-outline"></i></span><span class="text"> View</i></a>


                        </div>
                    </div>
                    </tr>
                    </tbody>
                    </table>
                     
                   

                      @endforeach
                    
                      @endif
                      @endforeach
                  </div>
            

@endsection

