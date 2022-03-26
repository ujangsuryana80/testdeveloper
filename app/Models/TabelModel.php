<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TabelModel extends Model
{

    public function addData($data)
    {
         DB::table('tabel')->insert($data);
    }

    public function allData()
    {
         return DB::table('tabel')->get();
    }

    public function detailData($id_tabel)
    {
         return DB::table('tabel')->where('id_tabel', $id_tabel)->first();
    }

    public function editData($id_tabel, $data)
    {
         DB::table('tabel')
            ->where('id_tabel', $id_tabel)
            ->update($data);
    }

    public function deleteData($id_tabel)
    {
         DB::table('tabel')
            ->where('id_tabel', $id_tabel)
            ->delete();
    }

}
