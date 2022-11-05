<?php

namespace Database\Factories;

use App\Models\mark;
use App\Models\modelo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class modeloFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=modelo::class;
    public function definition()
    {
        return [
            
            'marks_id'=>mark::all()->random()->id,
            'year'=>fake()->numberBetween($int1=1,$int2=2025),
            'model'=>fake()->sentence(),

        ];
    }
}
