<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pegawai>
 */
class PegawaiFactory extends Factory
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
            'nip' => fake()->unique()->randomNumber(12, true),
            'nama' => fake()->name(),
            'pangkat' => fake()->name(),
            'jabatan' => fake()->sentence(2),
            'alamat' => fake()->name(),
            'no_hp' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
        ];
    }
}
