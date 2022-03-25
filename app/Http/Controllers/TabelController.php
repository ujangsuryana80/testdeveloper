<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;

class TabelController extends Controller
{

    public function index()
    {
        return view('v_tabel');
    }


    public function add()
    {
        return view('v_tables_add');
    }

    public function edit()
    {

        return view('v_edittabel');
    }

   

}