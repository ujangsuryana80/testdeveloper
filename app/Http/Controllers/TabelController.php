<?php

namespace App\Http\Controllers;

use illuminate\Http\Request;
use App\Models\TabelModel;

class TabelController extends Controller
{
    public function __construct()
    {
        $this->TabelModel = new TabelModel();
    }

    public function index()
    {
        $data = [
            'tabel' => $this->TabelModel->allData(),
        ];
        return view('v_tabel', $data);
    }


    public function add()
    {
        return view('v_tables_add');
    }

    public function edit()
    {

        return view('v_edittabel');
    }

    public function insert()
    {

        Request()->validate([
            'nama'       => 'required',
            'email'       => 'required',
            'email' => 'required|unique:tabel',
            'foto' => 'required|mimes:jpg,jpeg,bmp,png|max:1024',
        ],[
            'nama.required' => 'data nama wajib diisi !!',
            'email.required' => 'data email wajib diisi !!',
            'email.unique' => 'email ini sudah ada !!',
            'foto.required' => 'data foto wajib diisi !!',
        ]);

        //upload gambar/foto
        $file       = Request()->foto;
        $fileName   = Request()->nama . '.' . $file->extension();
        $file->move(public_path('bootsrap/images/gallery'), $fileName);

        $data = [
            'nama'   => Request()->nama,
            'email'  => Request()->email,
            'foto'   => $fileName,
        ];

        $this->TabelModel->addData($data);
        return redirect()->route('tabel')->with('pesan', 'Data berhasil ditambahkan');

    }

   

}