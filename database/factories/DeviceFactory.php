<?php

namespace Database\Factories;

use App\Models\Device;
use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

class DeviceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Device::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $cantidad = Employee::all()->pluck('id');
        return [
            'mac' => $this->faker->unique->macAddress,
            'employee_id' => $this->faker->unique()->randomElement($cantidad),
        ];
    }
}
