<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CreditCard>
 */
class CreditCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<int>
     */
    public function definition()
    {
        return [
            'card_number' => fake()->regexify('[0-9]{16}'),
            'expiry_year' => fake()->numberBetween(2023, 2033),
            'expiry_month' => fake()->numberBetween(1, 12),
        ];
    }
}
