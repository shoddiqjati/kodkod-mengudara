<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listpgw extends Model
{
    

	protected $table = 'list_pgw';

	public function id()
    {
        return $this->hasMany('App\Recordpgw','id');
    }
}
