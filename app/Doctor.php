<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    protected $fillable = ['firstname','lastname','email','telephone','address','user_id'];

    public function treatments(){
    	return $this->hasMany(Treatment::class);
    }

    public function rules(){
    	return $this->hasMany(Rule::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
    
}
