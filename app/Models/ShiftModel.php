<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ShiftModel extends Model
{
    use HasFactory;
    public function getall()
    {
        return DB::table('tb_shift')->get();
    }
    public function insert($data)
    {
        DB::table('tb_shift')->insert($data);
    }
}
