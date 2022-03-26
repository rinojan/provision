@extends('layouts.customer.master')
@section('title','customer-dashboard')
@section('content')

                  <!-- Top Products -->
                  <div class="card card-default" data-scroll-height="580">
                    <div class="card-header justify-content-between mb-4">
                      <h2>Top Products</h2>
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
                    @foreach($jobs as $job)
                    @if(isset($job->employees))

                    @foreach($job->employees as $job1)

                    <div class="card-body py-0">
                      <div class="media d-flex mb-5">
                        <div class="media-image align-self-center mr-3 rounded">
                          <a href="#"><img src="assets/img/products/p1.jpg" alt="customer image"></a>
                        </div>
                        <div class="media-body align-self-center">
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium">{{$job->title}}</h6></a>
                          <a href="#"><h6 class="mb-3 text-dark font-weight-medium"> {{$job->id}}</h6></a>
                         
                          <p class="float-md-right"><span class="text-dark mr-2"></span>
                          <a href="{{ route('charter.index')}}" class="btn btn-success btn-rounded"><span class="icon text-dark-50"><i class="mdi mdi-expand-all-outline"></i></span><span class="text"> Hire</i></a> </td>  

                        </p>
                          <p class="d-none d-md-block">{{$job1->title}}</p>
                          <p class="d-none d-md-block">{{$job1->firstname}}</p>
                          <p class="d-none d-md-block">{{$job1->address}}</p>
                          <p class="d-none d-md-block">{{$job1->mobileno}}</p>
                          <p class="d-none d-md-block">{{$job1->nic}}</p>
                          <p class="mb-0">
                            <del>{{$job->employees}}</del>
                            <span class="text-dark ml-3">hai</span>
                          </p>
                        </div>
                      </div>
                  
                      </div>
                      @endforeach
                    
                      @endif
                      @endforeach
                  </div>
            
</div>
						</div>
</div>

@endsection