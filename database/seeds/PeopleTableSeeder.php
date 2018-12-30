<?php

use Illuminate\Database\Seeder;

class PeopleTableSeeder extends Seeder
{
    public function run()
    {
        $dueño = new \App\Person();
        $dueño->firstname       = 'Jhonny Jose';
        $dueño->lastname        = 'Perez Martinez';
        $dueño->email       	= 'jhonnyjose1998@gmail.com'; 
        $dueño->telephone		= '04161428973';
        $dueño->address       	= 'Aragua, villa de cura';
        $dueño->save();

        $nombres = [
            'jhonny'    => 'perez' ,
            'jose'      => 'perez' ,
            'mario'     => 'perez' ,
            'sebastian' => 'perez' ,
            'matias'    => 'perez' ,
            'mauro'     => 'perez' ,
            'jesus'     => 'perez' ,
            'angel'     => 'perez' ,
            'cesar'     => 'perez' ,
            'fidel'     => 'perez'
        ];
        
        $dueño2 = new \App\Person();

        foreach ($nombres as $nombre => $apellido) {
            $dueño2::create([
                'firstname' =>  $nombre,
                'lastname'  =>  $apellido,
                'email'     =>  $nombre.'@gmail.com',
                'telephone' =>  '0426'.random_int(1000000, 1428973),
                'address'   =>  $nombre.' '.$apellido.' No posee direccion.',
            ]);
        }
    }
}
