<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Race;
use App\Animal;


class RacesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $razas = Race::orderBy('created_at','DESC')->paginate(10);
        $animales = Animal::all();
        return view('Razas.listar')
        ->with('razas',$razas)
        ->with('animales',$animales);
    }

    public function create()
    {
        $animales = Animal::all();
        return view('Razas.crear')
        ->with('animales',$animales);
    }

    public function store(Request $request)
    {
        $raza = Race::create($request->all());
        return redirect(Route('Razas.index'))->with('info',$request->name.' creado con exito!');
    }

    public function edit($id)
    {
        $animales = Animal::all();
        $raza = Race::find($id);
        return view('Razas.editar')
        ->with('raza',$raza)
        ->with('animales',$animales);
    }

    public function update(Request $request, $id)
    {
        $raza = Race::find($id)->update($request->all());
        return redirect(Route('Razas.index'))->with('info',$request->name.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $raza = Race::find($id)->delete();
        return redirect(Route('Razas.index'))->with('info','Eliminado con exito!');
    }
}
