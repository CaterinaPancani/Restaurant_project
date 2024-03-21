<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Food>
 */
class FoodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'ctgr'=>fake()->numberBetween(1, 10),
            'name'=>fake()->word(),
            'desc'=>fake()->word(),
            'pict'=>fake()->word(),
            'cost'=>'4',
            'qnty'=>'3',
            'cntr'=>'2'
        ];
    }
}
