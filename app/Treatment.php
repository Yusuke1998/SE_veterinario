<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Treatment extends Model
{
    protected $fillable = ['name','description','mascot_id','doctor_id'];

    public function mascot(){
    	return $this->belongsTo(Mascot::class);
    }

    public function doctor(){
    	return $this->belongsTo(Doctor::class);
    }

    public function scopeTreatment($query, $name){
        if($name){
            return $query->where('name','LIKE',"%$name%")
            ->orWhere('description','LIKE',"%$name%");
        }
    }
}
