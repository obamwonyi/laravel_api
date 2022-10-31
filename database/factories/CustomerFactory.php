<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        //storing the random element of an individual or business 
        $type = $this->faker->randomElement(['I','B']);
        //storing a name value with respect to the random element returned 
        $name = ($type == "I") ? $this->faker->name() : $this->faker->company();

        return [
            //
            'name' => $name, 
            'type' => $type, 
            'email' => $this->faker->email(), 
            'address' => $this->faker->streetAddress(), 
            'city' => $this->faker->city(), 
            'state' => $this->faker->state(), 
            'postal_code' => $this->faker->postcode()
        ];
    }
}
