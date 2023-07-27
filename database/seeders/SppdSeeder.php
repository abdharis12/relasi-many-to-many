<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SppdSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data pertama
        DB::table('sppds')->insert([
            'no_sppd' => '123/1/Bapenda-1/2023',
            'pegawai_id' => '1',
            'maksud' => 'Sosialisasi Anggaran Pajak Daerah'
        ]);
        DB::table('sppds')->insert([
            'no_sppd' => '123/2/Bapenda-1/2023',
            'pegawai_id' => '2',
            'maksud' => 'Sosialisasi Anggaran Pajak Daerah'
        ]);
        DB::table('sppds')->insert([
            'no_sppd' => '123/3/Bapenda-1/2023',
            'pegawai_id' => '3',
            'maksud' => 'Sosialisasi Anggaran Pajak Daerah'
        ]);
        DB::table('sppds')->insert([
            'no_sppd' => '123/4/Bapenda-1/2023',
            'pegawai_id' => '4',
            'maksud' => 'Sosialisasi Anggaran Pajak Daerah'
        ]);
        DB::table('sppds')->insert([
            'no_sppd' => '123/5/Bapenda-1/2023',
            'pegawai_id' => '5',
            'maksud' => 'Sosialisasi Anggaran Pajak Daerah'
        ]);
    }
}
