<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilite extends Model {
    
    protected $table = 'Disponibilite';
    
    public $timestamps = false;

    protected $fillable = ['title','start_date','end_date'];
}
