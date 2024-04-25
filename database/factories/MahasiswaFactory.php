<?php

namespace Database\Factories;

use App\Models\Mahasiswa;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Mahasiswa::class;

    public function definition(): array
    {
        return [
            'nim' => $this->faker->unique()->numerify('#########'),
            'nama' => $this->faker->name(),
            'jurusan' => $this->faker->numerify('Teknologi Informasi'),
            'alamat' => $this->faker->address()
        ];
    }
}
