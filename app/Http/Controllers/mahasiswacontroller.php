<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Listmhs;

use App\Recordmhs;

use Auth;


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
         $record = Recordmhs::where('mhs_id', 'LIKE', $id)->orderBy('created_at', 'desc')->paginate(10);
        return view('ListMahasiswa.recordmhs', compact('record'))->with('mhs', $mhs);
    }


     public function searchrecordmhs(Request $request, $id) {
      $cari = $request->get('mhs');

      $mhsw = Listmhs::findOrFail($id);

      if($cari==''){
        // return redirect('admin/listspd');
        return redirect()->back(); 
      }

      else{

      $result = Recordmhs::where('nama_surat', 'LIKE', '%'.$cari.'%')
        ->where('mhs_id', '=', $mhsw)->orderBy('created_at', 'desc')
        ->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListMahasiswa.recordmhscari')->with('result', $result)->with('mhsw', $mhsw);
  
        }
    
        // }
    }


     public function data(){
      $name = Auth::user()->name;

      $lstmhs = Listmhs::where('nama', 'LIKE', $name)->get();

      foreach ($lstmhs as $list) {
        $lst = $list->id;
      }
        
      $rcdmhs = Recordmhs::where('mhs_id', 'LIKE', $lst)->orderBy('created_at', 'desc')->paginate(10);
      
      return view('ListMahasiswa.datarcdmhs')->with('rcdmhs', $rcdmhs);
    }


    public function dftrcdmhscari(Request $request) {

      $name = Auth::user()->name;

      $lstmhs = Listmhs::where('nama', 'LIKE', $name)->get();

      foreach ($lstmhs as $list) {
        $lst = $list->id;
      }
        
      $rcdmhs = Recordmhs::where('mhs_id', 'LIKE', $lst)->orderBy('created_at', 'desc')->paginate(10);

      $cari = $request->get('rcd');
      if($cari==''){
        // return redirect('admin/listspd');
        return redirect()->back(); 
      }

      else{


      $result = Recordmhs::where('nama_surat', 'LIKE', '%'.$cari.'%')->where(function($query)
        { 
          $name = Auth::user()->name;

          $lstmhs = Listmhs::where('nama', 'LIKE', $name)->get();

          foreach ($lstmhs as $list) {
            $lst = $list->id;
          }
          $query->where('mhs_id', 'LIKE', $lst);
        })
          ->orWhere('no_surat', 'LIKE', '%'.$cari.'%')->where(function($query)
        { 
          $name = Auth::user()->name;

          $lstmhs = Listmhs::where('nama', 'LIKE', $name)->get();

          foreach ($lstmhs as $list) {
            $lst = $list->id;
          }
          $query->where('mhs_id', 'LIKE', $lst);
        })
          ->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->where(function($query)
        { 
          $name = Auth::user()->name;

          $lstmhs = Listmhs::where('nama', 'LIKE', $name)->get();

          foreach ($lstmhs as $list) {
            $lst = $list->id;
          }
          $query->where('mhs_id', 'LIKE', $lst);
        })->orderBy('created_at', 'desc')
      ->paginate(10);
        // \Session::flash('flash_message', 'Data pegawai telah dihapus');
        // return Redirect('admin/listspd');
        return view('ListMahasiswa.datarcdmhscari')->with('result', $result);
  
        }
    }

}
