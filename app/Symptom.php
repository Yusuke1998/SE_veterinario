<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['name','description'];

    public function mascots(){
    	return $this->belongsToMany(Mascot::class);
    }
    
    public function rules(){
        return $this->belongsToMany(Rule::class);
    }

    public function scopeSymptom($query, $name){
        if($name){
            return $query->where('name','LIKE',"%$name%");
        }
    }
}
