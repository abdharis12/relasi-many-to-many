<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\SppdSeeder;
use Database\Seeders\PegawaiSeeder;
use Database\Seeders\PengikutSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Pengikut::factory()->count(3)->create();
        \App\Models\Sppd::factory()->count(3)->create();

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            PegawaiSeeder::class,
            // PengikutSeeder::class,
            // SppdSeeder::class,
        ]);
    }
}
