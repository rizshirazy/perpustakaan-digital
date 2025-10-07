<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Publisher>
 */
class PublisherFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $faker = \Faker\Factory::create('id_ID');

        return [
            'name'    => $name = $faker->unique()->company(),
            'slug'    => str()->lower(str()->slug($name) . '-' . str()->random(5)),
            'address' => $faker->address(),
            'email'   => $faker->unique()->companyEmail(),
            'phone'   => $faker->phoneNumber(),
            'logo'    => null,
        ];
    }
}
