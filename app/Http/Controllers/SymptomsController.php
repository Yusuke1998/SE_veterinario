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

    public function create()
    {
        return view('Sintomas.crear');
    }

    public function store(Request $request)
    {
        $sintoma = Symptom::create($request->all());
        return redirect(Route('Sintomas.index'));
    }

    public function edit($id)
    {
        $sintoma = Symptom::find($id);
        return view('Sintomas.editar')
        ->with('sintoma',$sintoma);
    }

    public function update(Request $request, $id)
    {
        $sintoma = Symptom::find($id)->update($request->all());
        return redirect(Route('Sintomas.index'));
    }

    public function destroy($id)
    {
        $sintoma = Symptom::find($id)->delete();
        return redirect(Route('Sintomas.index'));
    }
}
