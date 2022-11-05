<?php

namespace Database\Factories;

use App\Models\typeuser;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\typeuser>
 */
class typeuserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=typeuser::class;
    public function definition()
    {
        return [
            //'id'=>fake()->numberBetween($int1=1,$int2=100000),
            'type_user'=>fake()->sentence(),
            'users_id'=>User::all()->random()->id,
            
        ];
    }
}
