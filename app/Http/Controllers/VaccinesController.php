<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vaccine;

class VaccinesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $vacunas = Vaccine::orderBy('created_at','DESC')->paginate(10);
        return view('Vacunas.listar')
        ->with('vacunas',$vacunas);
    }

    public function vaccineSearch(Request $request)
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
        
        $vacunas = Vaccine::orderBy('created_at','DESC')->vaccine($request->search)->paginate(10);
        return view('Vacunas.listar')
        ->with('vacunas',$vacunas);
    }

    public function create()
    {
        return view('Vacunas.crear');
    }

    public function store(Request $request)
    {
        $data = $request->validate(
            [
                'name'         =>  'required|min:5|max:30',
                'description'   =>  'required|min:10|max:100'
            ],
            [
                'name.required'         =>  'El titulo es requerido!',
                'name.min'              =>  'El titulo debe tener al menos 5 caracteres!',
                'name.max'              =>  'El titulo puede tener un maximo de 30 caracteres!',
                'description.required'  =>  'La descripcion es requerida!',
                'description.min'       =>  'La descripcion debe tener un minimo de 10 caracteres!',
                'description.max'       =>  'La descripcion puede tener un maximo de 100 caracteres!',
            ]);

        $vacuna = Vaccine::create($request->all());
        return redirect(Route('Vacunas.index'))->with('info',$request->name.' creado con exito!');
    }

    public function edit($id)
    {
        $vacuna = Vaccine::find($id);
        return view('Vacunas.editar')
        ->with('vacuna',$vacuna);
    }

    public function update(Request $request, $id)
    {
        $data = $request->validate(
            [
                'name'         =>  'required|min:5|max:30',
                'description'   =>  'required|min:10|max:100'
            ],
            [
                'name.required'         =>  'El titulo es requerido!',
                'name.min'              =>  'El titulo debe tener al menos 5 caracteres!',
                'name.max'              =>  'El titulo puede tener un maximo de 30 caracteres!',
                'description.required'  =>  'La descripcion es requerida!',
                'description.min'       =>  'La descripcion debe tener un minimo de 10 caracteres!',
                'description.max'       =>  'La descripcion puede tener un maximo de 100 caracteres!',
            ]);
        
        $vacuna = Vaccine::find($id)->update($request->all());
        return redirect(Route('Vacunas.index'))->with('info',$request->name.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $vacuna = Vaccine::find($id)->delete();
        return redirect(Route('Vacunas.index'))->with('info','Eliminado con exito!');
    }
}
