<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ShiftSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_shift')->insert([
            [
                'nama_shift' => 'pagi',
                'jam_mulai' => '07:00:00',
                'jam_akhir' => '11:00:00',
            ],
            [
                'nama_shift' => 'siang',
                'jam_mulai' => '13:00:00',
                'jam_akhir' => '17:00:00',
            ],
            [
                'nama_shift' => 'malam',
                'jam_mulai' => '19:00:00',
                'jam_akhir' => '23:00:00',
            ]

        ]);
    }
}
