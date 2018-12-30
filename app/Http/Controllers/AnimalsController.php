<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Animal;
use App\Race;

class AnimalsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $animales = Animal::orderBy('created_at','DESC')->paginate(10);
        return view('Animales.listar')
        ->with('animales',$animales);
    }

    public function create()
    {
        return view('Animales.crear');
    }

    public function store(Request $request)
    {
        $animal = Animal::create($request->all());
        return redirect(Route('Animales.index'))
        ->with('info',$request->name.' creado con exito!');
    }

    public function edit($id)
    {
        $animal = Animal::find($id);
        return view('Animales.editar')
        ->with('animal',$animal);
    }

    public function update(Request $request, $id)
    {
        $animal = Animal::find($id)->update($request->all());
        return redirect(Route('Animales.index'))->with('info',$request->name.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $animal = Animal::find($id)->delete();
        return redirect(Route('Animales.index'))->with('info','Eliminado con exito!');
    }

    public function animalSearch(Request $request){
        $animales = Animal::orderBy('created_at','DESC')->animal($request->search)->paginate(10);
        return view('Animales.listar')
        ->with('animales',$animales);
    }
}
