<?php

namespace Database\Factories;

use App\Models\estate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class estateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=estate::class;
    public function definition()
    {
        return [
            
            'estate'=>fake()->name(),
        ];
    }
}
