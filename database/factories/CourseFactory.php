<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'cou_title' => fake()->sentence($nbWords = 6, $variableNbWords = true),
            'cou_description' => fake()->realText(200),
            'cou_description' => fake()->unique()->safeEmail(),
            'cou_logo' => fake()->imageUrl(),
            'user_id' => fake()->randomDigitNot(1),
            'cat_id' => fake()->shuffle(array(1, 2, 3, 4, 5), 1),
            'cou_statue' => 'verified', 
            
        ];
    }
}
