<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Templatesurat extends Model
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
