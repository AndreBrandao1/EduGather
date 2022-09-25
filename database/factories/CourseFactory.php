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

            'cou_title' => fake()->sentence($nbWords = 2, $variableNbWords = true),
            'cou_description' => fake()->sentence(35, true),
            'cou_logo' => fake()->imageUrl(),
            'user_id' => fake()->numberBetween(1, 10),
            'cat_id' => fake()->numberBetween(1, 5),
            'cou_statue' => 'verified', 
            
        ];
    }
}
