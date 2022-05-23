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
        return $this->belongsTo(Province::class,'province_id'); //Province model la irunthu // s pote
    }

    
    public function Employee(){ //district model so province //child so belongsTo
        return $this->belongsTo(Employee::class,'district_id'); //Province model la irunthu  //s pote 
    }
}   


