<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listpgw;

class pegawaicontroller extends Controller
{
        public function index()
    {
        return view('ListPegawai.listpgw');
    }

     public function getdata(){
    	$listpgw = Listpgw::paginate(10);

    	return view('ListPegawai.listpgw')->with('listpgw', $listpgw);
    }


}
