<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable=[
        'firstname',
        'lastname',
        'address',
        'nic',
        'mobileno',
    ];


    public function user(){
        return $this->hasOne(User::class,'customer_id');
    }

}