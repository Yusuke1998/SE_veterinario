<?php

use Illuminate\Database\Seeder;

class MascotsTableSeeder extends Seeder
{
    public function run()
    {   
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

	    $mascota = new \App\Mascot();
        foreach ($nombres as $key => $nombre) {
            $mascota::create([
    	        'name'  		=> $nombre,
    	        'weight'     	=> random_int(5, 20),
    	        'age' 		    => random_int(1, 10), 
    	        'animal_id'		=> random_int(1, 10),
    	        'race_id'     	=> random_int(1, 10),
    	        'person_id'     => random_int(1, 2),
            ]);
    	}
    }
}
