<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    public $timestamps = false;

    protected $fillable = ['name', 'prenom', 'dateDeNaissance', 'rue', 'ville', 'codePostal', 'tel', 'email','password', 'photo'];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * Check if this user is an admin
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->admin == 1;
    }
}
