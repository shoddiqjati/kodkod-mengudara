<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listmhs;

use App\Recordmhs;


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


     public function searchmhs(Request $request) {
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

     public function recordmhs($id) {
         $mhs = Listmhs::findOrFail($id);
         $record = Recordmhs::where('mhs_id', 'LIKE', $id)->paginate(10);
        return view('ListMahasiswa.recordmhs', compact('record'))->with('mhs', $mhs);
    }


     public function searchrecordmhs(Request $request, $id) {
      $cari = $request->get('mhs');

      $mhsw = Listmhs::findOrFail($id);
      // if($cari==''){
      //   // return redirect('admin/listspd');
      //   return redirect()->back(); 
      // }

      // else{

      $result = Recordmhs::where('nama_surat', 'LIKE', '%'.$cari.'%')->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListMahasiswa.recordmhscari')->with('result', $result)->with('mhsw', $mhsw);
    
        // }
    }



}
