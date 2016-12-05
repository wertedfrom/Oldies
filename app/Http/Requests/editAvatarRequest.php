<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class editAvatarRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return redirect('/updateAvatar');
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'avatar' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'avatar.required' => 'Debes subir un archivo como foto de perfil'
        ];
    }
}
