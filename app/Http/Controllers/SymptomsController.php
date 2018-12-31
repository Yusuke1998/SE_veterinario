<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Symptom;

class SymptomsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $sintomas = Symptom::orderBy('created_at','DESC')->paginate(10);
        return view('Sintomas.listar')
        ->with('sintomas',$sintomas);
    }

    public function symptomSearch(Request $request)
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
        
        $sintomas = Symptom::orderBy('created_at','DESC')->symptom($request->search)->paginate(10);
        return view('Sintomas.listar')
        ->with('sintomas',$sintomas);
    }

    public function create()
    {
        return view('Sintomas.crear');
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

        $sintoma = Symptom::create($request->all());
        return redirect(Route('Sintomas.index'))->with('info',$request->name.' creado con exito!');
    }

    public function edit($id)
    {
        $sintoma = Symptom::find($id);
        return view('Sintomas.editar')
        ->with('sintoma',$sintoma);
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
        
        $sintoma = Symptom::find($id)->update($request->all());
        return redirect(Route('Sintomas.index'))->with('info',$request->name.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $sintoma = Symptom::find($id)->delete();
        return redirect(Route('Sintomas.index'))->with('info','Eliminado con exito!');
    }
}
