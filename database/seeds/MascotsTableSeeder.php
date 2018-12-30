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

        $cont = 0;
        foreach ($nombres as $key => $nombre) {
            $cont = $cont+1;
            $mascota = new \App\Mascot();
            $mascota->name          =    $nombre;
            $mascota->weight        =    random_int(1, 20);
            $mascota->age           =    random_int(1, 20);
            $mascota->animal_id     =    random_int(1, 10);
            $mascota->race_id       =    random_int(1, 10);
            $mascota->person_id     =    $cont;
            $mascota->save();
            
            $a = random_int(1, 10);
            $m = $mascota->id;
            $s = [$m => $a];

            $mascota->symptoms()->sync($s);
            $mascota->vaccines()->sync($s);
        }
    }
}
