<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['firstname','lastname','email','telephone','address'];

    public function mascot(){
    	return $this->hasOne(Mascot::class);
    }
    
}
