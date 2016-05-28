<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listpgw;

use App\Recordpgw;

use Auth;

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
      $cari = $request->get('pgw');
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
         $record = Recordpgw::where('pgw_id', 'LIKE', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('ListPegawai.recordpgw', compact('record'))->with('pgw', $pgw);
    }



     public function searchrecordpgw(Request $request, $id) {
      $cari = $request->get('pgw');

      $pgwi = Listpgw::findOrFail($id);
      // if($cari==''){
      //   // return redirect('admin/listspd');
      //   return redirect()->back(); 
      // }

      // else{

      if($cari==''){
        // return redirect('admin/listspd');
        return redirect()->back(); 
      }

      else{

      $result = Recordmhs::where('nama_surat', 'LIKE', '%'.$cari.'%')
        ->where('pgw_id', '=', $pgwi)->orderBy('created_at', 'desc')
        ->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListPegawai.recordpgwcari')->with('result', $result)->with('pgwi', $pgwi);
    
        // }
      }
    }


     public function data(){
      $name = Auth::user()->name;

      $lstpgw = Listpgw::where('nama', 'LIKE', $name)->get();

      foreach ($lstpgw as $list) {
        $lst = $list->id;
      }
        
      $rcdpgw = Recordpgw::where('pgw_id', 'LIKE', $lst)->orderBy('created_at', 'desc')->paginate(10);
      
      return view('ListPegawai.datarcdpgw')->with('rcdpgw', $rcdpgw);
    }

    public function dftrcdpgwcari(Request $request) {

      $name = Auth::user()->name;

      $lstpgw = Listpgw::where('nama', 'LIKE', $name)->get();

      foreach ($lstpgw as $list) {
        $lst = $list->id;
      }
        
      $rcdpgw = Recordpgw::where('pgw_id', 'LIKE', $lst)->orderBy('created_at', 'desc')->paginate(10);

      $cari = $request->get('rcd');
      if($cari==''){
        // return redirect('admin/listspd');
        return redirect()->back(); 
      }

      else{

      $result = Recordpgw::where('nama_surat', 'LIKE', '%'.$cari.'%')->where(function($query)
        { 
          $name = Auth::user()->name;

          $lstpgw = Listpgw::where('nama', 'LIKE', $name)->get();

          foreach ($lstpgw as $list) {
            $lst = $list->id;
          }
          $query->where('pgw_id', 'LIKE', $lst);
        })
          ->orWhere('no_surat', 'LIKE', '%'.$cari.'%')->where(function($query)
        { 
          $name = Auth::user()->name;

          $lstpgw = Listpgw::where('nama', 'LIKE', $name)->get();

          foreach ($lstpgw as $list) {
            $lst = $list->id;
          }
          $query->where('pgw_id', 'LIKE', $lst);
        })
          ->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->where(function($query)
        { 
          $name = Auth::user()->name;

          $lstpgw = Listpgw::where('nama', 'LIKE', $name)->get();

          foreach ($lstpgw as $list) {
            $lst = $list->id;
          }
          $query->where('pgw_id', 'LIKE', $lst);
        })
      ->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListPegawai.datarcdpgwcari')->with('result', $result);
  
        }
    }
}
