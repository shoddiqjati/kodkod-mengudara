<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'record_pgw';

    public function pegawai()
	{
		return $this->belongsTo('App\Listpgw','pgw_id');
	}

	public function surat()
	{
		return $this->belongsTo('App\Templatesurat','nama_surat');
	}
}
