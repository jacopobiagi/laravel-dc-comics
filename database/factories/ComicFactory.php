<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */
class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake() -> sentence(2),
            'ID_Comic' => fake() -> unique() -> numerify('comic-######'),
            'type' => fake() -> sentence(3),
            'price' => fake() -> randomFloat(2,0,10000),
            'description' => fake() -> text(100),
        ];
    }
}
