<?php

namespace App\Http\Controllers;
use App\Models\Propiedades;
use Illuminate\Http\Request;

class PropiedadesController extends Controller
{
    public function MostrarProp() {
        $Propiedades = Propiedades::all();
        return view('PaginaPrincipal', compact('Propiedades'));
    }
}
