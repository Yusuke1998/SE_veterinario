<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InicioFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'firstname'         => 'required',
            'lastname'          => 'required',
            'email'             => 'required',
            'telephone'         => 'required',
            'address'           => 'required',
            'name'              => 'required',
            'weight'            => 'required',
            'weight_type'       => 'required',
            'age'               => 'required',
            'age_type'          => 'required',
            'animal_id'         => 'required',
            'race_id'           => 'required',
            'symptoms'          => 'required',
            'vaccines'          => 'required',
        ];
    }

    public function messages()
    {
        return [
            'firstname.required'    =>  'Los nombres del dueño son requeridos',
            'lastname.required'     =>  'Los apellidos del dueño son requeridos',
            'email.required'        =>  'El correo electronico del dueño es requerido',
            'telephone.required'    =>  'El telefono del dueño es requerido',
            'address.required'      =>  'La direccion del dueño es requerida',
            'name.required'         =>  'El nombre de la mascota es requerida',
            'weight.required'       =>  'El pseso de la mascota es requerida',
            'weight_type.required'  =>  'Debes definir el tipo de peso de tu mascota',
            'age.required'          =>  'La edad de tu mascota es requerida',
            'age_type.required'     =>  'El tipo de edad debe estar especificada',
            'animal_id.required'    =>  'Debes decir que tipo de animal tienes',
            'race_id.required'      =>  'Debes definir algo en la cuadro de raza',
            'symptoms.required'     =>  'Los sintomas son requeridos',
            'vaccines.required'     =>  'Las vacunas son necesarias',
        ];
    }
}
