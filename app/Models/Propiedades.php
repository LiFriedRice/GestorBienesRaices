<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    use HasFactory;

    protected $table = 'propiedades';

    protected $fillable = [
        'titulo', 
        'descripcion', 
        'tipo_propiedad', 
        'area_construida',
        'area_terraza',
        'ubicacion',
        'precio',
        'estado',
        'año_construccion',
        'dormitorios',
        'baños',
        'parqueos',
        'pisos',
        'geolocalizacion',
        'tipo_suelo',
        'servicios_comunitarios',
        'gastos_comunes',
        'estado_inmueble',
        'entrega',
        'fecha_publicacion',
    ];
}
