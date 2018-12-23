<?php

use Illuminate\Database\Seeder;

class DoctorsTableSeeder extends Seeder
{
    public function run()
    {
        $doctor = new \App\Doctor();
        $doctor->firstname       = 'Jhonny Jose';
        $doctor->lastname        = 'Perez Martinez';
        $doctor->email       	= 'jhonnyjose1998@gmail.com'; 
        $doctor->telephone		= '04161428973';
        $doctor->address       	= 'Aragua, villa de cura';
        $doctor->user_id       	= '2';
        $doctor->save();
    }
}
