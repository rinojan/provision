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

    <div class="col-md-4">  {!! Form::select('type','Job Type')->options([''=>'--choose Your Job Type--','hours'=>'Hours','day'=>'Day'])!!} </div>
    <div class="col-md-4">  {!! Form::text ('working_duration','Working duration Hours/Days')->type('number')->value(1) !!}</div>
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
            // console.log(jobCategories);
             jobcategoryChange(jobCategories);
 
         });
    });
    </script>

    @endsection


    <!--

@if(isset($expense))
        
            var existingType = "{{ $expense->allocation->type }}";
            var existingAllocation = "{{ $expense->allocation->heading_id }}";
            var existingAmount = "{{ $expense->cash}}";
            document.getElementById("inp-total_cash").value = existingAmount;
            document.getElementById("inp-type").value = existingType;
            typeChange(existingType);
            if(existingType == "Others"){
                $("#inp-otheading_id").val(existingAllocation);
            }
            else if(existingType == "S"){
                $("#inp-sheading_id").val(existingAllocation);
            }
        @endif


        -->