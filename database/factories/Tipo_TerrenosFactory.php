<?php

namespace Database\Factories;

use App\Models\Tipo_Terrenos;
use App\Models\Propiedades;
use Illuminate\Database\Eloquent\Factories\Factory;

class Tipo_TerrenosFactory extends Factory
{
    protected $model = Tipo_Terrenos::class;

    public function definition()
    {
        return [
            'id_propiedad' => Propiedades::factory(), // Esto crea una propiedad automáticamente
            'nombre_tipo_terreno' => $this->faker->randomElement(['casa', 'terreno', 'departamento', 'local_comercial', 'oficina']),
            'nombre_categoria' => $this->faker->randomElement(['alquiler', 'venta', 'compra']),
        ];
    }
}
