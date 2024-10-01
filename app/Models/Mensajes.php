<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensajes extends Model
{
    use HasFactory;
    protected $table = 'mensajes';
    protected $primaryKey = 'id_mensaje';

    protected $fillable = [
        'id_usuario_remitente',
        'id_usuario_destinatario',
        'id_propiedad', 
        'mensaje', 

    ];
    public function remitente()
    {
        return $this->belongsTo(User::class, 'id_usuario_remitente'); // Cambia al nombre correcto de la columna
    }

    // Relación con el usuario destinatario
    public function destinatario()
    {
        return $this->belongsTo(User::class, 'id_usuario_destinatario'); // Cambia al nombre correcto de la columna
    }
}
