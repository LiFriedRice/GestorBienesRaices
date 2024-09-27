<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class InsertardatosSeeder extends Seeder
{
    public function run()
    {
        // Datos para usuarios
        $usuarios = [
            [
                'nombre' => 'Juan',
                'apellido' => 'Pérez',
                'email' => 'juan.perez@example.com',
                'telefono' => '123456789',
                'direccion' => 'Calle Falsa 123',
                'tipo_usuario' => 'cliente',
                'verificado' => true,
                'contraseña' => Hash::make('password123'),
                'ultimo_acceso' => now(),
                'estado_cuenta' => 'activa',
            ],
            [
                'nombre' => 'María',
                'apellido' => 'Gómez',
                'email' => 'maria.gomez@example.com',
                'telefono' => '987654321',
                'direccion' => 'Avenida Siempre Viva 456',
                'tipo_usuario' => 'agente',
                'verificado' => false,
                'contraseña' => Hash::make('password123'),
                'ultimo_acceso' => now(),
                'estado_cuenta' => 'activa',
            ],
        ];

        // Insertar usuarios usando foreach
        foreach ($usuarios as $usuario) {
            \App\Models\usuarios::create($usuario);
        }

        // Datos para propiedades
        $propiedades = [
            [
                //'id_usuario' => 1,
                'titulo' => 'Apartamento en el centro',
                'descripcion' => 'Hermoso apartamento con vista al mar.',
                'tipo_propiedad' => 'residencial',
                'area_construida' => 120.00,
                'area_terraza' => 30.00,
                'ubicacion' => 'Centro Ciudad',
                'precio' => 150000.00,
                'estado' => 'disponible',
                'año_construccion' => 2020,
                'dormitorios' => 3,
                'baños' => 2,
                'parqueos' => 1,
                'pisos' => 1,
                'geolocalizacion' => 'POINT(10.1234 20.5678)',
                'tipo_suelo' => 'urbano',
                'servicios_comunitarios' => 'agua, luz, internet',
                'gastos_comunes' => 100.00,
                'estado_inmueble' => 'a estrenar',
                'entrega' => 'inmediata',
            ],
            [
                //'id_usuario' => 2,
                'titulo' => 'Local comercial en la avenida principal',
                'descripcion' => 'Local ideal para negocios.',
                'tipo_propiedad' => 'comercial',
                'area_construida' => 80.00,
                'area_terraza' => 10.00,
                'ubicacion' => 'Avenida Principal',
                'precio' => 50000.00,
                'estado' => 'en negociacion',
                'año_construccion' => 2015,
                'dormitorios' => 0,
                'baños' => 1,
                'parqueos' => 0,
                'pisos' => 1,
                //'geolocalizacion' => 'POINT(30.1234 40.5678)',
                'tipo_suelo' => 'comercial',
                'servicios_comunitarios' => 'agua, luz',
                'gastos_comunes' => 50.00,
                'estado_inmueble' => 'usado',
                'entrega' => 'otra_fecha',
            ],
        ];

        // Insertar propiedades usando foreach
        foreach ($propiedades as $propiedad) {
            \App\Models\Propiedades::create($propiedad);
        }

        // Datos para tipos de terrenos
        $tiposTerrenos = [
            [
                'id_propiedad' => 1,
                'nombre_tipo_terreno' => 'departamento',
                'nombre_categoria' => 'venta',
            ],
            [
                'id_propiedad' => 2,
                'nombre_tipo_terreno' => 'local_comercial',
                'nombre_categoria' => 'alquiler',
            ],
        ];

        // Insertar tipos de terrenos usando foreach
        foreach ($tiposTerrenos as $tipoTerreno) {
            \App\Models\Tipo_Terrenos::create($tipoTerreno);
        }
    }
}
