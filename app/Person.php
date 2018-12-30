<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    protected $fillable = ['firstname','lastname','email','telephone','address'];

    public function mascot(){
    	return $this->hasOne(Mascot::class);
    }

    public function scopePersona($query, $name){
        if($name){
            return $query->
            where('firstname','LIKE',"%$name%")
            ->orWhere('lastname','LIKE',"%$name%")
            ->orWhere('telephone','LIKE',"%$name%")
            ->orWhere('email','LIKE',"%$name%");
        }
    }
    
}
