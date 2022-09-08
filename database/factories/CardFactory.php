<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Card>
 */
class CardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->name(),
            'dead_line' => now()->addDay(7)->toDateString(),
            'description' => fake()->text(),
            'prevision' => '0' . fake()->randomNumber(1) . ':' . random_int(10, 60),
            'status' => $this->faker->randomElement(['EM DIA', 'ATENÇÃO', 'EM DIA']),
            'balance' => '00' . ':' . random_int(10, 60),
            'card_group_id' => random_int(1, 5),
            'project_id' => random_int(1, 3),
            'team_id' => random_int(1, 3),
        ];
    }
}
