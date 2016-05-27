<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'record_mhs';

    public function mahasiswa()
	{
		return $this->belongsTo('App\Listmhs','mhs_id');
	}

	public function surat()
	{
		return $this->belongsTo('App\Templatesurat','nama_surat');
	}
}
