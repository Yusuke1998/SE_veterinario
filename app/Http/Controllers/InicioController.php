<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;
use App\Vaccine;
use App\Symptom;
use App\Mascot;
use App\Person;
use App\Treatment;
use App\Doctor;
use App\User;
use App\Rule;

class InicioController extends Controller
{
    public function index()
    {
        $animales = Animal::all();
        $razas = Race::all();
        $vacunas = Vaccine::all();
        $sintomas = Symptom::all();

        return view('inicio')
        ->with('animales',$animales)
        ->with('razas',$razas)
        ->with('vacunas',$vacunas)
        ->with('sintomas',$sintomas);
    }

    public function store(Request $request)
    {
        // <---------------------------------------------------------------------------------->

        // Registro de dueño
        $dueño = new Person;
        $dueño->firstname      = $request->firstname;
        $dueño->lastname       = $request->lastname;
        $dueño->email          = $request->email;
        $dueño->telephone      = $request->telephone;
        $dueño->address        = $request->address;
        $dueño->save();

        // <---------------------------------------------------------------------------------->
        
        // Registro de mascota
        $mascota = new Mascot;
        $mascota->name         =  $request->name;
        $mascota->weight       =  $request->weight;
        $mascota->weight_type  =  $request->weight_type;
        $mascota->age          =  $request->age;
        $mascota->age_type     =  $request->age_type;

        $mascota->animal_id    =  $request->animal_id;
        $mascota->race_id      =  $request->race_id;
        $mascota->person()->associate($dueño);
        $mascota->save();

        $mascota->symptoms()->sync($request->symptoms);
        $mascota->vaccines()->sync($request->vaccines);

        // <---------------------------------------------------------------------------------->

        // Aqui se instancia el modelo de las reglas para comenzar a interactuar con ellas
        $reglas = Rule::all();

        foreach ($reglas as $regla) {
            
            if ($mascota->animal_id == $regla->animal_id && $mascota->race_id == $regla->race_id) {
                
                if ($mascota->weight_type == $regla->weight_type_1 || $mascota->weight_type == $regla->weight_type_1 ) {

                    if ($mascota->weight >= $regla->weight_1 && $mascota->weight <= $regla->weight_2) {

                        if ($mascota->age_type == $regla->age_type_1 || $mascota->age_type == $regla->age_type_2) {

                            if ($mascota->age >= $regla->age_1 && $mascota->age <= $regla->age_2) {

                                if ($mascota->symptoms) {
                                   
                                    foreach ($mascota->symptoms as $symptom) {
                                   
                                        if ($symptom->id == $regla->symptom_id) {
                                            // Aqui debo crear un tratamiento basandome en las reglas que ya previamente deben haber sido creadas por el respectivo veterinario. Voy a comparar los datos de la mascota con las reglas y si concuerdan se crea un nuevo tratamiento asociado a la mascota especificada.
                                                $tratamiento = new Treatment;
                                                $tratamiento->name = 'Tratamiento para '.$mascota->name;
                                                $tratamiento->description = $regla->treatment;
                                                $tratamiento->mascot_id = $mascota->id;
                                                
                                                if (\Auth::user()) {
                                                
                                                    if (\Auth::user()->Doctor) {
                                                        $tratamiento->doctor_id = \Auth::user()->Doctor->id;
                                                        $tratamiento->save();
                                                    }
                                                }
                                            
                                                $tratamiento->save();
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }    
                }
            }
        return redirect(route('mascotSearch'));
    }
        
    // <---------------------------------------------------------------------------------->

    public function show($id)
    {
        $tratamiento = Treatment::find($id);
        return view('mascotaTratamiento')->with('tratamiento',$tratamiento);
    }
    
    // <---------------------------------------------------------------------------------->

    public function mascotSearch(Request $request){
        
        $mascotas = Mascot::orderBy('created_at','DESC')->mascota($request->search)->paginate(10);
        return view('tratamiento')->with('mascotas',$mascotas);
    }
}
