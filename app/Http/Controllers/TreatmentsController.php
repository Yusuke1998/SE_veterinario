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
        $tratamiento = Treatment::create($request->all());
        return redirect(Route('Mascotas.index'))->with('info',$tratamiento->name.' creado con exito!');
    }

    public function destroy($id)
    {
        return back()->with('info','Eliminado con exito!');
    }
}
