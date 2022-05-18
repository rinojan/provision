<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable=[
        'name','province_id',
    ];


    public function province(){ //district model so province //child so belongsTo
        return $this->belongTo(Province::class,'province_id'); //Province model la irunthu
    }

    
    public function Employee(){ //district model so province //child so belongsTo
        return $this->belongTo(Employee::class,'district_id'); //Province model la irunthu
    }
}   


