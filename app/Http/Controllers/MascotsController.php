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

class MascotsController extends Controller
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
        $dueño = new Person;
        $dueño->firstname      = $request->firstname;
        $dueño->lastname       = $request->lastname;
        $dueño->email          = $request->email;
        $dueño->telephone      = $request->telephone;
        $dueño->address        = $request->address;
        $dueño->save();

        $mascota = new Mascot;
        $mascota->name         =  $request->name;
        $mascota->weight       =  $request->weight;
        $mascota->age          =  $request->age;
        $mascota->animal_id    =  $request->animal_id;
        $mascota->race_id      =  $request->race_id;
        $mascota->person()->associate($dueño);
        $mascota->save();

        $mascota->symptoms()->sync($request->symptoms);
        $mascota->vaccines()->sync($request->vaccines);

        return redirect(route('mascotSearch'));
    }

    public function mascotSearch(Request $request){
        // dd($request->search);
        
        $mascotas = Mascot::orderBy('name','ASC')->mascota($request->search)->paginate(10);

        return view('tratamiento')->with('mascotas',$mascotas);
    }
}
