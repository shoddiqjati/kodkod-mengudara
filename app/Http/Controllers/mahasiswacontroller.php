<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listmhs;

class mahasiswacontroller extends Controller
{
    
     public function index()
    {
        return view('ListMahasiswa.listmhs');
    }

    public function getdata(){
    	$listmhs = Listmhs::paginate(10);

    	return view('ListMahasiswa.listmhs')->with('listmhs', $listmhs);
    }

}
