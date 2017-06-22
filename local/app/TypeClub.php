<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeClub extends Model
{
    protected $table = "tbltypeclub";

    public function club() {
    	return $this -> hasMany('App\Club', 'idTypeClub', 'id');
    }
}
