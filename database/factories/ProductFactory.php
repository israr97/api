<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use App\Models\Product;
use App\Models\User;
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
            'name'=> $this->faker->word,
            'detail'=> $this->faker->paragraph,
            'price'=> $this->faker->numberBetween(1000,7000),
            'stock'=> $this->faker->randomDigit,
            'discount'=> $this->faker->numberBetween(8,40),
            'user_id'=> function(){
                return \App\Models\User::all()->random();
            },
            'status'=> $this->faker->numberBetween(0,1),
        ];
    }
}