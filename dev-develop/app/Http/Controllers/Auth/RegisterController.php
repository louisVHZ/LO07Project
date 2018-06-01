<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
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
            'role' => 'required|in:nounou,parent',
            'prenom' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'rue' => 'required|string|max:255',
            'ville' => 'required|string|max:255',
            'codePostal' => 'required|integer',
            'tel' => 'required|string|max:10',
            'dateDeNaissance' => 'required|date',
            'password' => 'required|string|min:6|confirmed',
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
        
        return User::create([
            'prenom' => $data['prenom'],
            'name' => $data['name'],
            'email' => $data['email'],
            'rue' => $data['rue'],
            'ville' => $data['ville'],
            'codePostal' => $data['codePostal'],
            'tel' => $data['tel'],
            'dateDeNaissance' => $data['dateDeNaissance'],
            'password' => Hash::make($data['password']),
            'photo' => $this->photoUpload($data),
        ]);
    }

    /**
     * Upload a photo
     *
     * @param  array $data
     * @return $name of the photo
     */
    protected function photoUpload(array $data) 
    {
        if ($data[hasFile('photo')]) {
            $image = $data->file('photo');
            $name = $image->getClientOriginalExtension();
            $destinationPath = public_path('/img');
            $image->move($destinationPath, $name);
            $this->save();

            return $name;
        }
    }
}
