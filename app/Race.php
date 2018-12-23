<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    protected $fillable = ['name','description','photo','animal_id'];

    public function animal(){
    	return $this->belongsTo(Animal::class);
    }

    public function mascot(){
    	return $this->hasOne(Mascot::class);
    }

    // public function rule(){
    // 	return $this->belongsTo(Rule::class);
    // }

    public function rule(){
        return $this->hasMany(Rule::class);
    }
    
}
