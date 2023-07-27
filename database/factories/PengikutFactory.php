<?php

namespace Database\Factories;

use App\Models\Pengikut;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pengikut>
 */
class PengikutFactory extends Factory
{

    protected $model = \App\Models\Pengikut::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'pegawai_id' => rand(1, 5),
            'sppd_id' => rand(1, 3),
        ];
    }
}
