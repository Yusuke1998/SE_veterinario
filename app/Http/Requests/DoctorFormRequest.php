<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DoctorFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'username'  =>  'required|min:3|max:20|unique:users', 
            'email'     =>  'required|min:10|max:40|unique:users', 
            'password'  =>  'required|min:3|max:30',
            'is_admin'  =>  'required',
            'firstname' =>  'required|min:5|max:30',
            'lastname'  =>  'required|min:5|max:30',
            'telephone' =>  'required|numeric',
            'address'   =>  'required|min:10|max:100',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required'    =>  'El o los nombres son requeridos!',
            'firstname.min'         =>  'El o los nombres debe tener minimo 5 caracteres!',
            'firstname.max'         =>  'El o los nombres no puede tener mas de 30 caracteres!',
            'lastname.required'     =>  'El o los apellidos son requeridos!',
            'lastname.min'          =>  'El o los apellidos debe tener minimo 5 caracteres!',
            'lastname.max'          =>  'El o los apellidos no puede tener mas de 30 caracteres!',
            'telephone.required'    =>  'El número telefonico es requerido!',
            'telephone.numeric'     =>  'El número telefonico requiere caracteres estrictamente numericos!',
            // 'telephone.min'         =>  'El número telefonico debe tener minimo 5 caracteres numericos!',
            // 'telephone.max'         =>  'El número telefonico puede tener maximo 30 caracteres numericos!',
            'address.required'      =>  'La direccion es requerida!',
            'address.min'           =>  'La direccion debe tener minimo 10 caracteres!',
            'address.max'           =>  'La direccion puede tener un maximo de 100 caracteres!',
            'username.required'     =>  'El nombre de usuario es requerido!',
            'username.min'          =>  'Son muy pocos caracteres para el nombre de usuario! Lo minimo es 3',
            'username.max'          =>  'Son muchos caracteres para el nombre de usuario! Lo maximo son 20',
            'username.unique'       =>  'El nombre de usuario esta repetido, intenta con otro!',
            'email.required'        =>  'El correo electronico es requerido!',
            'email.min'             =>  'El correo electronico debe tener minimo 10 caracteres',
            'email.max'             =>  'El correo electronico puede tener maximo 40 caracteres',
            'email.unique'          =>  'El correo electronico ya esta registrado, intenta con otro o recupera tu contraseña!',
            'password.required'     =>  'La contraseña es requerida!',
            'password.min'          =>  'La contraseña debe tener mas de 3 caracteres',
            'password.max'          =>  'La contraseña puede tener maximo 20 caracteres',
            'is_admin.required'     =>  'Debes especificar el tipo de usuario',
        ];
    }
}
