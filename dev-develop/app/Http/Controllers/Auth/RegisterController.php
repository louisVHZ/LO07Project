<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Storage;

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
            'prenom' => 'string|max:255',
            'name' => 'string|max:255',
            'email' => 'string|email|max:255|unique:users',
            'rue' => 'string|max:255',
            'ville' => 'string|max:255',
            'codePostal' => 'integer',
            'tel' => 'string|max:10',
            'dateDeNaissance' => 'date',
            'password' => 'string|min:6|confirmed',
            'photo' => 'image|mimes:jpg,png,jpeg,gif,svg',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        if($data['role'] == 'nounou'){
           return User::create([
            'role' => $data['role'],
            'prenom' => $data['prenom'],
            'name' => $data['name'],
            'email' => $data['email'],
            'ville' => $data['ville'],
            'tel' => $data['tel'],
            'dateDeNaissance' => $data['dateDeNaissance'],
            'password' => Hash::make($data['password']),
            'photo' => Storage::disk('img')->put('img2.png', $data['photo'])
        ]); 
        }  
        else {
            return User::create([
            'role' => $data['role'],
            'prenom' => $data['prenom'],
            'name' => $data['name'],
            'email' => $data['email'],
            'ville' => $data['ville'],
            'password' => Hash::make($data['password'])
        ]); 
        }
    }
}
