@extends('layouts.customer.master')
@section('title','customer-dashboard')
@section('content')


<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my- my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    {!! Form::text('q','',request()->input('q'))->placeholder('search here.....') !!}
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="mdi mdi-briefcase-search"></i>
                            </button>
                        </div>
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
                      <div>
                          <button class="text-black-50 mr-2 font-size-20"><i class="mdi mdi-cached"></i></button>
                          <div class="dropdown show d-inline-block widget-dropdown">
                              <a class="dropdown-toggle icon-burger-mini" href="#" role="button" id="dropdown-product" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                              </a>
                              <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown-product">
                                <li class="dropdown-item"><a  href="#">Update Data</a></li>
                                <li class="dropdown-item"><a  href="#">Detailed Log</a></li>
                                <li class="dropdown-item"><a  href="#">Statistics</a></li>
                                <li class="dropdown-item"><a  href="#">Clear Data</a></li>
                              </ul>
                            </div>
                      </div>

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
                          <a href="#"><img src="assets/img/products/p3.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                
                          <h5 class="mb-6 text-dark font-weight-medium"> {{$job->title}} </h5>
                          <hr/>
                          <h6 class="mb-2 text-dark font-weight-medium">Name : {{$job1->title}}.{{$job1->firstname}}</h6>
                          <h6 class="mb-2 text-dark font-weight-medium">Location : {{App\Models\District::whereId($job1->district_id)->value('name')}} </h6>
                          <h6 class="mb-2 text-dark font-weight-medium">  Published: {{ $date =$job1->created_at->format('Y.m.d')}} </h6>
                          <h6 class="mb-2 text-dark font-weight-medium" >  Ratings &#9733 </h6>


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

