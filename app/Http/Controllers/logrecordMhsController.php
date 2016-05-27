<?php

namespace App\Http\Controllers;

use App\Listmhs;
use App\Recordmhs;
use Illuminate\Http\Request;

use App\Http\Requests;

class logrecordController extends Controller
{
    public function searchMhs(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = listmhs::all()->paginate(10);
            return view('getData.mhs')->with('result', $result);
        }
    }

    public function recordMhs($id) {
        $mhs = Listmhs::findOrFail($id);
        $record = recordmhs::all()->paginate(10);
        return view('getData.pwg', compact('record'))->with('mhs', $mhs);
    }

    public function searchRecordMhs(Request $request) {
        $cari = $request->get('mhs');
        if ($cari == '') {
            return redirect()->back();
        }
        else {
            $result = Recordmhs::all()->paginate(10);
            return view('getData.mhs')->with('result', $result);
        }
    }
}
