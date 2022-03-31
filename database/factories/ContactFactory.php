<?php

namespace Database\Factories;

use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;

class ContactFactory extends Factory
{
    protected $model = Contact::class;

    /**
     * Define the model's default state.
     * 
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'gender' => $this->faker->numberBetween(1,2),
            'email' => $this->faker->safeEmail,
            'zipcode' => $this->faker->randomNumber(7),
            'address' => $this->faker->randomLetter,
            'building' => $this->faker->randomLetter,
            'contents' => $this->faker->text(120),
        ];
    }
}
