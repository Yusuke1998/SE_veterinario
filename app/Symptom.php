<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Symptom extends Model
{
    protected $fillable = ['name','description'];

    public function mascots(){
    	return $this->belongsToMany(Mascot::class);
    }
    
}
