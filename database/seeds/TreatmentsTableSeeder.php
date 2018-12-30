<?php

use Illuminate\Database\Seeder;

class TreatmentsTableSeeder extends Seeder
{
    public function run()
    {
        $tratamiento = new \App\Treatment();

        $nombres = array(
            'chiquitin',
    		'rockie',
    		'mancha',
    		'chispa',
    		'michi',
    		'coqui',
    		'donki',
    		'cusco',
    		'max',
    		'benjamin'
    	);

        foreach ($nombres as $i => $nombre) {

            $tratamiento::create([
                'name'           => 'Inyecciones para '.$nombre,
                'description'    => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                'mascot_id'      =>  $i+1,
                'doctor_id'      =>  '1'
            ]);
        }
    }
}
