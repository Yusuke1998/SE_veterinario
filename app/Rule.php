<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
    	'title','description','treatment','weight_1','weight_2','animal_id','race_id','doctor_id','weight_type_1','weight_type_2','age_type_1','age_type_2'
    ];

    public function doctor(){
    	return $this->belongsTo(Doctor::class);
    }

    public function animal(){
    	return $this->belongsTo(Animal::class);
    }

    public function race(){
    	return $this->belongsTo(Race::class);
    }

    public function symptoms(){
        return $this->belongsToMany(Symptom::class);
    }
}
