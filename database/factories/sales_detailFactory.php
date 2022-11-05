<?php

namespace Database\Factories;

use App\Models\product;
use App\Models\sale;
use App\Models\sales_detail;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class sales_detailFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=sales_detail::class;
    public function definition()
    {
        return [
            //'id'=>fake()->numberBetween($int1=1,$int2=1000),
            'sales_id'=>sale::all()->random()->id,
            'products_id'=>product::all()->random()->id,
            'quantity'=>fake()->numberBetween($int1=1,$int2=100),
            'price'=>fake()->numberBetween($int1=1,$int2=100),
        ];
    }
}
