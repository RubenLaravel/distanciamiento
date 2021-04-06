<?php

namespace Database\Factories;

use App\Models\Enterprise;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class EnterpriseFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Enterprise::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $usuarios = User::all()->pluck('id');
        return [
            'name' => $this->faker->unique->company,
            'ruc' => $this->faker->unique->numerify('2050#######'),
            'imagen' => 'imagenes/' . $this->faker->image('public/storage/imagenes',640,480,null,false),
            'user_id' => $this->faker->unique()->randomElement($usuarios),
            
        ];
    }
}
