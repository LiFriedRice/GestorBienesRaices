<?php

namespace App\Http\Controllers;
use App\Models\Foto_videos;
use App\Models\Mensajes;
use App\Models\Propiedades;
use App\Models\Tipo_Terrenos;
use App\Models\User;
use App\Models\Reseñas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Usercontroller extends Controller
{

    public function Mensajeshow($id)
    {
        // Buscamos la propiedad por el id de la propiedad
        $Propiedad = Propiedades::find($id);

        if (!$Propiedad) {
            return redirect()->back()->with('error', 'Propiedad no encontrada.');
        }

        // Obtenemos el id_usuario de la propiedad
        $id_usuario = $Propiedad->id_usuario;

        // Buscamos el usuario por el id_usuario
        $usuario = User::where('id', $id_usuario)->first();

        if (!$usuario) {
            return redirect()->back()->with('error', 'Usuario no encontrado.');
        }

        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::with('remitente')
            ->where('id_usuario_destinatario', $usuarioId)
            ->get();

        // Verificar si hay mensajes
        if ($mensajes->isEmpty()) {
            // Opcional: manejar este caso como prefieras
        }

        // Retornar la vista
        return view('Propiedades.mensaje', compact('Propiedad', 'mensajes','usuario'));
    }


}
