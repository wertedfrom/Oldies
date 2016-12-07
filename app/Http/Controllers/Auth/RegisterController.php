<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'lastname' => 'required|max:255',
            'phone' => 'required|max:30',
            'gender' => 'required|max:20',
            'birthdate' => 'required|date',
        ],[
            'name.required' => 'No has ingresado tu nombre',
            'name.max' => 'El nombre ingresado supera el máximo de caracteres permitidos',
            'email.required' => 'No has ingresado tu email',
            'email.email' => 'El formato de email ingresado no es valido',
            'email.max' => 'El email ingresado supera el máximo de caracteres permitidos',
            'email.unique' => 'Este email ya ha sido registrado',
            'password.required' => 'No has ingresado la contraseña',
            'password.min' => 'La contraseña debe tener 6 caracteres como mínimo',
            'password.confirmed' => 'La confirmación no coincide con la contraseña ingresada',
            'lastname.required' => 'No has ingresado tu apellido',
            'phone.required' => 'No has ingresado tu teléfono',
            'phone.max' => 'El teléfono ingresado supera el máximo de caracteres permitidos',
            'gender.required' => 'No has elegido tu sexo',
            'gender.max' => 'El género ingresado supera el máximo de caracteres permitidos',
            'birthdate.required' => 'No has ingresado tu fecha de nacimiento',
            'birthdate.date' => 'El formato de la fecha ingresada no es válido'
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
            'lastname' => $data['lastname'],
            'phone' => $data['phone'],
            'gender' => $data['gender'],
            'birthdate' => $data['birthdate'],
            'url_image' => 'avatars/no-image.jpg',
        ]);
    }
}