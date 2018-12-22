<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mascot extends Model
{
    protected $fillable = ['name','weight','age','animal_id','race_id','person_id'];

    public function treatment(){
    	return $this->hasOne(Treatment::class);
    }

    public function animal(){
    	return $this->belongsTo(Animal::class);
    }

    public function race(){
    	return $this->belongsTo(Race::class);
    }

    public function person(){
    	return $this->belongsTo(Person::class);
    }

    public function symptoms(){
    	return $this->belongsToMany(Symptom::class);
    }

    public function vaccines(){
    	return $this->belongsToMany(Vaccine::class);
    }

    public function scopeMascota($query, $name){
        if($name){
            return $query->where('name','LIKE',"%$name%");
        }
    }    
}
