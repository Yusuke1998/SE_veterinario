<?php

use Illuminate\Database\Seeder;

class VaccinesTableSeeder extends Seeder
{
    public function run()
    {
       $vacunas = array(
            'lajlkaj'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Gfasfaato'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'afda'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'asdas'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'asdass'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'asdasda'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadsadsa'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadasdas'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadsssasdas'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sadasdas'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        );

        $vacuna = new \App\Vaccine();

        foreach ($vacunas as $vacunan => $descripcion) {
            $vacuna::create([
                'name'  =>  $vacunan,
                'description'   =>  $descripcion,
            ]);
        }
    }
}
