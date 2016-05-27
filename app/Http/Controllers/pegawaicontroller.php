<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listpgw;

use App\Recordpgw;

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

      $result = listpgw::where('nama', 'LIKE', '%'.$cari.'%')->orWhere('nip', 'LIKE', '%'.$cari.'%')->orWhere('unit_kerja', 'LIKE', '%'.$cari.'%')->orWhere('pangkat', 'LIKE', '%'.$cari.'%')->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListPegawai.listpgwcari')->with('result', $result);
    
        }
    }


    public function recordpgw($id) {
         $pgw = Listpgw::findOrFail($id);
         $record = Recordpgw::where('pgw_id', 'LIKE', $id)->paginate(10);
        return view('ListPegawai.recordpgw', compact('record'))->with('pgw', $pgw);
    }



     public function searchrecordpgw(Request $request, $id) {
      $cari = $request->get('mhs');

      $pgwi = Listpgw::findOrFail($id);
      // if($cari==''){
      //   // return redirect('admin/listspd');
      //   return redirect()->back(); 
      // }

      // else{

      $result = Recordpgw::where('nama_surat', 'LIKE', '%'.$cari.'%')->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListPegawai.recordpgwcari')->with('result', $result)->with('pgwi', $pgwi);
    
        // }
    }


}
