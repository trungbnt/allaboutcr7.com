<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Achivement extends Model
{
    protected $table = "tblachivement";

    public function typeAchivement()
    {
    	return $this -> belongsTo('App\TypeAchivement', 'idTypeAchivement', 'id');
    }
}
