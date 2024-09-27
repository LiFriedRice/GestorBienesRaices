<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class datosrandom extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Seeder para la tabla Usuarios
         DB::table('usuarios')->insert([
            [
                'nombre' => 'John',
                'apellido' => 'Doe',
                'email' => 'jdns.doe@example.com',
                'telefono' => '123456789',
                'direccion' => '123 Main St',
                'tipo_usuario' => 'cliente',
                'verificado' => true,
                'contraseña' => bcrypt('password123'),
                'ultimo_acceso' => Carbon::now(),
                'estado_cuenta' => 'activa',
            ],
            [
                'nombre' => 'Jane',
                'apellido' => 'Smith',
                'email' => 'jhs.smith@example.com',
                'telefono' => '987654321',
                'direccion' => '456 Oak St',
                'tipo_usuario' => 'agente',
                'verificado' => false,

                'contraseña' => bcrypt('password123'),
                'ultimo_acceso' => Carbon::now(),
                'estado_cuenta' => 'activa',
            ],
        ]);

        // Seeder para la tabla Propiedades
        DB::table('propiedades')->insert([
            [
                //'id_usuario' => 1,
                'titulo' => 'Casa en el centro',
                'descripcion' => 'Una hermosa casa en el centro de la ciudad.',
                'tipo_propiedad' => 'residencial',
                'area_construida' => 250.00,
                'area_terraza' => 50.00,
                'ubicacion' => 'Centro Ciudad',
                'precio' => 200000.00,
                'estado' => 'disponible',
                'año_construccion' => 2010,
                'dormitorios' => 3,
                'baños' => 2,
                'parqueos' => 1,
                'pisos' => 2,
                //'geolocalizacion' => DB::raw('POINT(40.7128, -74.0060)'),
                'tipo_suelo' => 'urbano',
                'servicios_comunitarios' => 'piscina, gimnasio',
                'gastos_comunes' => 150.00,
                'estado_inmueble' => 'usado',
                'entrega' => 'inmediata',
            ],
            [
                //'id_usuario' => 2,
                'titulo' => 'Departamento moderno',
                'descripcion' => 'Moderno departamento en el barrio de moda.',
                'tipo_propiedad' => 'comercial',
                'area_construida' => 120.00,
                'area_terraza' => 20.00,
                'ubicacion' => 'Barrio Moderno',
                'precio' => 150000.00,
                'estado' => 'en negociacion',
                'año_construccion' => 2020,
                'dormitorios' => 2,
                'baños' => 1,
                'parqueos' => 1,
                'pisos' => 1,
                //'geolocalizacion' => DB::raw('POINT(34.0522, -118.2437)'),
                'tipo_suelo' => 'urbano',
                'servicios_comunitarios' => 'seguridad 24h, parque',
                'gastos_comunes' => 200.00,
                'estado_inmueble' => 'a estrenar',
                'entrega' => 'otra_fecha',
            ],
        ]);
        
        // Seeder para la tabla Tipos_Terrenos
        DB::table('tipo__terrenos')->insert([
            [
                'id_propiedad' => 1,
                'nombre_tipo_terreno' => 'casa',
                'nombre_categoria' => 'venta',
            ],
            [
                'id_propiedad' => 2,
                'nombre_tipo_terreno' => 'departamento',
                'nombre_categoria' => 'alquiler',
            ],
        ]);
        // Seeder para la tabla Fotos_Videos
        DB::table('foto_videos')->insert([
            [
                'id_propiedad' => 1,
                'url_media' => 'https://example.com/photo1.jpg',
                'tipo_media' => 'foto',
            ],
            [
                'id_propiedad' => 2,
                'url_media' => 'https://example.com/video1.mp4',
                'tipo_media' => 'video',
            ],
        ]);

        // Seeder para la tabla Visitas
        DB::table('visitas')->insert([
            [
                'id_propiedad' => 1,
                'id_usuario' => 2,
                'fecha_visita' => Carbon::now()->addDays(1),
                'comentario' => 'Interesado en visitar pronto.',
            ],
        ]);

        // Seeder para la tabla Favoritos
        DB::table('favoritos')->insert([
            [
                'id_usuario' => 1,
                'id_propiedad' => 2,
            ],
        ]);

        // Seeder para la tabla Mensajes
        DB::table('mensajes')->insert([
            [
                'id_usuario_remitente' => 1,
                'id_usuario_destinatario' => 2,
                'id_propiedad' => 1,
                'mensaje' => '¿Está disponible esta propiedad?',
            ],
        ]);

        // Seeder para la tabla Notificaciones
        DB::table('notificaciones')->insert([
            [
                'id_usuario' => 2,
                'mensaje' => 'Tienes una nueva visita agendada.',
                'leido' => false,
            ],
        ]);

        // Seeder para la tabla Transacciones
        DB::table('transacciones')->insert([
            [
                'id_usuario' => 1,
                'id_propiedad' => 1,
                'monto' => 200000.00,
                'tipo_transaccion' => 'compra',
                'estado' => 'completada',
            ],
        ]);

        // Seeder para la tabla Pagos
        DB::table('pagos')->insert([
            [
                'id_usuario' => 1,
                'monto' => 200000.00,
                'metodo_pago' => 'tarjeta_credito',
            ],
        ]);

        // Seeder para la tabla Anuncios
        DB::table('anuncios')->insert([
            [
                'id_propiedad' => 1,
                'id_usuario' => 2,
                'fecha_inicio' => Carbon::now(),
                'fecha_fin' => Carbon::now()->addDays(30),
                'costo' => 100.00,
                'status' => 'activo',
            ],
        ]);

        // Seeder para la tabla Historial_Propiedades
        DB::table('historial_propiedades')->insert([
            [
                'id_propiedad' => 1,
                'estado_anterior' => 'disponible',
                'estado_nuevo' => 'vendida',
            ],
        ]);

        // Seeder para la tabla Reseñas
        DB::table('reseñas')->insert([
            [
                'id_usuario' => 2,
                'id_propiedad' => 1,
                'calificacion' => 5,
                'comentario' => 'Excelente propiedad, muy recomendable.',
            ],
        ]);

        // Seeder para la tabla Auditoria
        DB::table('auditorias')->insert([
            [
                'id_usuario' => 1,
                'accion' => 'Creó una nueva propiedad',
                'detalles' => 'Propiedad en el centro agregada.',
            ],
        ]);
    }
}
