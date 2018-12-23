<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = ['name','description'];

    public function race(){
    	return $this->hasOne(Race::class);
    }

    public function mascot(){
    	return $this->hasOne(Race::class);
    }

    // public function rule(){
    // 	return $this->belongsTo(Rule::class);
    // }

    public function rule(){
        return $this->hasMany(Rule::class);
    }
}
