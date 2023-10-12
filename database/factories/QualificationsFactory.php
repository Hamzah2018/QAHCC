<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Qualifications>
 */
class QualificationsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'QUAL_NAME'=> fake()->jobTitle(),
            'EMPNO' => fake()->numberBetween(1,2),
            'YEAR_COMPLETED' => fake()->numberBetween(2000,2023), 
            'DESCRIPTION' => fake()->catchPhrase(),
            'CERTIFICATE_NUMBER' => fake()->numberBetween(99,10000),
            'AWARDING_BODY' => fake()->companySuffix(' university') 
        ];
    }
}
