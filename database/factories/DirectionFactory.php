<?php

namespace Database\Factories;

use App\Models\Direction;
use Illuminate\Database\Eloquent\Factories\Factory;

class DirectionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Direction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //atributos
            'country' =>$this->faker->country,
            'provincia' =>$this->faker->state,
            'city' =>$this->faker->city,
            'address' =>$this->faker->address
        ];
    }
}
