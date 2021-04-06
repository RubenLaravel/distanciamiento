<?php

namespace Database\Factories;

use App\Models\Collision;
use App\Models\Device;
use Illuminate\Database\Eloquent\Factories\Factory;

class CollisionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Collision::class;
    
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $id1 = Device::all()->random()->id;
        $id2 = Device::all()->random()->id;
        
        $fecha = $this->faker->dateTimeBetween('-45 days', '-1 days');
        $fecha = $fecha->format('Y-m-d');
        
        if ($id1 == $id2) {
        
            return $this->definition();

        }else{
            
            return [
                'fecha' => $fecha,
                'hora' => $this->faker->time,
                // 'semana' => $this->faker->month,
                // 'mes' => $this->faker->monthName,
                // 'año' => $this->faker->year,
                'device_id' => $id1,
                'device2_id' => $id2,
                // 'device_id' => Device::all()->random()->id,
                // 'device2_id' => Device::all()->random()->id,
            ];
            
        }
    }
}
