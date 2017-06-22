<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeAchivement extends Model
{
    protected $table = "tbltypeachivement";

    public function achivement()
    {
    	return $this -> hasMany('App\Achivement', 'idTypeAchivement', 'id');
    }
}
