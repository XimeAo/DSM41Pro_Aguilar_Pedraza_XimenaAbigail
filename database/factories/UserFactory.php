<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\estate;
use App\Models\typeuser;
use Illuminate\Database\Eloquent\Factories\Factory;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\user>
 */
class   UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model=User::class;
        
    public function definition()
    {
        return [
            //'id'=>fake()->numberBetween($int1=1,$int2=100000),
            'name' =>fake()->name(),
            'phone' =>fake()->phoneNumber(),
            'email' =>fake()->unique()->safeEmail(),
            'birthday' =>fake()->date(),
            'sex' =>fake()->sentence(),
            'location' =>fake()->sentence(),
            'street' =>fake()->sentence(),
            'outdoor_number' =>fake()->numberBetween($int1=1,$int2=100),
            'indoor_number' =>fake()->numberBetween($int1=1,$int2=100),
            'postal_code' =>fake()->numberBetween($int1=1,$int2=100),
            'between_streets' =>fake()->sentence(),
            'password' =>fake()->sentence(),
            'estates_id'=>estate::all()->random()->id,
            'typeusers_id'=>typeuser::all()->random()->id,

            
        ];
    }
}