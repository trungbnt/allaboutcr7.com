<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeLeague extends Model
{
    protected $table = "tbltypeleague";

    public function league()
    {
    	return $this -> hasMany('App\Statistic', 'idTypeLeague', 'id');
    }
}
