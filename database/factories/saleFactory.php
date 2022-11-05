<?php

namespace Database\Factories;

use App\Models\sale;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class saleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
        protected $model=sale::class;
    public function definition()
    {
        return [
            
            'users_id'=>User::all()->random()->id,
            'subtotal'=>fake()->numberBetween($int1=1,$int2=100000),
            'iva'=>fake()->numberBetween($int1=1,$int2=1000000),  
            'total'=>fake()->numberBetween($int1=1,$int2=100),
            'status'=>fake()->sentence(), 
            'guide_number'=>fake()->numberBetween($int1=1,$int2=100),
            
        ];
    }
}
