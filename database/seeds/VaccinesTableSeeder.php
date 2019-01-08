<?php

use Illuminate\Database\Seeder;

class VaccinesTableSeeder extends Seeder
{
    public function run()
    {
       $vacunas = array(
            'Anti-rabica'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #1'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #2'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #3'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #4'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #5'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #6'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #7'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #8'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #9'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #10'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #11'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #12'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #13'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #14'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vacuna #15'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        );

        $vacuna = new \App\Vaccine();

        foreach ($vacunas as $vacunan => $descripcion) {
            $vacuna::create([
                'name'  =>  $vacunan,
                'description'   =>  $descripcion
            ]);
        }
    }
}
