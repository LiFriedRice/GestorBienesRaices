<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reseñas extends Model
{
    use HasFactory;
    protected $table = 'reseñas';

    protected $fillable = [
        'id_usuario',
        'id_propiedad', 
        'calificacion', 
        'comentario', 
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'id_usuario', 'id'); // Asegúrate de que el campo 'id' corresponde al campo 'id_usuario'
    }

    public function propiedad()
    {
        return $this->belongsTo(Propiedades::class, 'id_propiedad');
    }
}
