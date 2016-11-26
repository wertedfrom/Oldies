<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editPublicationRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return redirect('/publications/update');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:50',
            'description' => 'required|max:500',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|numeric|min:1',
            'categorie_id' => 'required',
        ];
    }

    public function messages()
    {
        return [
            'title.required' => 'Debes ingresar un título',
            'title.max' => 'Has superado el máximo de 50 caracteres',
            'description.required' => 'Debes ingresar una descripción',
            'description.max' => 'Has superado el máximo de 500 caracteres',
            'price.required' => 'Debes ingresar un precio',
            'price.numeric' => 'Debes ingresar un número',
            'price.min' => 'El precio no puede ser negativo',
            'stock.required' => 'Debes ingresar la cantidad de stock',
            'stock.numeric' => 'Debes ingresar un número',
            'stock.min' => 'El stock debe ser 1 como mínimo',
            'categorie_id.required' => 'Debes seleccionar una categoría',
        ];
    }
}
