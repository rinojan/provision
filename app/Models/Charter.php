<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Charter extends Model
{
    protected $fillable=[
          
            'jobdate',
            'description',
            'ratings',
            'employee_id',
            'customer_id',
            'job_id',
            'status',
                    
    ];

    public function customer(){
        return $this->belongsTo(Customer::class,'customer_id');
    }

    public function employee(){
        return $this->belongsTo(Employee::class,'employee_id');
    }

    public function job(){
        return $this->belongsTo(Job::class,'job_id');
    }



}


