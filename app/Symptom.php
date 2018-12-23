<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['name','description'];

    public function mascots(){
    	return $this->belongsToMany(Mascot::class);
    }

    // public function rule(){
    // 	return $this->belongsTo(Rule::class);
    // }
    public function rule(){
    	return $this->hasMany(Rule::class);
    }
    
}
