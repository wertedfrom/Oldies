<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editProfileRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return redirect('/profile');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:255',
            'lastname' => 'required|max:255',
            'phone' => 'required|max:30',
            'gender' => 'required|max:20',
            'birthdate' => 'required|date',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'No has ingresado tu nombre',
            'name.max' => 'El nombre ingresado supera el máximo de caracteres permitidos',
            'lastname.required' => 'No has ingresado tu apellido',
            'phone.required' => 'No has ingresado tu teléfono',
            'phone.max' => 'El teléfono ingresado supera el máximo de caracteres permitidos',
            'gender.required' => 'No has elegido tu sexo',
            'gender.max' => 'El género ingresado supera el máximo de caracteres permitidos',
            'birthdate.required' => 'No has ingresado tu fecha de nacimiento',
            'birthdate.date' => 'El formato de la fecha ingresada no es válido'
        ];
    }
}
