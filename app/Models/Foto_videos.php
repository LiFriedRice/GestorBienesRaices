<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Foto_videos extends Model
{

    protected $table = 'foto_videos'; // Si es necesario especificar el nombre de la tabla

    protected $fillable = [
        'id_propiedad',
        'url_media', 
        'tipo_media', 
    ];
    public function propiedad()
    {
        return $this->belongsTo(Propiedades::class, 'id_propiedad'); // Relación inversa
    }
}
