<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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

    public function destroy($id)
    {
        $doctores = Doctor::find($id)->delete();
        return redirect(Route('Veterinarios.index'));
    }

    public function create(){
        return view('Veterinarios.crear');
    }

    public function store(Request $request){

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

        return redirect(Route('Veterinarios.index'));
    }
}
