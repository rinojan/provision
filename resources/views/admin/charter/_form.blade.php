<div class="row">
<div class="col-md-4"> {!! Form::text ('title','Job') !!} </div>
<div class="col-md-4"> {!! Form::text ('type','Work Type') !!} </div>
<div class="col-md-4"> {!! Form::text ('working_duration','Durtaion') !!} </div>
<div class="col-md-6"> {!! Form::text ('salary','Budget') !!} </div>
<div class="col-md-6"> {!! Form::date ('jobdate','Job_date') !!} </div>
<div class="col-md-12"> {!! Form::text ('description','Message') !!} </div>




</div>

@section('js')
    <script>


        @if(isset($charter))

    
        var job ="{{$chart->id}}";
       $('#inp-district').val("{{$charter}}");
        var values= @json($charter);
        setEditValues(values,job); //type remove

        @endif

    
        function setEditValues(values,job){  ///tyeremove
                    var jobs =values.jobs; //rtln
                       
                    if(jobs[0] !=null){
                        
                        $.each(jobs,function(key,value){
                          
                            
                            if(jobs[key].pivot.job_id==job){  
                                       
                           
                                $('#inp-salary').val(jobs[key].pivot.salary);
                                $('#inp-working_duration').val(jobs[key].pivot.working_duration);
                                $('#inp-type').val(jobs[key].pivot.type);
                                $('#inp-title').val(jobs[key].title);
                            
                           
                              
                              
                                return true;
                               
                            }else{
                             
                                return true;

                            }
                        })
                    }
                }

    </script>
@endsection
