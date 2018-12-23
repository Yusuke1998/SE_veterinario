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
        return view('Personas.listar')->with('personas',$personas);
    }

    public function destroy($id)
    {
        $personas = Person::find($id)->delete();
        return redirect(Route('Personas.index'));
    }
}
