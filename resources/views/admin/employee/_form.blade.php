<div class ="row">
    <div class="col-md-2">  {!! Form::select('title','Title')->options([''=>'Select Title','Mr'=>'Mr','Mrs'=>'Mrs','Miss'=>'Miss']) !!} </div>
    <div class="col-md-5">  {!! Form::text ('firstname','First Name') !!} </div>
    <div class="col-md-5">  {!! Form::text ('lastname','Last Name') !!} </div>
    <div class="col-md-3">  {!! Form::select ('gender','Gender')->options([''=>'Your Gender','male'=>'Male','female'=>'Female']) !!} </div>
    <div class="col-md-3">  {!! Form::text ('nic','NIC') !!} </div>
    
    <div class="col-md-3">  {!! Form::text ('mobileno','Mobile Number')  !!} </div>
    <div class="col-md-3">  {!! Form::text ('email','Email')->type('email') !!} </div>
    <div class="col-md-4">  {!! Form::text ('address','Address') !!} </div> 
    <div class="col-md-4">
        <div class="form-group">
                <label for="province_id">Province:</label>
                <select id="province_id" name="province_id" class="form-control">
                    <option value=""> Select Province</option>
                    
                @foreach ($provinces as $province) 
                    <option value="{{$province->id}}"> {{ $province->name}} </option>
                @endforeach
                </select>
            </div>
    </div>

    <div class="col-md-4">
        <div class="form-group">
            <label for ="district_id">District:</label>
            <select id ="district_id" name="district_id" class="form-control"> </select>
        </div>
    </div>
    <div class="col-md-6">  {!! Form::text ('password','Password')->type('password') !!} </div>
    <div class="col-md-6">  {!! Form::text ('password_confirmation','Confirm_Password')->type('password') !!} </div>

</div>

@section('js')
<script>
$(document).ready(function(){
       
    function provinceChange(province,district){
        if(province){

        $.ajax({
            type: "GET",
        	url: "{{ route('get.district') }}? province="+province, 
        	success: function(res){
                if(res){ //response from cntrlr

                    $("#district_id").empty(); //second time empty aakum
                    $("#district_id").append('<option> Select District </option>');//irukurathoda sekurarthu
                    
                    $.each(res,function(key,value){ // each means foreach response looap

                        if(district==value.id){
                            $("#district_id").append('<option value="'+value.id+' " selected>'+value.name+'</option>');
                        }else{

                            $("#district_id").append('<option value="'+value.id+' ">'+value.name+'</option>');
                        }
                        

                    })

                }else{
                    $('#district_id').empty();
                }
            }
        });

        
        }else{
            $('#district_id').empty(); //provinceilana stright a empty aakum
        }
    }

        $('#province_id').change(function(){
            var province =this.value;
            provinceChange(province);

        });     

        @if(isset($employee))
            $('#inp-email').val("{{$employee->user->email}}");  //doubt user rlt
            $('#province_id').val("{{$employee->province_id}}"); // rltn ?

                var province = "{{$employee->province_id}}" ;
                var district = "{{$employee->district_id}}" ;
                provinceChange(province,district);

        @endif
});

</script>

@endsection

