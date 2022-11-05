<?php

namespace Database\Factories;

use App\Models\estate;
use App\Models\municipality;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class municipalityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model=municipality::class;
    public function definition()
    {
        return [
            
            'estates_id'=>estate::all()->random()->id,
            'municipality'=>fake()->sentence(),
        ];
    }
}
