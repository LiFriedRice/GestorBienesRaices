<?php

namespace App\Http\Controllers;

use App\Models\Propiedades;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    public function MostrarProp()
    {
        // Obtener todas las propiedades junto con sus fotos y videos
        $Propiedades = Propiedades::with('fotosVideos')->get();

        return view('PaginaPrincipal', compact('Propiedades'));
    }

    public function Listado()
    {
        $Propiedades = Propiedades::all();
        return view('Propiedades.list', compact('Propiedades'));
    }

    public function store(Request $request)
    {

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
            
        ]);

        Propiedades::create($validatedData);
        return redirect()->route('Listado')->with('success', 'Propiedad guardada correctamente.');
    }
}
