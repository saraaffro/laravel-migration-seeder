<?php

namespace Database\Factories;

use App\Models\Train;

use Illuminate\Database\Eloquent\Factories\Factory;



/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Train>
 */
class TrainFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company' => fake() -> word(),
            'departure_station' => fake() -> city(),
            'arrival_station' => fake() -> city(),
            'departure_time' => fake() -> dateTimeBetween('now', '+1 week'),
            'arrival_time' => fake() -> dateTimeBetween('+1 week', '+2 weeks'),
            'train_code' => fake() -> unique()->randomNumber(5),
            'carriages_count' => fake() -> numberBetween(5, 15),
            'on_time' => fake() -> boolean(),
            'cancelled' => fake() -> boolean(),
        ];
    }
}
