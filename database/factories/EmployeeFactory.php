<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
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
            'FIRSTNME' => fake()->firstName(),
            'MIDNAME' => fake()->firstNameMale(),
            'LASTNAME' => fake()->lastName(),
            'HIREDATE' => fake()->dateTimeBetween($startDate = '-35 years', $endDate = 'now', $timezone = null), // password
            'JOB' => fake()->randomElement(['chr', 'Eng','Mag']),
            'PHONENE' =>  fake()->phoneNumber(),
            'WORKDEPT' => fake()->jobTitle(),
            'EDLEVEL' =>  fake()->numberBetween(1,3),
            'SEX' => fake()->randomElement(['m', 'f']),
            'BIRTHDATE' => fake()->dateTimeBetween($startDate = '-60 years', $endDate = '-18 years', $timezone = null),
            'SALARY' => fake()->numberBetween(400,1500),
            'BONUS' => fake()->numberBetween(20,50),
            'COMM' => fake()->numberBetween(20,50),
        ];
    }
}
