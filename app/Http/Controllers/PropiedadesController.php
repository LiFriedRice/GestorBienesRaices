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

class PropiedadesController extends Controller
{
    public function MostrarProp()
    {
        // Obtener hasta 12 propiedades con status 1 junto con sus fotos y videos
        $Propiedades = Propiedades::with('fotosVideos')->where('status', 1)->take(12)->get();

        // Obtener hasta 8 usuarios
        $Usuarios = User::take(8)->get();

        $usuarioId = Auth::id();

        // Verificar si el usuario está autenticado
        if ($usuarioId) {
            // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
            $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
                ->with('remitente') // Cargar la relación del usuario
                ->get();
        } else {
            // Si no está autenticado, asignar una colección vacía
            $mensajes = collect();
        }

        // Retornar la vista con ambas colecciones
        return view('PaginaPrincipal', compact('Propiedades', 'Usuarios', 'mensajes'));
    }

    public function buscar()
    {
        // Realizar la búsqueda en la tabla propiedades
        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
            ->with('remitente') // Cargar la relación del usuario
            ->get();
        $propiedades = Propiedades::with('fotosVideos')->where('status', 1)->get();

        return view('Busqueda', compact('propiedades', 'mensajes'));

    }
    public function Propshow($id)
    {
        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
            ->with('remitente') // Cargar la relación del usuario
            ->get();
        $Propiedad = Propiedades::with(['fotosVideos', 'reseñas.user'])->where('id_propiedad', $id)->firstOrFail();

        // Verifica los datos de la propiedad

        return view('Propiedades.propiedad', compact('Propiedad', 'mensajes'));
    }

    public function Propupdateshow($id)
    {
        // Obtiene la propiedad y sus fotos y reseñas
        $propiedad = Propiedades::with(['fotosVideos'])
            ->where('id_propiedad', $id) // Asegúrate de usar 'id_propiedad' aquí
            ->firstOrFail();
        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
            ->with('remitente') // Cargar la relación del usuario
            ->get();

        // Retorna la vista con los datos de la propiedad
        return view('Propiedades.update', compact('propiedad', 'mensajes'));
    }
    public function Myusershow()
    {
        $userId = auth()->user()->id; // Obtén el ID del usuario autenticado
        $Usuarios = User::findOrFail($userId); // Busca al usuario por su ID
        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
            ->with('remitente') // Cargar la relación del usuario
            ->get();

        // Obtén las propiedades publicadas por el usuario
        $Propiedades = Propiedades::where('id_usuario', $userId)->where('status', 1)->get();

        return view('User.Myuser', compact('Usuarios', 'Propiedades', 'mensajes')); // Retorna la vista con los datos del usuario y propiedades
    }

    //mostrar perfil de propiedad
    public function Usershow($id)
    {
        // Buscar al usuario por su ID
        $Usuarios = User::findOrFail($id);

        // Obtener las propiedades relacionadas con el usuario
        $Propiedades = Propiedades::where('id_usuario', $Usuarios->id)->where('status', 1)->get();
        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
            ->with('remitente') // Cargar la relación del usuario
            ->get();

        // Pasar los datos del usuario y las propiedades a la vista
        return view('User.UserShow', compact('Usuarios', 'Propiedades', 'mensajes'));
    }



    // añadir comentario
    public function almacenar(Request $request)
    {
        // Verifica si el usuario está autenticado
        if (!Auth::check()) {
            // Redirige a la misma página con un mensaje de error
            return redirect()->route('propiedadshow', ['id' => $request->id_propiedad])
                ->with('error', 'Debes iniciar sesión para publicar un comentario.');
        }

        // Validación del formulario
        $request->validate([
            'id_propiedad' => 'required|exists:propiedades,id_propiedad', // Verifica que el ID del producto exista
            'puntuacion' => 'required|integer|between:1,5',
            'comentario' => 'required|string|max:500',
        ]);

        // Obtén el ID del usuario autenticado
        $userId = Auth::id();

        // Guarda el comentario en la base de datos
        Reseñas::create([
            'id_usuario' => $userId,
            'id_propiedad' => $request->id_propiedad,
            'calificacion' => $request->puntuacion,
            'comentario' => $request->comentario,
        ]);

        // Redirige a la función Propshow pasando el ID del producto
        return redirect()->route('propiedadshow', ['id' => $request->id_propiedad])
            ->with('success', 'Comentario publicado con éxito.');
    }


    public function Listado()
    {
        $usuarioId = Auth::id();

        // Obtener los mensajes donde id_usuario_destinatario sea igual al ID del usuario autenticado
        $mensajes = Mensajes::where('id_usuario_destinatario', $usuarioId)
            ->with('remitente') // Cargar la relación del usuario
            ->get();
        $Propiedades = Propiedades::all();
        return view('Propiedades.list', compact('Propiedades', 'mensajes'));

    }

    public function CreateProp(Request $request)
    {
        // Asegúrate de que el usuario esté autenticado

        // Captura todos los datos del request
        $data = $request->all();
        $data['id_usuario'] = auth()->id(); // Obtiene el ID del usuario autenticado

        // Valida los datos
        $validatedData = $request->validate([
            'titulo' => 'required|max:255',
            'descripcion' => 'required',
            'tipo_propiedad' => 'required',
            'area_construida' => 'required|numeric',
            'area_terraza' => 'required|numeric',
            'ubicacion' => 'required|max:255',
            'precio' => 'required|numeric',
            'estado' => 'required',
            'año_construccion' => 'required|integer',
            'dormitorios' => 'integer',
            'baños' => 'integer',
            'parqueos' => 'integer',
            'pisos' => 'integer',
            'tipo_suelo' => 'required|max:50',
            'servicios_comunitarios' => 'max:255',
            'gastos_comunes' => 'numeric',
            'estado_inmueble' => 'required',
            'entrega' => 'required',
            'linkmedia' => 'required|url', // Asegúrate de validar el link de imagen
            'tipo_terreno' => 'required|max:50', // Agregado
            'tipo_venta' => 'required|max:50', // Agregado
        ]);

        // Crear la propiedad
        $data = $validatedData;
        $data['id_usuario'] = auth()->id(); // Añade el id del usuario autenticado
        $data['status'] = 1;

        $propiedad = Propiedades::create($data);


        Foto_videos::create([
            'id_propiedad' => $propiedad->id_propiedad, // Usa el ID de la propiedad recién creada
            'url_media' => $request->linkmedia, // Almacena el link de media
            'tipo_media' => 'foto'
        ]);

        Tipo_Terrenos::create([
            'id_propiedad' => $propiedad->id_propiedad, // Usa el ID de la propiedad recién creada
            'nombre_tipo_terreno' => $request->tipo_terreno, // Almacena el link de media
            'nombre_categoria' => $request->tipo_venta,
        ]);

        // Redirigir o retornar respuesta
        return redirect()->route('Myusershow')->with('success', 'Propiedad guardada correctamente.');
    }

    // Actualizar la propiedad
    public function Propupdate(Request $request, $id)
    {
        // Validar la entrada del formulario
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descripcion' => 'required|string',
            'tipo_propiedad' => 'required|string',
            'area_construida' => 'required|numeric',
            'area_terraza' => 'required|numeric',
            'ubicacion' => 'required|string|max:255',
            'precio' => 'required|numeric',
            'estado' => 'required|string',
            'año_construccion' => 'required|integer',
            'dormitorios' => 'required|integer|min:0',
            'baños' => 'required|integer|min:0',
            'parqueos' => 'required|integer|min:0',
            'pisos' => 'required|integer|min:0',
            'tipo_suelo' => 'required|string',
            'servicios_comunitarios' => 'required|string',
            'gastos_comunes' => 'required|numeric',
            'estado_inmueble' => 'required|string',
            'entrega' => 'required|string',
        ]);

        // Encontrar la propiedad por su ID (usar id_propiedad)
        $propiedad = Propiedades::where('id_propiedad', $id)->firstOrFail();

        // Solo actualizar los campos que han cambiado
        $propiedad->fill($request->only([
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
            'tipo_suelo',
            'servicios_comunitarios',
            'gastos_comunes',
            'estado_inmueble',
            'entrega'
        ]));

        // Guardar los cambios en la base de datos
        $propiedad->save();

        // Redirigir o mostrar un mensaje de éxito
        return redirect()->route('Myusershow')->with('success', 'Propiedad actualizada correctamente.');
    }
    // funcion de eliminacion logica
    public function Propdelete($id)
    {
        $updated = Propiedades::where('id_propiedad', $id)->update(['status' => 0]);

        if ($updated) {
            return redirect()->back()->with('success', 'Propiedad eliminada correctamente.');
        }

        return redirect()->back()->with('error', 'Propiedad no encontrada.');
    }



    //enviar mensaje 
    public function enviar(Request $request)
    {
        // Verifica si el usuario está autenticado
        if (!Auth::check()) {
            // Redirige a la misma página con un mensaje de error
            return redirect()->back()->with('error', 'Debes iniciar sesión para enviar un mensaje.');
        }

        // Validación de datos
        $request->validate([
            'destinatarioId' => 'required|string|max:255',
            'propiedadId' => 'required|string|max:255',
            'mensajePersonalizado' => 'nullable|string',
        ]);

        // Obtener el ID del usuario autenticado
        $userId = auth()->user()->id;

        // Guardar el mensaje en la base de datos
        Mensajes::create([
            'id_usuario_remitente' => $userId,
            'id_usuario_destinatario' => $request->destinatarioId,
            'id_propiedad' => $request->propiedadId,
            'mensaje' => $request->mensajePersonalizado ?? 'Estoy interesado en la propiedad',
        ]);

        // Redirigir de vuelta al formulario con un mensaje de éxito
        return redirect()->back()->with('success', 'El mensaje se envió con éxito.');
    }

}
