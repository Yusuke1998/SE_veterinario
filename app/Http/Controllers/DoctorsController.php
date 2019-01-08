<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\DoctorFormRequest;
use App\Doctor;
use App\User;

class DoctorsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $doctores = Doctor::orderBy('created_at','DESC')->paginate(10);
        return view('Veterinarios.listar')->with('doctores',$doctores);
    }

    public function doctorSearch(Request $request)
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
        
        $doctores = Doctor::orderBy('created_at','DESC')->doctor($request->search)->paginate(10);
        return view('Veterinarios.listar')->with('doctores',$doctores);
    }

    public function destroy($id)
    {
        $doctores = Doctor::find($id)->delete();
        return redirect(Route('Veterinarios.index'))->with('info','Eliminado con exito!');
    }

    public function create()
    {
        return view('Veterinarios.crear');
    }

    public function store(DoctorFormRequest $request)
    {

        // return dd($request->all());

        $usuario = User::create([
            'username'      =>  $request->username,
            'email'         =>  $request->email,
            'password'      =>  bcrypt($request->password),
            'is_admin'      =>  $request->is_admin
        ]);

        $veterinario = Doctor::create([
            'firstname'     =>  $request->firstname,
            'lastname'      =>  $request->lastname,
            'email'         =>  $request->email,
            'telephone'     =>  $request->telephone,
            'address'       =>  $request->address,
            'user_id'       =>  $usuario->id
        ]);

        return redirect(Route('Veterinarios.index'))->with('info','Veterinario creado con exito!');
    }
}
