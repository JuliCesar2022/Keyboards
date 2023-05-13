<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/app';

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
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'telefono' => ['required', 'string', 'min:8'],
            'Pais' => ['required','in:colombia,brasil'],
            'Ciudad' => ['required','in:Sao paulo,Rio de janeiro,Cartagena,Bogota,Barranquilla'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ],
            [
                'Pais.required'=> 'El pais es requerido',
                'Ciudad.required'=> 'La ciudad es requerida',
                'password.min'=>'La contraseña debe ser de 8 caracteres',
                'password.confirmed'=>'Las contraseñas no coinciden',
                'Ciudad.in'=>'Ciudad no valida',
                'Pais.in'=>'El pais no es valido'


            ]
        );
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telefono'=>$data['telefono'],
            'apellido'=>$data['apellido'],
            'identificacion'=>$data['identificacion'],
            'Ciudad'=>$data['Ciudad'],
            'Pais'=>$data['Pais'],
            'direccion'=>$data['direccion'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
