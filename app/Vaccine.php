<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vaccine extends Model
{
    protected $fillable = ['name','description'];

    public function mascots(){
    	return $this->belongsToMany(Mascot::class);
    }

    public function scopeVaccine($query, $name){
        if($name){
            return $query->where('name','LIKE',"%$name%");
        }
    }
}
