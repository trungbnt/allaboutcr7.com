<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeStatistic extends Model
{
    protected $table = "tbltypestatistic";

    public function statistic()
    {
    	return $this -> hasMany('App\Statistic', 'idTypeStatistic', 'id');
    }
}
