@extends('layouts.header')

@section('content')
<div class="container">
    <h2>Actualizar Propiedad</h2>

    <form action="{{ route('propiedades.update', $propiedad->id_propiedad) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" 
                value="{{ old('titulo', $propiedad->titulo) }}" required>
        </div>

        <div class="form-group">
            <label for="descripcion">Descripción</label>
            <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required>{{ old('descripcion', $propiedad->descripcion) }}</textarea>
        </div>

        <div class="form-group">
            <label for="tipo_propiedad">Tipo de Propiedad</label>
            <select class="form-control" id="tipo_propiedad" name="tipo_propiedad" required>
                <option value="comercial" {{ $propiedad->tipo_propiedad === 'comercial' ? 'selected' : '' }}>Comercial</option>
                <option value="residencial" {{ $propiedad->tipo_propiedad === 'residencial' ? 'selected' : '' }}>Residencial</option>
            </select>
        </div>

        <div class="form-group">
            <label for="area_construida">Área Construida (m²)</label>
            <input type="number" class="form-control" id="area_construida" name="area_construida" 
                value="{{ old('area_construida', $propiedad->area_construida) }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="area_terraza">Área Terraza (m²)</label>
            <input type="number" class="form-control" id="area_terraza" name="area_terraza" 
                value="{{ old('area_terraza', $propiedad->area_terraza) }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="ubicacion">Ubicación</label>
            <input type="text" class="form-control" id="ubicacion" name="ubicacion" 
                value="{{ old('ubicacion', $propiedad->ubicacion) }}" required>
        </div>

        <div class="form-group">
            <label for="precio">Precio</label>
            <input type="number" class="form-control" id="precio" name="precio" 
                value="{{ old('precio', $propiedad->precio) }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="estado">Estado</label>
            <select class="form-control" id="estado" name="estado" required>
                <option value="disponible" {{ $propiedad->estado === 'disponible' ? 'selected' : '' }}>Disponible</option>
                <option value="en negociacion" {{ $propiedad->estado === 'en negociacion' ? 'selected' : '' }}>En Negociación</option>
                <option value="vendida" {{ $propiedad->estado === 'vendida' ? 'selected' : '' }}>Vendida</option>
                <option value="alquilada" {{ $propiedad->estado === 'alquilada' ? 'selected' : '' }}>Alquilada</option>
            </select>
        </div>

        <div class="form-group">
            <label for="año_construccion">Año de Construcción</label>
            <input type="number" class="form-control" id="año_construccion" name="año_construccion" 
                value="{{ old('año_construccion', $propiedad->año_construccion) }}" required>
        </div>

        <div class="form-group">
            <label for="dormitorios">Dormitorios</label>
            <input type="number" class="form-control" id="dormitorios" name="dormitorios" 
                value="{{ old('dormitorios', $propiedad->dormitorios) }}" min="0" required>
        </div>

        <div class="form-group">
            <label for="baños">Baños</label>
            <input type="number" class="form-control" id="baños" name="baños" 
                value="{{ old('baños', $propiedad->baños) }}" min="0" required>
        </div>

        <div class="form-group">
            <label for="parqueos">Parqueos</label>
            <input type="number" class="form-control" id="parqueos" name="parqueos" 
                value="{{ old('parqueos', $propiedad->parqueos) }}" min="0" required>
        </div>

        <div class="form-group">
            <label for="pisos">Pisos</label>
            <input type="number" class="form-control" id="pisos" name="pisos" 
                value="{{ old('pisos', $propiedad->pisos) }}" min="0" required>
        </div>

        <div class="form-group">
            <label for="tipo_suelo">Tipo de Suelo</label>
            <input type="text" class="form-control" id="tipo_suelo" name="tipo_suelo" 
                value="{{ old('tipo_suelo', $propiedad->tipo_suelo) }}" required>
        </div>

        <div class="form-group">
            <label for="servicios_comunitarios">Servicios Comunitarios</label>
            <input type="text" class="form-control" id="servicios_comunitarios" name="servicios_comunitarios" 
                value="{{ old('servicios_comunitarios', $propiedad->servicios_comunitarios) }}" required>
        </div>

        <div class="form-group">
            <label for="gastos_comunes">Gastos Comunes</label>
            <input type="number" class="form-control" id="gastos_comunes" name="gastos_comunes" 
                value="{{ old('gastos_comunes', $propiedad->gastos_comunes) }}" step="0.01" required>
        </div>

        <div class="form-group">
            <label for="estado_inmueble">Estado del Inmueble</label>
            <select class="form-control" id="estado_inmueble" name="estado_inmueble" required>
                <option value="a estrenar" {{ $propiedad->estado_inmueble === 'a estrenar' ? 'selected' : '' }}>A Estrenar</option>
                <option value="usado" {{ $propiedad->estado_inmueble === 'usado' ? 'selected' : '' }}>Usado</option>
            </select>
        </div>

        <div class="form-group">
            <label for="entrega">Entrega</label>
            <select class="form-control" id="entrega" name="entrega" required>
                <option value="inmediata" {{ $propiedad->entrega === 'inmediata' ? 'selected' : '' }}>Inmediata</option>
                <option value="otra_fecha" {{ $propiedad->entrega === 'otra_fecha' ? 'selected' : '' }}>Otra Fecha</option>
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Actualizar Propiedad</button>
    </ffor>
</div>
@endsection
