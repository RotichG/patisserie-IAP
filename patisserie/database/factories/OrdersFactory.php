<?php

namespace Database\Factories;

use App\Models\Orders;
use Illuminate\Database\Eloquent\Factories\Factory;

class OrdersFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Orders::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'orderNo'=>$this->faker->unique()->randomNumber(4),
            'customer'=>$this->faker->name(),
            'deliveryAddress'=>$this->faker->address(),
            'total'=>$this->faker->randomNumber(3),
            'status'=>$this->faker->boolean()

        ];
    }
}
