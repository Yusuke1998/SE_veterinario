<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    public function run()
    {
        $razas = array(
            'chihuahua'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'grandanes'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'rotwailler'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'dalmata'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'firulais'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'courage'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'scooby'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'lobo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'golden'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'salchicha'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        );

        $raza = new \App\Race();
        $i = 0;
        foreach ($razas as $razan => $descripcion) {
            $i++;
            $raza::create([
                'name'  =>  $razan,
                'description'   =>  $descripcion,
                'animal_id'		=>	$i
            ]);
        }
    }
}
