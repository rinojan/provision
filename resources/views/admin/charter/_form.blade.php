<div class="row">
<div class="col-md-4"> {!! Form::text ('title','job') !!} </div>
<div class="col-md-4"> {!! Form::text ('type','Work Type') !!} </div>
<div class="col-md-4"> {!! Form::text ('working_duration','durtaion') !!} </div>
<div class="col-md-6"> {!! Form::text ('salary','budget') !!} </div>
<div class="col-md-6"> {!! Form::date ('jobdate','date') !!} </div>
<div class="col-md-12"> {!! Form::text ('description','description') !!} </div>





<!--

<form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                <div class="input-group">
                    {!! Form::text('q','',request()->input('q'))->placeholder('search user') !!}
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="submit">
                                <i class="mdi mdi-account-search-outline"></i>
                            </button>
                        </div>
                </div>
</br>
            </form>



-->

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
