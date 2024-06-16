<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Buku>
 */
class BukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_buku' => fake()->numberBetween(1, 9999),
            'judul' => fake()->sentence(),
            'penulis' => fake()->name(),
            'penerbit' => fake()->sentence(),
            'foto' => fake()->imageUrl(640, 480, 'books', true, 'Faker'),
            'deskripsi' => fake()->paragraph()
        ];
    }
}
