<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $admin = new \App\User();
        $admin->username       = 'admin';
        $admin->email          = 'admin@gmail.com';
        $admin->password       = bcrypt('admin'); 
        $admin->is_admin       = '1';
        $admin->save();

        $doctor = new \App\User();
        $doctor->username       = 'doctor';
        $doctor->email          = 'doctor@gmail.com';
        $doctor->password       = bcrypt('doctor'); 
        $doctor->is_admin       = '0';
        $doctor->save();
    }
}
