<?php

namespace App\Http\Controllers;

use App\Listpgw;
use App\Recordpgw;
use Illuminate\Http\Request;

use App\Http\Requests;

class logrecordPgwController extends Controller
{
//    public function getData() {
//        $listPgw = Listpgw::all();
//
//        return view('getData.listmhs')->with('recordmhs', $listPgw);
//    }

    public function searchPgw(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = listpgw::all()->paginate(10);
            return view('getData.pgw')->with('result', $result);
        }
    }

    public function recordPgw($id) {
        $pgw = Listpgw::findOrFail($id);
        $record = recordpgw::all()->paginate(10);
        return view('getData.pwg', compact('record'))->with('mhs', $pgw);
    }

    public function searchRecordMhs(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = Recordpgw::all()->paginate(10);
            return view('getData.pgw')->with('result', $result);
        }
    }
}
