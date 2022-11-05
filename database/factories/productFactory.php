<?php

namespace Database\Factories;

use App\Models\category;
use App\Models\mark;
use App\Models\modelo;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class productFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=product::class;
    public function definition()
    {
        return [
            //'id'=>fake()->numberBetween($int1=0,$int2=1000),
            'marks_id'=>mark::all()->random()->id,
            'modelos_id'=>modelo::all()->random()->id,
            'categories_id'=>category::all()->random()->id,
            'stock'=>fake()->numberBetween($int1=1,$int2=100),
            'price'=>fake()->numberBetween($int1=1,$int2=100000),
            'product'=>fake()->sentence(),
            'description'=>fake()->sentence(),
            

        ];
    }
}
