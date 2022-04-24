@extends('layouts.customer.master')
@section('title','customer-dashboard')
@section('content')

                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      <h2>Recent jobs</h2>
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
                          <h6> </h6>
                          <h3 class="mb-6 text-dark font-weight-medium"> {{$job->title}} {{$Job1->created_at}}</h3> 
                          <h6 class="mb-2 text-dark font-weight-medium">Name : {{$job1->title}}.{{$job1->firstname}}</h6>
                          <h6 class="mb-2 text-dark font-weight-medium">Location : {{App\Models\District::whereId($job1->district_id)->value('name')}} </h6>

                         <!-- <h6 class="mb-3 text-dark font-weight-medium"> {{$job->id}}</h6> -->

                         
                          <p class="float-md-right"><span class="text-dark mr-2"></span>
                          <a href="{{ route('charter.index',$job1->id)}}" class="btn btn-success btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-expand-all-outline"></i></span><span class="text"> View</i></a>
                          <a href="{{ route('charter.index',$job1->id)}}" class="btn btn-success btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-expand-all-outline"></i></span><span class="text"> Apply</i></a> 


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

