<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    

	protected $table = 'template_surat';

	public function mahasiswa()
    {
        return $this->hasMany('App\Recordmhs','nama_surat');
    }

    public function pegawai()
    {
        return $this->hasMany('App\Recordpgw','nama_surat');
    }
}
