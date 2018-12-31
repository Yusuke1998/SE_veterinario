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


class TreatmentsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $tratamientos = Treatment::orderBy('created_at','DESC')->paginate(5);
        return view('Tratamientos.lista')
        ->with('tratamientos',$tratamientos);
    }

    public function treatmentSearch(Request $request)
    {
        $data = $request->validate(
        [
            'search'    =>  'min:1',
            'search'    =>  'required',
            'search'    =>  'nullable'
        ],
        [
            'search.min'        =>  'El campo no debe estar vacio!',
            'search.required'   =>  'El campo es requerido!',
            'search.nullable'   =>  'El campo es requerido!',
        ]);
        
        $tratamientos = Treatment::orderBy('created_at','DESC')->treatment($request->search)->paginate(5);
        return view('Tratamientos.lista')
        ->with('tratamientos',$tratamientos);
    }

    public function show($id){
        $tratamiento = Treatment::find($id);
        return view('Tratamientos.ver')->with('tratamiento',$tratamiento);
    }

    public function createnew($id)
    {
        $mascota = Mascot::find($id);
        return view('Tratamientos.crear')->with('mascota',$mascota);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $mascota = Mascot::find($request->mascot_id);
        $mascota_s = $mascota->Symptoms;

        $tratamiento = Treatment::create($request->all());

        if ($tratamiento->doctor_id) {
            $doctor = $tratamiento->doctor_id;
        }else{
            $doctor = null;
        }

        if ($mascota->race) {
            $race = $mascota->race->id;
        }else{
            $race = null;
        }

        $regla = Rule::create([
            'title'         =>  'Regla para '.$mascota->animal->name,
            'description'   =>  $tratamiento->description,
            'age_1'         =>  $mascota->age,
            'age_type_1'    =>  $mascota->age_type,
            'weight_1'      =>  $mascota->weight,
            'weight_type_1' =>  $mascota->weight_type,
            'doctor_id'     =>  $doctor,
            'treatment'     =>  $tratamiento->description,
            'animal_id'     =>  $mascota->animal->id,
            'race_id'       =>  $race
        ]);

        $regla->symptoms()->sync($mascota_s);


        return redirect(Route('Mascotas.index'))->with('info','Tratamiento para '.$mascota->name.' creado con exito!');
    }

    public function destroy($id)
    {
        return back()->with('info','Eliminado con exito!');
    }
}
