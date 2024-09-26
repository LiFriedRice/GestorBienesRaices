<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Propiedades;
use App\Models\Tipo_Terrenos;
use App\Models\Usuarios;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        //Usuarios::factory(10)->create(); // Crear 10 usuarios
        //Propiedades::factory(20)->create(); // Crear 20 propiedades
        //Tipo_Terrenos::factory(30)->create(); // Crear 30 tipos de terrenos
        $this->call(datosrandom::class);
    }
}
