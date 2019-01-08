<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
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

    public function userSearch(Request $request)
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
        
        $usuarios = User::orderBy('created_at','DESC')->user($request->search)->paginate(10);
        return view('Usuarios.listar')
        ->with('usuarios',$usuarios);
    }

    public function create()
    {
        return view('Usuarios.crear');
    }

    public function store(UserFormRequest $request)
    {

        $usuario = User::create([
            'username'      =>  $request->username,
            'email'         =>  $request->email,
            'password'      =>  bcrypt($request->password),
            'is_admin'      =>  $request->is_admin
        ]);

        return redirect(Route('Usuarios.index'))->with('info',$request->username.' Creado con exito!');
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

        return redirect(Route('Usuarios.index'))->with('info',$request->username.' actualizado con exito!');
    }

    public function destroy($id)
    {
        $usuario = User::find($id)->delete();
        return redirect(Route('Usuarios.index'))->with('info','Eliminado con exito!');
    }
}
