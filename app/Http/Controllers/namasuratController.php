<?php

namespace App\Http\Controllers;

use App\Templatesurat;
use Illuminate\Http\Request;

use App\Http\Requests;

class namasuratController extends Controller
{
    public function index() {

    }

    public function getData() {
        $namasurat = Templatesurat::get();

        return view('home')->with('namasurat', $namasurat);
    }
}
