<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Sppd>
 */
class SppdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'no_sppd' => fake()->bothify('SPPD-No###'),
            'pegawai_id' => rand(1, 5),
            'maksud' => fake()->sentence(4),
        ];
    }
}
