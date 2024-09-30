<?php

namespace App\Http\Controllers;

use App\Models\Foto_videos;
use App\Models\Propiedades;
use App\Models\Tipo_Terrenos;
use App\Models\User;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    public function MostrarProp()
    {
        // Obtener todas las propiedades junto con sus fotos y videos
        $Propiedades = Propiedades::with('fotosVideos')->get();

        // Obtener todos los usuarios
        $Usuarios = User::all();

        // Retornar la vista con ambas colecciones
        return view('PaginaPrincipal', compact('Propiedades', 'Usuarios'));
    }
    public function buscar(Request $request)
    {
        // Captura los datos del formulario
        $query = $request->input('query');
        $tipo_propiedad = $request->input('tipo_propiedad');
        $localizacion = $request->input('localizacion');
        $pisos = $request->input('pisos');
        $precioMin = $request->input('precioMin');
        $precioMax = $request->input('precioMax');
        $baños = $request->input('baños');
        $dormitorios = $request->input('dormitorios');
        $servicio_comunitario = $request->input('servicio_comunitario');
        $areaMin = $request->input('areaMin');
        $areaMax = $request->input('areaMax');
        $tipo_adquisicion = $request->input('tipo_adquisicion');
        $parqueo = $request->input('parqueo');
        $estado_inmueble = $request->input('estado_inmueble');
        $año_construccion = $request->input('año_construccion');

        // Realizar la búsqueda en la tabla propiedades
        $propiedades = Propiedades::with('fotosVideos')
            ->when($query, function ($queryBuilder) use ($query) {
                return $queryBuilder->where('titulo', 'like', "%$query%")
                    ->orWhere('descripcion', 'like', "%$query%");
            })
            ->when($tipo_propiedad, function ($queryBuilder) use ($tipo_propiedad) {
                return $queryBuilder->where('tipo_propiedad', $tipo_propiedad);
            })
            ->when($localizacion, function ($queryBuilder) use ($localizacion) {
                return $queryBuilder->where('localizacion', $localizacion);
            })
            ->when($pisos, function ($queryBuilder) use ($pisos) {
                return $queryBuilder->where('pisos', $pisos);
            })
            ->when($precioMin, function ($queryBuilder) use ($precioMin) {
                return $queryBuilder->where('precio', '>=', $precioMin);
            })
            ->when($precioMax, function ($queryBuilder) use ($precioMax) {
                return $queryBuilder->where('precio', '<=', $precioMax);
            })
            ->when($baños, function ($queryBuilder) use ($baños) {
                return $queryBuilder->where('baños', $baños);
            })
            ->when($dormitorios, function ($queryBuilder) use ($dormitorios) {
                return $queryBuilder->where('dormitorios', $dormitorios);
            })
            ->when($servicio_comunitario, function ($queryBuilder) use ($servicio_comunitario) {
                return $queryBuilder->where('servicio_comunitario', 'like', "%$servicio_comunitario%");
            })
            ->when($areaMin, function ($queryBuilder) use ($areaMin) {
                return $queryBuilder->where('area_contruida', '>=', $areaMin);
            })
            ->when($areaMax, function ($queryBuilder) use ($areaMax) {
                return $queryBuilder->where('area_contruida', '<=', $areaMax);
            })
            ->when($tipo_adquisicion, function ($queryBuilder) use ($tipo_adquisicion) {
                return $queryBuilder->where('tipo_adquisicion', $tipo_adquisicion);
            })
            ->when($parqueo, function ($queryBuilder) use ($parqueo) {
                return $queryBuilder->where('parqueo', $parqueo);
            })
            ->when($estado_inmueble, function ($queryBuilder) use ($estado_inmueble) {
                return $queryBuilder->where('estado_inmueble', $estado_inmueble);
            })
            ->when($año_construccion, function ($queryBuilder) use ($año_construccion) {
                return $queryBuilder->where('año_construccion', $año_construccion);
            })
            ->get();

        return view('Busqueda', compact('propiedades'));
    }
    public function Propshow($id)
    {
        // Usa 'id_propiedad' en lugar de 'id'
        $Propiedad = Propiedades::with('fotosVideos')->where('id_propiedad', $id)->firstOrFail();
        return view('Propiedades.propiedad', compact('Propiedad'));
    }
    public function Usershow($id)
    {
        $Usuarios = User::findOrFail($id);
        return view('User.UserShow', compact('Usuarios'));
    }

    //mostrar perfil de usuario autentificado
    public function Myusershow()
    {
        $userId = auth()->user()->id; // Obtén el ID del usuario autenticado
        $Usuarios = User::findOrFail($userId); // Busca al usuario por su ID
        return view('User.Myuser', compact('Usuarios')); // Retorna la vista con los datos del usuario
    }

    public function Listado()
    {
        $Propiedades = Propiedades::all();
        return view('Propiedades.list', compact('Propiedades'));
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
        $propiedad = Propiedades::create($data);

        Foto_videos::create([
            'id_propiedad' => $propiedad->id, // Usa el ID de la propiedad recién creada
            'url_media' => $request->linkmedia, // Almacena el link de media
            'tipo_media' => 'foto'
        ]);

        Tipo_Terrenos::create([
            'id_propiedad' => $propiedad->id, // Usa el ID de la propiedad recién creada
            'nombre_tipo_terreno' => $request->tipo_terreno, // Almacena el link de media
            'nombre_categoria' => $request->tipo_venta,
        ]);

        // Redirigir o retornar respuesta
        return redirect()->route('Listado')->with('success', 'Propiedad guardada correctamente.');
    }

}
