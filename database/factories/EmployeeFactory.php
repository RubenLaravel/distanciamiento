<?php

namespace Database\Factories;

use App\Models\Employee;
use App\Models\Enterprise;
use Illuminate\Database\Eloquent\Factories\Factory;

class EmployeeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->word(10),
            'apellido1' => $this->faker->lastName,
            'apellido2' => $this->faker->lastName,
            'sede' => $this->faker->randomElement(['Central','Proyecto1','Proyecto2']),
            'area' => $this->faker->randomElement(['Equipos', 'Logistica', 'Produccion', 'Archivos', 'Contabilidad']),
            'cargo' => $this->faker->jobTitle,
            'enterprise_id' => Enterprise::all()->random()->id,
        ];
    }
}
