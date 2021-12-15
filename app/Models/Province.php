<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable=[
        'name',
    ];

    public function districts(){   //parent
        return $this->hasMany(District::class,'province_id'); //District model la irunthu
    }

}
