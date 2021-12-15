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
        return $this->belongToMany(JobCategory::class,'employee_job')->withPivot(['type','working_duration','salary']); //alrdy job
    }
   
}
