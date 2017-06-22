<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeRecord extends Model
{
    protected $table = "tbltyperecord";

    public function record()
    {
    	return $this -> hasMany('App\Record', 'idTypeRecord', 'id');
    }
}
