<?php

namespace Database\Factories;
use App\Models\contact;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\contact>
 */
class contactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = contact::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name,
            'phone' => $this->faker->phoneNumber,
        ];
    }
}
