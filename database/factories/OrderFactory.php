<?php

namespace Database\Factories;

use App\Models\Order;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrderFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Order::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'id_user' => $this->faker->numberBetween(1,20),
            'id_direction' => $this->faker->numberBetween(1,20),
            'cost' => $this->faker->randomFloat(2,4000,6000),
            'status' => 'Pendiente',
            'date' => $this->faker->dateTimeAD,
        ];
    }
}
