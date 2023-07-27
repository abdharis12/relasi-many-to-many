<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //data pertama
        DB::table('pegawais')->insert([
            'nip' => '1234524910',
            'nama' => 'Feri Sonevel, S.E',
            'pangkat' => 'Pembina Tingkat I - IV/b',
            'jabatan' => 'Kepala Badan Pendapatan Daerah',
            // 'alamat' => 'Jl Tjik Agoes',
            // 'no_hp' => '16656910',
            // 'email' => 'kaban@gmail.com'
        ]);

        DB::table('pegawais')->insert([
            'nip' => '12345555610',
            'nama' => 'Suhardi, S.E',
            'pangkat' => 'Pembina - IV/a',
            'jabatan' => 'Sekretaris Pendapatan Daerah',
            // 'alamat' => 'Jl Tjik Agoes',
            // 'no_hp' => '166568910',
            // 'email' => 'sekban@gmail.com'
        ]);

        DB::table('pegawais')->insert([
            'nip' => '14545555910',
            'nama' => 'Ryan Datu Amas, S.Ikom',
            'pangkat' => 'Pembina - IV/a',
            'jabatan' => 'Kepala Bidang II Pendapatan Daerah',
            // 'alamat' => 'Jl Tjik Agoes',
            // 'no_hp' => '166576910',
            // 'email' => 'kabid@gmail.com'
        ]);

        DB::table('pegawais')->insert([
            'nip' => '12345678910',
            'nama' => 'Anggun Purwaningsih, S.Kom',
            'pangkat' => 'Penata Muda - III/a',
            'jabatan' => 'Staf Kasubbid I',
            // 'alamat' => 'Jl Tjik Agoes',
            // 'no_hp' => '123456910',
            // 'email' => 'anggun@gmail.com'
        ]);

        DB::table('pegawais')->insert([
            'nip' => '123456789',
            'nama' => 'Abdul Haris, S.Kom',
            'pangkat' => 'Penata Muda Tingkat I - III/b',
            'jabatan' => 'Kasubbid I',
            // 'alamat' => 'Jl Tjik Agoes',
            // 'no_hp' => '12345678910',
            // 'email' => 'haris@gmail.com'
        ]);
    }
}
