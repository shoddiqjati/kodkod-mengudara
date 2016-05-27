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

        return view('Records.recordadm')->with('record', $recordMhs);
    }

    public function searchRecord(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = Recordmhs::where('nama_surat', 'LIKE', '%'.$cari.'%')->orWhere('keterangan', 'LIKE', '%'.$cari.'%')->paginate(10);
            return view('Records.recordadmicari')->with('result', $result);
        }
    }
}
