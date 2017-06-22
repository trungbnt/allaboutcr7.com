<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Club extends Model
{
    protected $table = "tblclub";

    public function typeClub() {
    	return $this -> belongsTo('App\TypeClub', 'idTypeClub', 'id');
    }
}
