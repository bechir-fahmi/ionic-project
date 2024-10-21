<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Coupon>
 */
class CouponFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'code' => $this->faker->unique()->word . strtoupper($this->faker->randomLetter . $this->faker->randomLetter),
            'discount' => $this->faker->numberBetween(5, 50),
            'description' => $this->faker->sentence,
            'isPercentage' => $this->faker->boolean,
            'isActive' => true,
            'expiryDate' => $this->faker->dateTimeBetween('now', '+1 year')->format('Y-m-d'),
            'minimumOrderAmount' => $this->faker->numberBetween(10, 100),

        ];
    }
}
