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

    public function raceSearch(Request $request)
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
        
        $razas = Race::orderBy('created_at','DESC')->race($request->search)->paginate(10);
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
        $data = $request->validate(
            [
                'name'         =>  'required|min:5|max:30',
                'description'   =>  'required|min:10|max:100',
                'animal_id'   =>  'required'
            ],
            [
                'name.required'         =>  'El titulo es requerido!',
                'name.min'              =>  'El titulo debe tener al menos 5 caracteres!',
                'name.max'              =>  'El titulo puede tener un maximo de 30 caracteres!',
                'description.required'  =>  'La descripcion es requerida!',
                'description.min'       =>  'La descripcion debe tener un minimo de 10 caracteres!',
                'description.max'       =>  'La descripcion puede tener un maximo de 100 caracteres!',
                'animal_id.required'    =>  'El animal es requerido!'
            ]);

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
        $data = $request->validate(
            [
                'name'         =>  'required|min:5|max:30',
                'description'   =>  'required|min:10|max:100',
                'animal_id'   =>  'required'
            ],
            [
                'name.required'         =>  'El titulo es requerido!',
                'name.min'              =>  'El titulo debe tener al menos 5 caracteres!',
                'name.max'              =>  'El titulo puede tener un maximo de 30 caracteres!',
                'description.required'  =>  'La descripcion es requerida!',
                'description.min'       =>  'La descripcion debe tener un minimo de 10 caracteres!',
                'description.max'       =>  'La descripcion puede tener un maximo de 100 caracteres!',
                'animal_id.required'    =>  'El animal es requerido!'
            ]);

        $raza = Race::find($id)->update($request->all());
        return redirect(Route('Razas.index'))->with('info',$request->name.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $raza = Race::find($id)->delete();
        return redirect(Route('Razas.index'))->with('info','Eliminado con exito!');
    }
}
