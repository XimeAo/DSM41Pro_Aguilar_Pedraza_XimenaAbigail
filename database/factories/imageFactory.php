<?php

namespace Database\Factories;

use App\Models\image;
use App\Models\product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\image>
 */
class imageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=image::class;
    public function definition()
    {
        return [
            
            'products_id'=>product::all()->random()->id,
            'image'=>fake()->sentence(),
        ];
    }
}
