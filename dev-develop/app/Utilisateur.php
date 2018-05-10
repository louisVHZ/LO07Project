<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model {

    protected $table = 'Utilisateur';
    
    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'motdepasse',
    ];

}
