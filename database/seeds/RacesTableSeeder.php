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
            'klajlsk'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'asdasda'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'astttasda'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadsadsa'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadasdas'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadasdassss'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        );

        $raza = new \App\Race();

        foreach ($razas as $razan => $descripcion) {
            $raza::create([
                'name'  =>  $razan,
                'description'   =>  $descripcion,
                'animal_id'		=>	random_int(1, 10)
            ]);
        }
    }
}
