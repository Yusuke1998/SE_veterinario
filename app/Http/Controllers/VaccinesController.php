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

    public function create()
    {
        return view('Vacunas.crear');
    }

    public function store(Request $request)
    {
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
        $vacuna = Vaccine::find($id)->update($request->all());
        return redirect(Route('Vacunas.index'))->with('info',$request->name.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $vacuna = Vaccine::find($id)->delete();
        return redirect(Route('Vacunas.index'))->with('info','Eliminado con exito!');
    }
}
