<?php

namespace Database\Factories;

use App\Models\Venta;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Venta>
 */
class VentaFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Venta::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'producto' => $this->faker->word,
            'cantidad' => $this->faker->numberBetween(1, 100),
            'precio_unitario' => $this->faker->randomFloat(2, 10, 1000),
            'fecha_venta' => $this->faker->dateTimeBetween('-1 year', 'now'),
            'cliente' => $this->faker->name,
            'pagado' => $this->faker->boolean,
            'observaciones' => $this->faker->sentence
        ];
    }
}
