<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Propiedades extends Model
{
    public function fotosVideos()
    {
        return $this->hasMany(Foto_videos::class, 'id_propiedad', 'id_propiedad'); // Ajusta según el campo de relación
    }
    use HasFactory;

    protected $table = 'propiedades';

    protected $fillable = [
        'id_usuario',
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
