@extends('Layouts.header')

@section('content')

<div class="container my-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card shadow-lg">
                <div class="card-header bg-primary text-white">
                    <h3 class="mb-0">{{ $Propiedad->titulo }}</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <!-- Mostrar imagen principal de la propiedad -->
                            @if($Propiedad->fotosVideos->isNotEmpty())
                                <img src="{{ asset($Propiedad->fotosVideos->first()->url_media) }}"
                                    class="img-fluid rounded mb-3" alt="Imagen de la propiedad">
                            @else
                                <img src="https://via.placeholder.com/500" class="img-fluid rounded mb-3"
                                    alt="Imagen no disponible">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <!-- Detalles de la propiedad -->
                            <p><strong>Descripción:</strong> {{ $Propiedad->descripcion }}</p>
                            <p><strong>Tipo de Propiedad:</strong> {{ ucfirst($Propiedad->tipo_propiedad) }}</p>
                            <p><strong>Ubicación:</strong> {{ $Propiedad->ubicacion }}</p>
                            <p><strong>Precio:</strong> ${{ number_format($Propiedad->precio, 2) }}</p>
                            <p><strong>Año de Construcción:</strong> {{ $Propiedad->año_construccion }}</p>
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-4">
                            <p><strong>Área Construida:</strong> {{ $Propiedad->area_construida }} m²</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Dormitorios:</strong> {{ $Propiedad->dormitorios }}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Baños:</strong> {{ $Propiedad->baños }}</p>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-4">
                            <p><strong>Parqueos:</strong> {{ $Propiedad->parqueos }}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Pisos:</strong> {{ $Propiedad->pisos }}</p>
                        </div>
                        <div class="col-md-4">
                            <p><strong>Estado:</strong> {{ ucfirst($Propiedad->estado) }}</p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Tipo de Suelo:</strong> {{ $Propiedad->tipo_suelo }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Servicios Comunitarios:</strong> {{ $Propiedad->servicios_comunitarios }}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Gastos Comunes:</strong> ${{ number_format($Propiedad->gastos_comunes, 2) }}</p>
                        </div>
                        <div class="col-md-6">
                            <p><strong>Estado del Inmueble:</strong> {{ ucfirst($Propiedad->estado_inmueble) }}</p>

                            <!-- Botón para abrir el modal de contacto -->
                            <a href="{{ route('mensaje.create', ['id' => $Propiedad->id_propiedad]) }}"
                                class="btn btn-primary mt-3 mb-3">
                                Contactar con el comprador
                            </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>Entrega:</strong> {{ ucfirst($Propiedad->entrega) }}</p>
                        </div>
                    </div>

                    <!-- Sección de comentarios -->
                    <h3>Comentarios</h3>
                    <form action="{{ route('comentarios.store') }}" method="POST">
                        @csrf
                        <input type="hidden" name="id_propiedad" value="{{ $Propiedad->id_propiedad }}">
                        <div class="form-group">
                            <label for="puntuacion">Puntuación</label>
                            <select class="form-control" id="puntuacion" name="puntuacion" required>
                                <option value="">Selecciona una puntuación</option>
                                <option value="1">1 - Muy Malo</option>
                                <option value="2">2 - Malo</option>
                                <option value="3">3 - Regular</option>
                                <option value="4">4 - Bueno</option>
                                <option value="5">5 - Excelente</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="comentario">Comentario</label>
                            <textarea class="form-control" id="comentario" name="comentario" rows="3"
                                placeholder="Escribe tu comentario aquí" required></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Publicar Comentario</button>
                    </form>

                    <div class="container mt-5">
                        <!-- Mostrar los comentarios -->
                        <h4>Comentarios de otros usuarios</h4>
                        @if($Propiedad->reseñas->isEmpty())
                            <p>No hay comentarios para esta propiedad.</p>
                        @else
                            @foreach($Propiedad->reseñas as $reseña)
                                <div class="container mt-3">
                                    <div class="card shadow" style="border-radius: 15px;">
                                        <div class="card-body">
                                            <h5 class="card-title text-primary">{{ $reseña->user->name }}</h5>
                                            <h6 class="card-subtitle mb-2 text-muted">
                                                Puntuación:
                                                <span class="badge badge-success">{{ $reseña->calificacion }}</span>
                                            </h6>
                                            <p class="card-text">{{ $reseña->comentario }}</p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection