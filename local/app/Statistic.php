<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Statistic extends Model
{
    protected $table = "tblstatistic";

    public function typeStatistic()
    {
    	return $this -> belongsTo('App\TypeStatistic', 'idTypeStatistic', 'id');
    }

    public function typeLeague()
    {
    	return $this -> belongsTo('App\TypeLeague', 'idTypeLeague', 'id');
    }
}
