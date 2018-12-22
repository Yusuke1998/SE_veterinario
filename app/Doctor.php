<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['firstname','lastname','email','telephone','address','user_id'];
    
}
