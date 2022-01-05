<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = [
        'title',
        'firstname',
        'lastname',
        'address',
        'nic',
        'mobileno',
        'gender',
        'password',
        'district_id',
        'province_id', 

    ];

    public function jobs(){
        return $this->belongsToMany(Job::class,'employee_job')->withPivot(['type','working_duration','salary']);
        
    }

    public function user(){
        return $this->hasOne(User::class,'employee_id');
    }
}
