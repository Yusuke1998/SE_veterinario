<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rule extends Model
{
    protected $fillable = [
    	'title','description','treatment','weight_1','weight_2',
    	'symptom_id','animal_id','race_id','doctor_id'
    ];

    public function doctor(){
    	return $this->belongsTo(Doctor::class);
    }

    public function symptom(){
    	return $this->belongsTo(Symptom::class);
    }

    public function animal(){
    	return $this->belongsTo(Animal::class);
    }

    public function race(){
    	return $this->belongsTo(Race::class);
    }
}
