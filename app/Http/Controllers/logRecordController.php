<?php

namespace App\Http\Controllers;

use App\Recordmhs;
use App\Recordpgw;
use Illuminate\Http\Request;

use App\Http\Requests;

class logRecordController extends Controller
{
    public function getData() {
        $recordMhs = Recordmhs::all();
        $recordPgw = Recordpgw::all();

        return view('Records.recordadm')->with('recordMhs', $recordMhs)->with('recordPgw', $recordPgw);
    }

    public function searchRecord(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = Recordmhs::where('nama_surat', 'LIKE', '%'.$cari.'%')->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->paginate(10);
            $recordPgw = Recordpgw::where('nama_surat', 'LIKE', '%'.$cari.'%')->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->paginate(10);
            return view('Records.recordadmcari')->with('result', $result)->with('recordPgw',$recordPgw );
        }
    }


    public function update(Request $request, $id){
            

            $temp = Recordmhs::find($id);
            
            if($temp != null){

            $temp->status = $request->get('stat1');
            $temp->save();

            }

$template = Recordpgw::find($id);

            if($template != null){
            $template->status = $request->get('stat2');
            $template->save();
            }


    return redirect('admin/record');
    }
}
