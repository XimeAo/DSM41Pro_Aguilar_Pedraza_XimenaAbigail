<?php

namespace Database\Factories;

use App\Models\mark;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class markFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     * 
     */
    protected $model=mark::class;
    public function definition()
    {
        return [
            
            'mark'=>fake()->sentence(),

        ];
    }
}
