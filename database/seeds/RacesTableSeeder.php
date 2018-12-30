<?php

use Illuminate\Database\Seeder;

class RacesTableSeeder extends Seeder
{
    public function run()
    {
        $perros_raza = [
            'Pastor de los Pirineos de pelo largo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Braco aleman de pelo corto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Greyhound'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Schnauzer gigante'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Presa canario'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Collie de pelo corto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Terrier negro ruso'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Lobo de Saarloos'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pastor de Shetland'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Welsh corgi Pembroke'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Akita Inu corgi Pembroke'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Bull Terrier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Boyero de Berna'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Airedale Terrier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Beagle'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pastor belga laekenois'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Norfolk Terrier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Crestado Rodesiano'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'San Bernardo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Golden Retriever'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Cocker Spaniel Ingles'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Perro de montaña de los Pirineos Rodesiano'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pekines'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Terranova'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Bichon Maltes'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Mastin Italiano'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Collie Barbudo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pastor Bergamasco'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Yorkshire Terrier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Perro de Agua'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Appenzeller'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Dogo Mallorquin'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Broholmer'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Terrier Brasileño'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Staffordshire bull Terrier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pug'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Jack Russell Terrier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Galgo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'American Bully'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pastor Croata'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Weimaraner'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Gran Sabueso'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Saluki'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Pastor de los Pirineos de cara rasa'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ];

        $gatos_raza = [
            'Oriental de pelo corto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Burmes'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Chartreux'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Siberiano'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Montes'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Manx'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Exotico de pelo corto'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Birmano'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Bosque de noruega'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Korat'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Snowshoe'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Van Turco'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Somali'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Scottish Fold'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Angora Turco'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Bengala'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Ashera'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Munchkin'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Abisinio'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Balines'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Maine Coon'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'British Shorthair'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Lykoi'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Azul Ruso'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Bombay'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Shpynx'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Europeo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Mau Egipcio'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Australian Mist'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Himalayo'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Persa'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Siames'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Ragdoll'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ];

        $conejos_raza = array(
            'American Chinchilla'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Toy'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
            'Belier'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        );

        $tortugas_raza = [
            'Africana'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.'
        ];




        foreach ($perros_raza as $raza => $descripcion) {

            $raza1 = new \App\Race();
            $raza1::create([
                'name'  =>  $raza,
                'description'   =>  $descripcion,
                'animal_id'		=>	'1'
            ]);
        }

        foreach ($gatos_raza as $raza => $descripcion) {

            $raza2 = new \App\Race();
            $raza2::create([
                'name'  =>  $raza,
                'description'   =>  $descripcion,
                'animal_id'     =>  '2'
            ]);
        }

        foreach ($conejos_raza as $raza => $descripcion) {

            $raza3 = new \App\Race();
            $raza3::create([
                'name'  =>  $raza,
                'description'   =>  $descripcion,
                'animal_id'     =>  '3'
            ]);
        }

        foreach ($tortugas_raza as $raza => $descripcion) {

            $raza4 = new \App\Race();
            $raza4::create([
                'name'  =>  $raza,
                'description'   =>  $descripcion,
                'animal_id'     =>  '4'
            ]);
        }
    }
}
