<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    protected $fillable = ['name','description','mascot_id','doctor_id'];

    public function mascot(){
    	return $this->belongsTo(Mascot::class);
    }

    // public function scopeTratamientos($query){
    //     $query->where('name','queso');
    // }
}
