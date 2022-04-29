<div class="row">
<div class="col-md-12"> {!! Form::text ('title','job') !!} </div>
<div class="col-md-12"> {!! Form::text ('type','Work Type') !!} </div>
<div class="col-md-12"> {!! Form::text ('working_duration','durtaion') !!} </div>
<div class="col-md-12"> {!! Form::text ('salary','budget') !!} </div>







</div>

@section('js')
    <script>


        @if(isset($charter))

    
        var job ="{{$chart->id}}";

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
