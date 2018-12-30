<?php

use Illuminate\Database\Seeder;

class AnimalsTableSeeder extends Seeder
{
    public function run()
    {
    	$animales = array(
            'Perro'=>'El mejor amigo del hombre',
            'Gato'=>'El felino preferido por los egipcios',
            'Conejo'=>'El conejo es rapido y le gusta procrear :v',
            'Tortuga'=>'Lenta pero segura',
            'Loro'=>'Todos quisieran tener la libertad de volar y hablar',
            'Pez'=>'Conocer las profundidas del mar son un hobbit',
            'Tigre'=>'El felino mas fuerte y temido',
            'Leon'=>'El rey de la selva sin duda alguna',
            'Nutria'=>'Nadar y correr son su fuerte',
            'Caiman'=>'El anfibio con las fauses mas temidas',
            'Canario'=>'El silvido mas envidiado del mundo de las aves'
        );

        $animal = new \App\Animal();

        foreach ($animales as $animaln => $descripcion) {
            $animal::create([
                'name'  =>  $animaln,
                'description'   =>  $descripcion,
            ]);
        }
        
    }
}
