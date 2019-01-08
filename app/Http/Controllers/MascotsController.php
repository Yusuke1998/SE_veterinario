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

class MascotsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $mascotas = Mascot::orderBy('created_at','DESC')->paginate(5);
        return view('Mascotas.lista')
        ->with('mascotas',$mascotas);
    }

    public function destroy($id)
    {
        return back()->with('info','Mascota eliminada con exito!');
    }

    public function mascotSearch(Request $request)
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

        $mascotas = Mascot::orderBy('created_at','DESC')->mascota($request->search)->paginate(10);
        return view('Mascotas.lista')->with('mascotas',$mascotas);
    }
}
