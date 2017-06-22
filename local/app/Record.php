<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    protected $table = "tblrecord";

    public function typeRecord()
    {
    	return $this -> belongsTo('App\TypeRecord', 'idTypeRecord', 'id');
    }
}
