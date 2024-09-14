<?php

namespace Database\Factories;

use App\Models\Usuarios;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsuariosFactory extends Factory
{
    protected $model = Usuarios::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->firstName,
            'apellido' => $this->faker->lastName,
            'email' => $this->faker->unique()->safeEmail,
            'telefono' => $this->faker->phoneNumber,
            'direccion' => $this->faker->address,
            'tipo_usuario' => $this->faker->randomElement(['admin', 'cliente', 'agente', 'propietario']),
            'verificado' => $this->faker->boolean,
            'contraseña' => bcrypt('password'), // contraseñas deben ser cifradas
            'ultimo_acceso' => $this->faker->optional()->dateTime,
            'estado_cuenta' => $this->faker->randomElement(['activa', 'suspendida', 'eliminada']),
        ];
    }
}
