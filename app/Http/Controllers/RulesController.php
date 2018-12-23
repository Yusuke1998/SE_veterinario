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

class RulesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $reglas = Rule::all();
        return view('Reglas.listarReglas')->with('reglas',$reglas);
    }

    public function create()
    {
        $animales = Animal::all();
        $razas = Race::all();
        $vacunas = Vaccine::all();
        $sintomas = Symptom::all();

        return view('Reglas.crearReglas')
        ->with('animales',$animales)
        ->with('razas',$razas)
        ->with('vacunas',$vacunas)
        ->with('sintomas',$sintomas);
    }

    public function store(Request $request)
    {
        $regla = new Rule;
        $regla->title = $request->title;
        $regla->description = $request->description;
        $regla->treatment = $request->treatment;
        $regla->age_1 = $request->age_1;
        $regla->age_type_1 = $request->age_type_1;
        $regla->age_2 = $request->age_2;
        $regla->age_type_2 = $request->age_type_2;
        $regla->weight_1 = $request->weight_1;
        $regla->weight_type_1 = $request->weight_type_1;
        $regla->weight_2 = $request->weight_2;
        $regla->weight_type_2 = $request->weight_type_2;
        if (\Auth::user()->Doctor) {
            $regla->doctor_id = \Auth::user()->Doctor->id;
        }else{
            $regla->doctor_id = '1';
        }
        $regla->animal_id = $request->animal_id;
        $regla->race_id = $request->race_id;
        $regla->symptom_id = $request->symptom_id;
        $regla->save();

        return redirect(route('Reglas.index'));
    }

    public function edit($id)
    {
        $regla = Rule::find($id);

        $animales   = Animal::all();
        $razas      = Race::all();
        $vacunas    = Vaccine::all();
        $sintomas   = Symptom::all();

        return view('Reglas.editarRegla')
        ->with('regla',$regla)
        ->with('animales',$animales)
        ->with('razas',$razas)
        ->with('vacunas',$vacunas)
        ->with('sintomas',$sintomas);
    }

    public function update(Request $request, $id)
    {
        $regla = Rule::find($id);
        $regla->title = $request->title;
        $regla->description = $request->description;
        $regla->treatment = $request->treatment;
        $regla->age_1 = $request->age_1;
        $regla->age_2 = $request->age_2;
        $regla->weight_1 = $request->weight_1;
        $regla->weight_2 = $request->weight_2;
        if (\Auth::user()->Doctor) {
            $regla->doctor_id = \Auth::user()->Doctor->id;
        }else{
            $regla->doctor_id = '1';
        }
        $regla->animal_id = $request->animal_id;
        $regla->race_id = $request->race_id;
        $regla->symptom_id = $request->symptom_id;
        $regla->save();

        return redirect(Route('Reglas.index'));
    }

    public function destroy($id)
    {
        $regla = Rule::find($id);
        $regla->delete();

        return redirect(Route('Reglas.index'));
    }
}
