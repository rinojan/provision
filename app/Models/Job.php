<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{

    protected $fillable = [
        'title','category_id',
    ];

    public function jobcategory(){
        return $this->belongsTo(JobCategory::class,'category_id');
    }
    
    public function employees(){
        return $this->belongsToMany(Employee::class,'employee_job')->withPivot(['type','working_duration','salary','job_category_id']); //alrdy job
    }

    public function charters(){
        return $this->hasMany(Charter::class,'job_id'); //jbid
    }
   
}
