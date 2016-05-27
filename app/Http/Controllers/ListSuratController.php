<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Templatesurat;

class ListSuratController extends Controller
{
    public function index() {
       return view('home');
    }

    public function getData() {
        $templatesurat = Templatesurat::paginate(10);

        return view('home')->with('templatesurat', $templatesurat);
    }


}
