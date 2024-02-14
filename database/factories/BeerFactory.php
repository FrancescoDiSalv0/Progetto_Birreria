<?php

namespace Database\Factories;

use App\Models\Beer;
use Illuminate\Database\Eloquent\Factories\Factory;
use PHPUnit\Event\Test\BeforeFirstTestMethodCalled;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BeerFactory extends Factory
{

    protected $model = Beer::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return 
        [
            "name" => fake()->unique()->name(),
            "nation" => fake()->countryCode(),
            "type" => fake()->randomElement(["lager", "stout", "ipa", "Ale"]),
            "description" => fake()->sentence(10),
        ];
    }
}
