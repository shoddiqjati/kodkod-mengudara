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


    public function searchpgw(Request $request) {
      $cari = $request->get('mhs');
      if($cari==''){
        // return redirect('admin/listspd');
        return redirect()->back(); 
      }

      else{

      $result = listmhs::where('nama', 'LIKE', '%'.$cari.'%')->orWhere('niu', 'LIKE', '%'.$cari.'%')->orWhere('nif', 'LIKE', '%'.$cari.'%')->orWhere('fakultas', 'LIKE', '%'.$cari.'%')->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListMahasiswa.listmhscari')->with('result', $result);
    
        }
    }


}
