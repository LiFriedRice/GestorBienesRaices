<?php

namespace Database\Factories;

use App\Models\Propiedades;
use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class PropiedadesFactory extends Factory
{
    protected $model = Propiedades::class;

    public function definition()
    {
        return [
            'id_usuario' => Usuarios::factory(), // Esto crea un usuario automáticamente
            'titulo' => $this->faker->sentence,
            'descripcion' => $this->faker->paragraph,
            'tipo_propiedad' => $this->faker->randomElement(['comercial', 'residencial']),
            'area_construida' => $this->faker->randomFloat(2, 50, 500),
            'area_terraza' => $this->faker->randomFloat(2, 10, 100),
            'ubicacion' => $this->faker->address,
            'precio' => $this->faker->randomFloat(2, 10000, 1000000),
            'estado' => $this->faker->randomElement(['disponible', 'en negociacion', 'vendida', 'alquilada']),
            'año_construccion' => $this->faker->year,
            'dormitorios' => $this->faker->numberBetween(1, 10),
            'baños' => $this->faker->numberBetween(1, 10),
            'parqueos' => $this->faker->numberBetween(0, 10),
            'pisos' => $this->faker->numberBetween(1, 5),
            //'geolocalizacion' => $this->faker->latitude . ', ' . $this->faker->longitude,
            'tipo_suelo' => $this->faker->word,
            'servicios_comunitarios' => $this->faker->sentence,
            'gastos_comunes' => $this->faker->randomFloat(2, 50, 500),
            'estado_inmueble' => $this->faker->randomElement(['a estrenar', 'usado']),
            'entrega' => $this->faker->randomElement(['inmediata', 'otra_fecha']),
        ];
    }
}
