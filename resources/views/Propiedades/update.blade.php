@extends('Layouts.header')
@section('content')
<div class="container mt-5">
        <h2>Actualizar Propiedad</h2>
        <form action="{{ route('propiedades.update', $propiedad->id_propiedad) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="id_usuario">ID Usuario</label>
                <input type="text" class="form-control" id="id_usuario" name="id_usuario" value="{{ $propiedad->id_usuario }}" readonly>
            </div>

            <div class="form-group">
                <label for="titulo">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" value="{{ $propiedad->titulo }}" readonly>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" readonly>{{ $propiedad->descripcion }}</textarea>
            </div>

            <div class="form-group">
                <label for="tipo_propiedad">Tipo de Propiedad</label>
                <input type="text" class="form-control" id="tipo_propiedad" name="tipo_propiedad" value="{{ $propiedad->tipo_propiedad }}" readonly>
            </div>

            <div class="form-group">
                <label for="area_construida">Área Construida (m²)</label>
                <input type="number" class="form-control" id="area_construida" name="area_construida" value="{{ $propiedad->area_construida }}" required>
            </div>

            <div class="form-group">
                <label for="area_terraza">Área Terraza (m²)</label>
                <input type="number" class="form-control" id="area_terraza" name="area_terraza" value="{{ $propiedad->area_terraza }}" required>
            </div>

            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $propiedad->ubicacion }}" required>
            </div>

            <div class="form-group">
                <label for="precio">Precio</label>
                <input type="number" class="form-control" id="precio" name="precio" value="{{ $propiedad->precio }}" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ $propiedad->estado }}" readonly>
            </div>

            <div class="form-group">
                <label for="año_construccion">Año de Construcción</label>
                <input type="number" class="form-control" id="año_construccion" name="año_construccion" value="{{ $propiedad->año_construccion }}" required>
            </div>

            <div class="form-group">
                <label for="dormitorios">Dormitorios</label>
                <input type="number" class="form-control" id="dormitorios" name="dormitorios" value="{{ $propiedad->dormitorios }}" required>
            </div>

            <div class="form-group">
                <label for="baños">Baños</label>
                <input type="number" class="form-control" id="baños" name="baños" value="{{ $propiedad->baños }}" required>
            </div>

            <div class="form-group">
                <label for="parqueos">Parqueos</label>
                <input type="number" class="form-control" id="parqueos" name="parqueos" value="{{ $propiedad->parqueos }}" required>
            </div>

            <div class="form-group">
                <label for="pisos">Pisos</label>
                <input type="number" class="form-control" id="pisos" name="pisos" value="{{ $propiedad->pisos }}" required>
            </div>

            <div class="form-group">
                <label for="geolocalizacion">Geolocalización</label>
                <input type="text" class="form-control" id="geolocalizacion" name="geolocalizacion" value="{{ $propiedad->geolocalizacion }}" required>
            </div>

            <div class="form-group">
                <label for="tipo_suelo">Tipo de Suelo</label>
                <input type="text" class="form-control" id="tipo_suelo" name="tipo_suelo" value="{{ $propiedad->tipo_suelo }}" required>
            </div>

            <div class="form-group">
                <label for="servicios_comunitarios">Servicios Comunitarios</label>
                <input type="text" class="form-control" id="servicios_comunitarios" name="servicios_comunitarios" value="{{ $propiedad->servicios_comunitarios }}" required>
            </div>

            <div class="form-group">
                <label for="gastos_comunes">Gastos Comunes</label>
                <input type="number" class="form-control" id="gastos_comunes" name="gastos_comunes" value="{{ $propiedad->gastos_comunes }}" required>
            </div>

            <div class="form-group">
                <label for="estado_inmueble">Estado del Inmueble</label>
                <input type="text" class="form-control" id="estado_inmueble" name="estado_inmueble" value="{{ $propiedad->estado_inmueble }}" required>
            </div>

            <div class="form-group">
                <label for="entrega">Entrega</label>
                <input type="text" class="form-control" id="entrega" name="entrega" value="{{ $propiedad->entrega }}" required>
            </div>

            <div class="form-group">
                <label for="fecha_publicacion">Fecha de Publicación</label>
                <input type="date" class="form-control" id="fecha_publicacion" name="fecha_publicacion" value="{{ $propiedad->fecha_publicacion }}" readonly>
            </div>

            <button type="submit" class="btn btn-primary">Actualizar Propiedad</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
@endsection