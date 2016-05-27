<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'list_pgw';

	public function id()
    {
        return $this->hasMany('App\Recordpgw','id');
    }
}
