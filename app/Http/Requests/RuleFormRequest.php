<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RuleFormRequest extends FormRequest
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

            'title'             =>  'required|min:5|max:30',
            'description'       =>  'required|min:10|max:100',
            'treatment'         =>  'required|min:10|max:100',
            'animal_id'         =>  'required',
            'age_1'             =>  'required|numeric',
            'age_type_1'        =>  'required',
            'weight_1'          =>  'required|numeric',
            'weight_type_1'     =>  'required',
            'symptoms'          =>  'required',

            'age_2'             =>  'nullable',
            'weight_2'          =>  'nullable', 
            'race_id'           =>  'nullable',
            'doctor_id'         =>  'nullable',
            'weight_type_2'     =>  'nullable',
            'age_type_2'        =>  'nullable'
        ];
    }

    public function messages()
    {
        return [
            'title.required'        =>  'El titulo es requerido!',
            'title.min'             =>  'El titulo debe contener al menos 5 caracteres!',
            'title.max'             =>  'El titulo puede tener un maximo de 30 caracteres!',

            'description.required'  =>  'La descripcion es requerida!',
            'description.min'       =>  'La descripcion debe tener un minimo de 10 caracteres!',
            'description.max'       =>  'La descripcion puede tener un maximo de 100 caracteres!',

            'treatment.required'    =>  'El tratamiento es requerido!',
            'treatment.min'         =>  'El tratamiento debe tener un minimo de 10 caracteres!',
            'treatment.max'         =>  'El tratamiento puede tener un maximo de 100 caracteres!',

            'symptoms.required'     =>  'Los sintomas son requeridos!',

            'age_1.numeric'         =>  'La edad debe ser numerica!',
            'age_1.required'        =>  'La edad es requerida!',
            'age_type_1.required'   =>  'El tipo de edad es requerido!',

            'weight_1.numeric'      =>  'El peso debe ser numerico!',
            'weight_1.required'     =>  'El peso es requerido!',
            'weight_type_1.required'=>  'El tipo de peso es requerido!'
        ];
    }
}
