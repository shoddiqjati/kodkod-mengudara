<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'list_mhs';

	public function id()
    {
        return $this->hasMany('App\Recordmhs','id');
    }
}
