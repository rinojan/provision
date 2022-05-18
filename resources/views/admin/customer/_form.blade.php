<div class="row">

<div class="col-md-12"> {!! Form::text ('firstname','First Name') !!} </div>
<div class="col-md-12"> {!! Form::text ('lastname','last Name') !!} </div>
<div class="col-md-12" > {!! Form::text ('email','Email ') !!} </div>
<div class="col-md-12"> {!! Form::text ('address','Address') !!} </div>
<div class="col-md-12"> {!! Form::text ('nic',' NIC') !!} </div>
<div class="col-md-12"> {!! Form::text ('mobileno','Mobile Number') !!} </div>
<div class="col-md-12"> {!! Form::text ('password','Password')->type('password') !!} </div>
<div class="col-md-12"> {!! Form::text ('password_confirmnation','Confirm Password')->type('password') !!} </div>

</div>

@section('js')
    <script>

        @if(isset($customer))


        $('#inp-email').val("{{$customer->user->email}}");

        
        @endif
    </script>
@endsection




