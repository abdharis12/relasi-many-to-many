<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengikutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data pertama
        DB::table('pengikuts')->insert([
            'sppd_id' => '1',
            'pegawai_id' => '2'
        ]);
        DB::table('pengikuts')->insert([
            'sppd_id' => '1',
            'pegawai_id' => '3'
        ]);
        DB::table('pengikuts')->insert([
            'sppd_id' => '2',
            'pegawai_id' => '4'
        ]);
        DB::table('pengikuts')->insert([
            'sppd_id' => '2',
            'pegawai_id' => '5'
        ]);
    }
}
