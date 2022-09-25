<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Contact>
 */
class ContactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [

            'demander_id' => fake()->numberBetween(1, 137),
            'receiver_id' => fake()->numberBetween(1, 137),
            'contact_status' => "on_hold",

        ];
    }
}
