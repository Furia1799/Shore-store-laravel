<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            //atributos
            'id_brand' =>$this->faker->numberBetween(1,20),
            'name' =>$this->faker->jobTitle,
            'description' =>$this->faker->text,
            'price' =>$this->faker->randomFloat( 2,  0, 5000), // 48.8932,
            'stock' =>$this->faker->numberBetween(1,50),
            'image' =>$this->faker->image(null,300,300)
        ];
    }
}
