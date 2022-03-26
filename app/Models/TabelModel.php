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

}
