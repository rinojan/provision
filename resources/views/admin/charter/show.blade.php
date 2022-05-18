@extends('layouts.customer.master')
@section('title','customer_charter_index')
@section('content')



<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="float-left">
                  <h2>Profile</h2>
                </div>
            </div>
            <div class="card-body">
            @if(session('error'))
            <div class="alert alert-warning">
                {{session('error')}}
            </div>
            @endif

           

                <div class="row">
                    <div class="col-md-12">
                        <div class="float-right">
                    </div>  
                    </div>
                </div>

            {!! Form::close() !!}
            
            </div>
        </div>
    </div>
</div>


@endsection


public function store(PatientStoreRequest $request){
        $data = $request->validated();
        $patient=Patient::create([
            'first_name' => $data['first_name'],
            'last_name' => $data['last_name'],
            'nic' => $data['nic'],
            'address' => $data['address'],
            'phone_no'=> $data['phone_no'],
            'gender' =>$data['gender'],
            'age' => $data['age'],
         ]);
            PatientId::create([
                'patient_id' => $patient->id,
                'clinic_id' => $data['clinic_id'],
                'type' => $data['type'],
        ]);
        return redirect()->route('patient.index')->with('success', 'Patient details has been updated successfully!');
    }