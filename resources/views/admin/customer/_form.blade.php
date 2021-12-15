<div class="row">

<div class="col-md-12">
{!! Form::text ('firstname','First Name') !!} </div>
<div class="col-md-12">
{!! Form::text ('lastname','last Name') !!} </div>

<div class="col-md-12">
{!! Form::text ('email','Email ') !!} </div>


<div class="col-md-12">
{!! Form::text ('address','Address') !!} </div>

<div class="col-md-12">
{!! Form::text ('nic',' NIC') !!} </div>

<div class="col-md-12">
{!! Form::text ('mobileno','Mobile Number') !!} </div>

<div class="col-md-12">
{!! Form::text ('password','Password')->type('password') !!} </div>

<div class="col-md-12">
{!! Form::text ('password_confirmnation','Confirm Password')->type('password') !!} </div>


</div>

@section('js')

<script>


@if(isset($customer))
      
$('#inp-firstname').val("{{$customer->customer->firstname}}");
$('#inp-lastname').val("{{ $customer->customer->lastname }}");
$('#inp-address').val("{{ $customer->customer->address }} ");
$('#inp-nic').val("{{ $customer->customer->nic }} ");
$('#inp-mobileno').val("{{ $customer->customer->mobileno }} ");
        
@endif   

</script>

@endsection