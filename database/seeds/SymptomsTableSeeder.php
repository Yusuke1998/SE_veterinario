<?php

use Illuminate\Database\Seeder;

class SymptomsTableSeeder extends Seeder
{
    public function run()
    {
        $sintomas = array(
            'dolor en huesos'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'fiebre'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'sarna'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'mareos'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'vomitos'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'ceguera'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'poco apetito'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'cansancio'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'inanicion'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'llora'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        );

        $sintoma = new \App\Symptom();

        foreach ($sintomas as $sintomasn => $descripcion) {
            $sintoma::create([
                'name'  =>  $sintomasn,
                'description'   =>  $descripcion
            ]);
        }
    }
}
