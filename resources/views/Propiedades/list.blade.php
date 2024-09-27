@extends('Layouts.app')

@section('content')
<div class="Listadopro">
    <h1>Lista de Propiedades</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Título</th>
                <th>Descripción</th>
                <th>Tipo de Propiedad</th>
                <th>Área Construida</th>
                <th>Área Terraza</th>
                <th>Ubicación</th>
                <th>Precio</th>
                <th>Estado</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($Propiedades as $propiedad)
                <tr>
                    <td>{{ $propiedad->titulo }}</td>
                    <td>{{ $propiedad->descripcion }}</td>
                    <td>{{ $propiedad->tipo_propiedad }}</td>
                    <td>{{ $propiedad->area_construida }} m²</td>
                    <td>{{ $propiedad->area_terraza }} m²</td>
                    <td>{{ $propiedad->ubicacion }}</td>
                    <td>{{ $propiedad->precio }}</td>
                    <td>{{ $propiedad->estado }}</td>
                    <td>
                        <a href="#" class="btn btn-info">Ver</a>
                        <a href="#" class="btn btn-warning">Editar</a>
                        <a href="#" class="btn btn-danger">Eliminar</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
