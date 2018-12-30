<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PeopleController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $personas = Person::orderBy('created_at','DESC')->paginate(10);
        return view('Personas.listar')
        ->with(compact('personas'));
    }

    public function show(){

    }

    public function destroy($id)
    {
        $personas = Person::find($id)->delete();
        return redirect(Route('Personas.index'))->with('info','Eliminado con exito!');
    }

    public function personSearch(Request $request){
       $personas = Person::orderBy('created_at','DESC')->persona($request->search)->paginate(5);
        return view('Personas.listar')
        ->with(compact('personas'));
    }
}
