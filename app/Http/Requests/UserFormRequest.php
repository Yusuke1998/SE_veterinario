<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UserFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username'  =>  'required|min:3|max:10|unique:users', 
            'email'     =>  'required|min:10|max:30|unique:users', 
            'password'  =>  'required|min:3|max:20',
            'is_admin'  =>  'required',
        ];
    }

    public function messages()
    {
        return [
            'username.required'     =>  'El nombre de usuario es requerido!',
            'username.min'          =>  'Son muy pocos caracteres para el nombre de usuario! Lo minimo es 3',
            'username.max'          =>  'Son muchos caracteres para el nombre de usuario! Lo maximo son 10',
            'username.unique'       =>  'El nombre de usuario esta repetido, intenta con otro!',
            'email.required'        =>  'El correo electronico es requerido!',
            'email.min'             =>  'El correo electronico debe tener minimo 10 caracteres',
            'email.max'             =>  'El correo electronico puede tener maximo 30 caracteres',
            'email.unique'          =>  'El correo electronico ya esta registrado, intenta con otro o recupera tu contraseña!',
            'password.required'     =>  'La contraseña es requerida!',
            'password.min'          =>  'La contraseña debe tener mas de 3 caracteres',
            'password.max'          =>  'La contraseña puede tener maximo 20 caracteres',
            'is_admin.required'     =>  'Debes especificar el tipo de usuario',
        ];
    }
}
