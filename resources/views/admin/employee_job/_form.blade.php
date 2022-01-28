<div class ="row">
<div class="col-md-6">
        <div class="form-group">
            <label for="job_category_id">JobCategories:</label><br /> 
            <select id="job_category_id" name="job_category_id" class="form-control">
                <option value=""> Select JobCategories</option>
                
            @foreach ($jobCategories as $jobCategory) 
                <option value="{{$jobCategory->id}}"> {{ $jobCategory->name}} </option>
            @endforeach
            </select>
        </div>
    </div>

    <div class="col-md-6">
        <div class="form-group">
            <label for ="job_id">Job:</label>
            <select  id="job_id" name="job_id" class="form-control"> </select>
        </div>
    </div>

    <div class="col-md-4">  {!! Form::select('type','Job Type')->options([''=>'--Choose Your Job Type--','hours'=>'Hours','day'=>'Day'])!!} </div>
    <div class="col-md-4">  {!! Form::text ('working_duration','Working Duration Hours / Days')->type('number')->value(1) !!}</div>
    <div class="col-md-4">  {!! Form::text ('salary','Salary')->placeholder('0.00') !!}</div>
</div>

@section('js')
<script>
    $(document).ready(function(){
        function jobcategoryChange(jobCategories,job){ 
            if(jobCategories){

   $.ajax({
       type: "GET",
       url: "{{ route('get.job') }}? jobCategories="+jobCategories, 
       success: function(res){
           if(res){ //response from cntrlr
               $("#job_id").empty(); //second time empty aakum
               $("#job_id").append('<option> Select Jobs </option>');//irukurathoda sekurarthu

                    $.each(res,function(key,value){ // each means foreach response looap
                        if(job==value.id){
                            $("#job_id").append('<option value="'+value.id+' " selected>'+value.title+'</option>');
                        }else{

                            $("#job_id").append('<option value="'+value.id+' ">'+value.title+'</option>');
                        }
                    })
            }else{
                $('#job_id').empty(); //provinceilana stright a empty aakum
            }
        }
   });

    }else{
           $('#job_id').empty();
       
        }
    }      
   
   $('#job_category_id').change(function(){
         
             var jobCategories =this.value;
             jobcategoryChange(jobCategories);
 
         });
  //end

                @if(isset($employee) && isset($job))

                        var type="{{$type}}";
                        var job ="{{$job->id}}";

                        var values= @json($employee);
                        setEditValues(values,job,type);
                @endif

                function setEditValues(values,job,type){
                    var jobs =values.jobs; //rtln
                       
                    if(jobs[0] !=null){
                        
                        $.each(jobs,function(key,value){
                          
                            
                            if(jobs[key].pivot.job_id==job && jobs[key].pivot.type==type){  
                                       
                                $('#inp-salary').val(jobs[key].pivot.salary);
                                $('#job_category_id').val(jobs[key].pivot.job_category_id);
                                $('#inp-type').val(jobs[key].pivot.type);

                              
                                return jobcategoryChange(jobs[key].pivot.job_category_id,jobs[key].pivot.job_id);
                            
                               
                            }else{
                             
                                return true;

                            }
                        })
                    }
                }
                

}); 
</script>
@endsection