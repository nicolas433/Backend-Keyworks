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
        $status = $this->faker->randomElement(['EM DIA', 'ATENÇÃO', 'EM ATRASO']);
        $balance = '00' . ':' . random_int(10, 60);

        if ($status == 'EM ATRASO') {
            $balance = '- ' . $balance;
        } else {
            $balance = '+ ' . $balance;
        }

        return [
            'title' => fake()->name(),
            'dead_line' => now()->addDay(7)->toDateString(),
            'description' => fake()->text(),
            'prevision' => '0' . fake()->randomNumber(1) . ':' . random_int(10, 60),
            'status' => $status,
            'balance' => $balance,
            'card_group_id' => random_int(1, 5),
            'project_id' => random_int(1, 2),
            'team_id' => random_int(1, 3),
        ];
    }
}
