<?php

namespace Database\Factories;

use App\Models\User;
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
            'name' =>$this-> faker->name,
            'phone' =>$this-> faker->phoneNumber(),
            'email' =>$this-> faker->unique()->safeEmail(),
            'location' =>$this-> faker->text(),
            'street' =>$this-> faker->word,
            'outdoor_number' =>$this-> faker->randomNumber(5,false),
            'indoor_number' =>$this-> faker->randomNumber(5,false),
            'postal_code' =>$this-> faker->randomNumber(5,false),
            'between_streets' =>$this-> faker->text(),
            'password' =>$this-> faker->text,
            'type_user' =>$this-> faker->numberBetween(1,3),
            'estates_id'=>$this->faker->randomNumber(),
            
        ];
    }
}