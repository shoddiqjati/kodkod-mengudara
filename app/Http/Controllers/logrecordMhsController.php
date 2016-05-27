<?php

namespace App\Http\Controllers;

use App\Recordmhs;
use Illuminate\Http\Request;

use App\Http\Requests;

class logrecordController extends Controller
{
    public function getData() {
        $recordMhs = Recordmhs::all();

        return view('getData.listmhs')->with('recordmhs', $recordMhs);
    }

    public function searchMhs(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = listmhs::paginate(10);
            return view('getData.listmhscari')->with('result', $result);
        }
    }
    
    public function recordMhs(Request $request, $id) {
        $mhs = Listmhs::findOrFail($id);
        $record = recordmhs::all()->paginate(10);
        return view('getData.recordmhs', compact('record'))->with('mhs', $mhs);
    }

    public function searchRecordMhs(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = Recordmhs::all()->paginate(10);
            return view('getData.recordmhscari')->with('result', $result);
        }
    }
}
