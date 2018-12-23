<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin');
    }

    public function index()
    {
        $usuarios = User::orderBy('created_at','DESC')->paginate(5);
        return view('Usuarios.listar')
        ->with('usuarios',$usuarios);
    }

    public function create()
    {
        return view('Usuarios.crear');
    }

    public function store(Request $request)
    {
        $usuario = User::create([
            'username'      =>  $request->username,
            'email'         =>  $request->email,
            'password'      =>  bcrypt($request->password),
            'is_admin'      =>  $request->is_admin
        ]);

        return redirect(Route('Usuarios.index'));
    }

    public function edit($id)
    {
        $usuario = User::find($id);

        return view('Usuarios.editar')
        ->with('usuario',$usuario);
    }

    public function update(Request $request, $id)
    {
        $usuario = User::find($id)->update([
            'username'      =>  $request->username,
            'email'         =>  $request->email,
            'password'      =>  bcrypt($request->password),
            'is_admin'      =>  $request->is_admin
        ]);

        return redirect(Route('Usuarios.index'));
    }

    public function destroy($id)
    {
        $usuario = User::find($id)->delete();
        return redirect(Route('Usuarios.index'));
    }
}
