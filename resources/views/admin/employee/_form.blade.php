<div class ="row">


<div class="col-md-2">
{!! Form::select('title','Title')->options([''=>'Select Title','Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss']) !!} </div>

<div class="col-md-5">
{!! Form::text ('firstname','First Name') !!} </div>

<div class="col-md-5">
{!! Form::text ('lastname','Last Name') !!} </div>

<div class="col-md-3">
{!! Form::text ('email','Email')->type('email') !!} </div>

<div class="col-md-3">
{!! Form::text ('address','Address') !!} </div>

<div class="col-md-3">
{!! Form::text ('mobileno','Mobile Number')  !!} </div>

<div class="col-md-3">
{!! Form::text ('nic','NIC') !!} </div>

<div class="col-md-3">
{!! Form::select ('gender','Gender')->options([''=>'Your Gender','male'=>'Male','female'=>'Female']) !!} </div>

<div class="col-md-3">
<div class="form-group">
        <label for="province_id">Province:</label>
        <select id="province_id" name="province_id" class="form-control">
            <option value="" selected disabled> Select Province</option>
            
        @foreach ($provinces as $province) 
            <option value="{{$province->id}}"> {{ $province->name}} </option>
        @endforeach
        </select>
    </div>
</div>

    <div class="col-md-6">
    <div class="form-group">
        <label for ="district_id">District:</label>
        <select id ="district_id" name="district_id"class="form-control"> </select>
    </div>
    </div>


<div class="col-md-6">
<div class="form-group">
        <label for="job_category_id">JobCategories:</label><br /> 
        <select id="job_category_id" name="job_category_id" class="form-control">
            <option value="" selected disabled> Select JobCategories</option>
            
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

<div class="col-md-4">
{!! Form::select('type','Job Type')->options([''=>'--choose Your Job Type--','hours'=>'Hours','day'=>'Day'])!!} </div>


<div class="col-md-4">
{!! Form::text ('working_duration','Working Duration')->type('number')->value(1) !!}</div>


<div class="col-md-4">
{!! Form::text ('salary','Salary')->placeholder('0.00') !!}</div>


<div class="col-md-6">
{!! Form::text ('password','Password')->type('password') !!} </div>


<div class="col-md-6">
{!! Form::text ('password_confirmation','Confirm_Password')->type('password') !!} </div>


</div>




@section('js')
<script>
    $('#province_id').change(function(){
        var province = $(this).val();
        if(province){

        $.ajax({
            type: "GET",
        	url: "{{ route('get.district') }}? province="+province, 
        	success: function(res){
                if(res){ //response from cntrlr
                    $("#district_id").empty(); //second time empty aakum
                    $("#district_id").append('<option> Select District </option>');//irukurathoda sekurarthu
                    $.each(res,function(key,value){ // each means foreach response looap
                        $("#district_id").append('<option value="'+value.id+' ">'+value.name+'</option>'); }) 
                }else{

                    $('#district_id').empty();
                }
                }

            });
        
        }else{
            $('#district_id').empty(); //provinceilana stright a empty aakum
            

        }
        });      

 $('#job_category_id').change(function(){
        var jobCategories = $(this).val();
        if(jobCategories){

        $.ajax({
            type: "GET",
        	url: "{{ route('get.job') }}? jobCategories="+jobCategories, 
        	success: function(res){
                if(res){ //response from cntrlr
                    $("#job_id").empty(); //second time empty aakum
                    $("#job_id").append('<option> Select Jobs </option>');//irukurathoda sekurarthu
                    $.each(res,function(key,value){ // each means foreach response looap
                        $("#job_id").append('<option value="'+value.id+' ">'+value.title+'</option>'); }) 
                }else{

                    $('#job_id').empty();
                }
                }

            });
        
        }else{
            $('#job_id').empty(); //provinceilana stright a empty aakum
            

        }
        });   




        @if(isset($employee))
        
      $('#inp-email').val("{{$employee->user->email}}");
   

      
  
      @endif   

</script>





@endsection