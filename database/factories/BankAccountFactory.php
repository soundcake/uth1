<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\BankAccount>
 */
class BankAccountFactory extends Factory
{
    /**
     * Define the model's default state
     *
     * @return array<int>
     */
    public function definition()
    {
        return [
            'account_number' => fake()->randomNumber(8, true),
            'sort_code' => fake()->randomNumber(6, true),
        ];
    }
}
