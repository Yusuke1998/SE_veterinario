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
    }
}
