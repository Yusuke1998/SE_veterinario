<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(PeopleTableSeeder::class);
        $this->call(DoctorsTableSeeder::class);        
        $this->call(SymptomsTableSeeder::class);
        $this->call(VaccinesTableSeeder::class);
        $this->call(AnimalsTableSeeder::class);
        $this->call(RacesTableSeeder::class);
        // $this->call(MascotsTableSeeder::class); 
        // $this->call(TreatmentsTableSeeder::class);
    }
}
